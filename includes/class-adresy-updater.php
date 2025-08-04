<?php
defined('ABSPATH') || exit;

class Adresy_Updater
{
    public static function init()
    {
        add_filter('pre_set_site_transient_update_plugins', [__CLASS__, 'check_for_update']);
        add_filter('plugins_api', [__CLASS__, 'plugin_info'], 10, 3);
    }

    public static function check_for_update($transient)
    {
        if (empty($transient->checked)) {
            return $transient;
        }

        $plugin_slug = plugin_basename(ADRESY_PATH . 'adresy.php');

        if (!isset($transient->checked[$plugin_slug])) {
            return $transient;
        }

        $current_version = $transient->checked[$plugin_slug];

        if (!$current_version) {
            return $transient;
        }

        $latest = self::get_latest_gitlab_release();

        if ($latest && version_compare($latest['version'], $current_version, '>')) {
            $transient->response[$plugin_slug] = (object)[
                'slug' => 'adresy',
                'plugin' => $plugin_slug,
                'new_version' => $latest['version'],
                'url' => 'https://gitlab.com/useral1/useral-woo-locator',
                'package' => $latest['zip_url'],
            ];
        }

        return $transient;
    }


    public static function plugin_info($res, $action, $args)
    {
        if ($action !== 'plugin_information' || $args->slug !== 'adresy') {
            return false;
        }

        $latest = self::get_latest_gitlab_release();

        if (!$latest) {
            return false;
        }

        return (object)[
            'name' => 'Adresy',
            'slug' => 'adresy',
            'version' => $latest['version'],
            'download_link' => $latest['zip_url'],
            'author' => '<a href="#">Adresy Team</a>',
            'homepage' => 'https://gitlab.com/useral1/useral-woo-locator',
            'sections' => [
                'description' => 'Modal address finder plugin from GitLab.',
            ],
        ];
    }

    private static function get_latest_gitlab_release()
    {
        $cached = get_transient('adresy_latest_release');
        if ($cached) return $cached;

        $url = 'https://racket.ae/?adresy_update_api=1';

        $response = wp_remote_get($url, [
            'timeout' => 15,
        ]);

        if (is_wp_error($response)) {
            return false;
        }

        $body_raw = wp_remote_retrieve_body($response);
        $body = json_decode($body_raw, true);

        if (
            json_last_error() !== JSON_ERROR_NONE ||
            empty($body['version']) ||
            empty($body['download_url'])
        ) {
            return false;
        }

        $latest = [
            'version' => $body['version'],
            'zip_url' => $body['download_url'],
        ];
        error_log(print_r($latest, true));

        set_transient('adresy_latest_release', $latest, 6 * HOUR_IN_SECONDS);

        return $latest;
    }
}
