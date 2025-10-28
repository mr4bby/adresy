<?php

/**
 * Plugin Name: Adresy
 * Plugin URI: 
 * Description: Modal Address Finder for fast and user-friendly address selection.
 * Version: 0.0.1
 * Author: Adresy Team
 * Text Domain: adresy
 * Author URI: 
 * Tested up to: 6.8.1
 * WC tested up to: 9.8.5
 * WC requires at least: 7.5
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined('ABSPATH') || exit;

final class Adresy_Plugin
{

    private static $instance = null;

    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $this->define_constants();
        $this->includes();
        $this->hooks();
        Adresy_Shortcodes::init();
        Adresy_Ajax::init();
        Adresy_Updater::init();

    }

    private function define_constants()
    {
        define('ADRESY_VERSION', '0.0.1');
        define('ADRESY_PREFIX', 'adresy');
        define('ADRESY_PATH', plugin_dir_path(__FILE__));
        define('ADRESY_URL', plugin_dir_url(__FILE__));
    }

    private function includes()
    {
        require_once ADRESY_PATH . 'includes/ajax/class-adresy-ajax.php';
        require_once ADRESY_PATH . 'includes/shortcodes/class-adresy-shortcodes.php';
        require_once ADRESY_PATH . 'includes/components/modal/class-adresy-modal.php';
        require_once ADRESY_PATH . 'includes/countries-states.php';
        require_once ADRESY_PATH . 'includes/class-adresy-updater.php';

    }

    private function hooks()
    {
        // Guard: if WooCommerce is required but not active, show admin notice and avoid WC-dependent hooks
        add_action('admin_notices', function () {
            if ( ! class_exists('WooCommerce') ) {
                echo '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('Adresy: WooCommerce is not active. Some features are disabled.', 'adresy') . '</p></div>';
            }
        });

        add_action('plugins_loaded', [$this, 'load_textdomain']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
        add_action('before_woocommerce_init', [$this, 'declare_wc_compatibility']);

        // Only add WC-dependent rendering if WooCommerce is active
        if ( class_exists( 'WooCommerce' ) ) {
            add_action('wp_footer', ['Adresy_Modal', 'render_modal']);
        }
        add_action('admin_menu', [$this, 'add_admin_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_adresy_admin_assets']);

        add_shortcode('adresy_modal_trigger', [$this, 'modal_trigger_shortcode']);
    }

    public function load_textdomain()
    {
        load_plugin_textdomain('adresy', false, dirname(plugin_basename(__FILE__)) . '/languages/');
    }

    public function enqueue_assets()
    {
        // Only enqueue assets when the current post contains our shortcodes to avoid loading on all pages
        global $post;

        $has_desktop_shortcode = false;
        $has_mobile_shortcode = false;

        if ( isset( $post ) && is_singular() ) {
            $content = $post->post_content;
            if ( has_shortcode( $content, 'adresy_location_trigger_desktop' ) ) {
                $has_desktop_shortcode = true;
            }
            if ( has_shortcode( $content, 'adresy_location_trigger_mobile' ) ) {
                $has_mobile_shortcode = true;
            }
        }

        // If neither shortcode exists on this page, skip enqueueing assets
        if ( ! $has_desktop_shortcode && ! $has_mobile_shortcode ) {
            return;
        }

        wp_enqueue_style('adresy-style-mob', ADRESY_URL . 'assets/css/modal-style-smallsc.css', [], ADRESY_VERSION);
        wp_enqueue_style('adresy-style', ADRESY_URL . 'assets/css/modal-style.css', [], ADRESY_VERSION);
        wp_enqueue_style('adresy-select2-css', ADRESY_URL . 'assets/css/select2.min.css', [], ADRESY_VERSION);

        wp_enqueue_script('adresy-select2-js', ADRESY_URL . 'assets/js/select2.min.js', ['jquery'], ADRESY_VERSION, true);
        wp_enqueue_script('adresy-select2-js-select', ADRESY_URL . 'assets/js/select.js', ['jquery'], ADRESY_VERSION);
        if ( $has_desktop_shortcode ) {
            wp_enqueue_script('adresy-modal', ADRESY_URL . 'assets/js/adresy-modal.js', ['jquery'], ADRESY_VERSION, true);
            wp_localize_script('adresy-modal', 'adresy_ajax', ['ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('adresy_nonce')]);
        }
        if ( $has_mobile_shortcode ) {
            wp_enqueue_script('adresy-modal_mobile', ADRESY_URL . 'assets/js/adresy-modal-mobile.js', ['jquery'], ADRESY_VERSION, true);
            wp_localize_script('adresy-modal_mobile', 'adresy_ajax_mob', ['ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('adresy_nonce')]);
        }

    }

    public function enqueue_adresy_admin_assets($hook)
    {
        if ($hook !== 'toplevel_page_adresy-settings') {
            return;
        }

        wp_enqueue_style('adresy-admin-setings', ADRESY_URL . 'assets/css/admin-settings.css', [], ADRESY_VERSION);
    }

    public function declare_wc_compatibility()
    {
        if (class_exists(\Automattic\WooCommerce\Utilities\FeaturesUtil::class)) {
            \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
                'custom_order_tables',
                __FILE__,
                true
            );
        }
    }
    public function add_admin_menu()
    {
        require_once ADRESY_PATH . 'includes/admin/settings.php';

        $settings = new \Adresy\Admin\SettingsPage();

        add_menu_page(
            __('Adresy Settings', ADRESY_PREFIX),
            __('Adresy', ADRESY_PREFIX),
            'manage_options',
            'adresy-settings',
            [$settings, 'render'], 
            'dashicons-location-alt',
            56
        );
    }
}

Adresy_Plugin::instance();
