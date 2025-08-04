<?php
class Adresy_Shortcodes
{
    public static function init()
    {
        require_once ADRESY_PATH . 'includes/components/modal/class-wc-default-location.php';

        add_shortcode('adresy_location_trigger_desktop', [__CLASS__, 'location_trigger_desktop']);
        add_shortcode('adresy_location_trigger_mobile', [__CLASS__, 'location_trigger_mobile']);
    }

    private static function get_location_data()
    {
        $default_location = new WC_Default_Location();
        $adresy_state = '';
        $adresy_country = '';
        $meta_shipping = false;

        if (is_user_logged_in()) {
            $user_id = get_current_user_id();
            $meta_state = get_user_meta($user_id, 'adresy_customer_state', true);
            $meta_country = get_user_meta($user_id, 'adresy_customer_country', true);
            $meta_shipping = get_user_meta($user_id, 'adresy_shipping_selected');

            if (!empty($meta_state)) {
                $adresy_state = sanitize_text_field($meta_state);
            }
            if (!empty($meta_country)) {
                $adresy_country = sanitize_text_field($meta_country);
            }

            $shipping_first_name = get_user_meta($user_id, 'shipping_first_name', true);
            $shipping_last_name  = get_user_meta($user_id, 'shipping_last_name', true);
            $shipping_state_code = get_user_meta($user_id, 'shipping_state', true);
            $shipping_city       = get_user_meta($user_id, 'shipping_city', true);
            $shipping_address_1  = get_user_meta($user_id, 'shipping_address_1', true);
            $shipping_country_code = get_user_meta($user_id, 'shipping_country', true);


            $wc_countries = WC()->countries;
            $all_states = $wc_countries->get_states();

            $shipping_state = isset($all_states[$shipping_country_code][$shipping_state_code])
                ? $all_states[$shipping_country_code][$shipping_state_code]
                : $shipping_state_code;
        }

        if (empty($adresy_state) && isset($_COOKIE['adresy_customer_state'])) {
            $adresy_state = sanitize_text_field($_COOKIE['adresy_customer_state']);
        }
        if (empty($adresy_country) && isset($_COOKIE['adresy_customer_country'])) {
            $adresy_country = sanitize_text_field($_COOKIE['adresy_customer_country']);
        }
        $wc_countries = new WC_Countries();
        $locations = '';
        $line1 = '';
        $countries = $wc_countries->countries;
        $specific_countries = get_option('woocommerce_specific_allowed_countries');
        $cookie_country = $countries[$adresy_country] ?? $adresy_country;
        $mob_locations = '';


        if (!empty($adresy_state)) {
            $states = $default_location->get_state();
            if (!empty($specific_countries) && in_array($locations, $specific_countries)) {
                $mob_locations = $states[$adresy_state] ?? $adresy_state;
                $locations = $states[$adresy_state] ?? $adresy_state;
            } else {
                $mob_locations = $states[$adresy_state] ?? $cookie_country . ', ' . $adresy_state;
                $locations = $states[$adresy_state] ??  $cookie_country . ', ' . $adresy_state;
            }
        } elseif (!empty($adresy_country)) {
            if (class_exists('WC_Countries')) {
                $locations = $countries[$adresy_country] ?? $adresy_country;
                $mob_locations = $countries[$adresy_country] ?? $adresy_country;
            } else {
                $locations = $adresy_country;
                $mob_locations = $adresy_country;
            }
        } elseif ($meta_shipping == true) {
            $line1 = $shipping_first_name ? $shipping_first_name : $shipping_last_name;
            $locations = $shipping_state . ',' . $shipping_city . ',' . $shipping_address_1;
            $mob_locations = $shipping_state . ',' . $shipping_city;
        }

        return [
            'locations' => $locations,
            'mob_locations' => $mob_locations,
            'line1' => $line1,
            'default_state_name' => $default_location->get_state_name(),
        ];
    }

    public static function location_trigger_desktop()
    {
        ob_start();
        $settings = get_option('adresy_settings', []);
        $mode_desktop = $settings['mode_desktop'] ?? 'dark';

        $data = self::get_location_data();

?>
        <div class="adresy-location-trigger mode-desktop-<?php echo esc_attr($mode_desktop); ?> desktop-only">
            <div id="adresy-modal-label" class="adresy-open-modal">
                <div class="adresy-modal-ingress-icon">
                    <!-- svg icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                        <g transform="translate(1.4 1.4) scale(2.81 2.81)" fill="none" stroke="none" stroke-width="0">
                            <path class="adresy-icon-path" d="M 45.229 90.18 l -26.97 -31.765 c -5.419 -6.387 -8.404 -14.506 -8.404 -22.861 c 0 -19.506 15.869 -35.374 35.374 -35.374 s 35.375 15.869 35.375 35.374 c 0 8.355 -2.985 16.474 -8.405 22.861 L 45.229 90.18 z M 45.229 3.121 c -17.884 0 -32.433 14.549 -32.433 32.433 c 0 7.659 2.737 15.102 7.705 20.958 l 24.728 29.125 l 24.728 -29.125 c 4.969 -5.855 7.706 -13.299 7.706 -20.958 C 77.662 17.67 63.113 3.121 45.229 3.121 z M 45.229 49.801 c -8.499 0 -15.413 -6.915 -15.413 -15.414 s 6.915 -15.414 15.413 -15.414 c 8.499 0 15.413 6.915 15.413 15.414 S 53.728 49.801 45.229 49.801 z M 45.229 21.914 c -6.878 0 -12.473 5.596 -12.473 12.473 s 5.595 12.473 12.473 12.473 s 12.473 -5.596 12.473 -12.473 S 52.106 21.914 45.229 21.914 z" stroke-linecap="round" />
                        </g>
                    </svg>
                </div>
                <div class="adresy-modal-ingress-block">
                    <span class="adresy-line-1">
                        <?php
                        if (!empty($data['locations'])) {
                            echo 'Delivering to <p>' .  esc_html($data['line1']) . '</p>';
                        } else {
                            echo 'Delivering to <p>' . esc_html($data['default_state_name']) . '</p>';
                        }
                        ?>
                    </span>
                    <span class="adresy-line-2">
                        <?php
                        if (!empty($data['locations'])) {
                            echo esc_html($data['locations']);
                        } else {
                            echo esc_html__('Update location', 'adresy');
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    <?php

        return ob_get_clean();
    }

    public static function location_trigger_mobile()
    {
        ob_start();
        $settings = get_option('adresy_settings', []);
        $mode_mobile = $settings['mode_mobile'] ?? 'dark';

        $data = self::get_location_data();

        $arrow = '<svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 9L12 15L18 9" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

    ?>
        <div class="adresy-location-trigger mode-mobile-<?php echo esc_attr($mode_mobile); ?> mobile-only">
            <div id="adresy-modal-label" class="adresy-open-modal">
                <div class="adresy-modal-ingress-icon">
                    <!-- svg icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                        <g transform="translate(1.4 1.4) scale(2.81 2.81)" fill="none" stroke="none" stroke-width="0">
                            <path class="adresy-icon-path" d="M 45.229 90.18 l -26.97 -31.765 c -5.419 -6.387 -8.404 -14.506 -8.404 -22.861 c 0 -19.506 15.869 -35.374 35.374 -35.374 s 35.375 15.869 35.375 35.374 c 0 8.355 -2.985 16.474 -8.405 22.861 L 45.229 90.18 z M 45.229 3.121 c -17.884 0 -32.433 14.549 -32.433 32.433 c 0 7.659 2.737 15.102 7.705 20.958 l 24.728 29.125 l 24.728 -29.125 c 4.969 -5.855 7.706 -13.299 7.706 -20.958 C 77.662 17.67 63.113 3.121 45.229 3.121 z M 45.229 49.801 c -8.499 0 -15.413 -6.915 -15.413 -15.414 s 6.915 -15.414 15.413 -15.414 c 8.499 0 15.413 6.915 15.413 15.414 S 53.728 49.801 45.229 49.801 z M 45.229 21.914 c -6.878 0 -12.473 5.596 -12.473 12.473 s 5.595 12.473 12.473 12.473 s 12.473 -5.596 12.473 -12.473 S 52.106 21.914 45.229 21.914 z" stroke-linecap="round" />
                        </g>
                    </svg>
                </div>
                <div class="adresy-modal-ingress-block">
                    <span class="adresy-line-1">
                        <?php
                        if (!empty($data['locations'])) {
                            echo 'Delivering to <p>' .  esc_html($data['line1']) . '</p>';
                        } else {
                            echo 'Delivering to <p>' . esc_html($data['default_state_name']) . '</p>';
                        }
                        ?>
                    </span>
                    <span class="adresy-line-2">
                        <?php
                        if (!empty($data['mob_locations'])) {
                            echo ' - ' . esc_html($data['mob_locations']) . ' ' . $arrow;
                        } else {
                            echo ' - ' . esc_html__('Update location', 'adresy') . ' ' . $arrow;
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
<?php

        return ob_get_clean();
    }
}
