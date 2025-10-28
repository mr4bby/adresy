<?php
class Adresy_Ajax
{
    public static function init()
    {
        // Register AJAX handlers only if WP_Ajax is usable. Also namespace handlers to avoid collisions.
        add_action('wp_ajax_adresy_save_state_location', [__CLASS__, 'save_state_location']);
        add_action('wp_ajax_nopriv_adresy_save_state_location', [__CLASS__, 'save_state_location']);

        add_action('wp_ajax_adresy_save_country_location', [__CLASS__, 'save_country_location']);
        add_action('wp_ajax_nopriv_adresy_save_country_location', [__CLASS__, 'save_country_location']);

        add_action('wp_ajax_adresy_save_shipping_location', [__CLASS__, 'save_shipping_location']);
        add_action('wp_ajax_nopriv_adresy_save_shipping_location', [__CLASS__, 'save_shipping_location']);

        add_action('wp_ajax_adresy_find_address', [__CLASS__, 'find_address']);
        add_action('wp_ajax_nopriv_adresy_find_address', [__CLASS__, 'find_address']);
    }

    public static function save_state_location()
    {
        require_once ADRESY_PATH . 'includes/components/modal/class-wc-default-location.php';
        $default_location = new WC_Default_Location();
        $states = $default_location->get_state();
        $defualt_country = $default_location->get_country_name();
        check_ajax_referer('adresy_nonce', 'nonce');
        $arrow = '<svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 9L12 15L18 9" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

        $state_m = isset($_POST['state']) ? sanitize_text_field(wp_unslash($_POST['state'])) : '';

        if (empty($state_m) || $state_m === 'disable') {
            wp_send_json_error(['message' => __('Please choose your state.', 'adresy')], 400);
        }

        setcookie('adresy_customer_country', $defualt_country, time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);
        setcookie('adresy_customer_state', $state_m, time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);

        if (is_user_logged_in()) {
            update_user_meta(get_current_user_id(), 'adresy_customer_country', $defualt_country);
            update_user_meta(get_current_user_id(), 'adresy_customer_state', $state_m);
            update_user_meta(get_current_user_id(), 'adresy_shipping_selected', '');
        }

        $label = isset($states[$state_m]) ? $states[$state_m] : $state_m;
        wp_send_json_success(['label' => wp_kses_post($label), 'icon' => $arrow]);
    }


    public static function save_country_location()
    {
        require_once ADRESY_PATH . 'includes/components/modal/class-wc-default-location.php';
        $wc_countries = new WC_Countries();
        $countries = $wc_countries->countries;
        check_ajax_referer('adresy_nonce', 'nonce');
        $arrow = '<svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 9L12 15L18 9" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

        $country_m = isset($_POST['country']) ? sanitize_text_field(wp_unslash($_POST['country'])) : '';

        if (empty($country_m)) {
            wp_send_json_error(['message' => __('Choose your country.', 'adresy')], 400);
        }

        setcookie('adresy_customer_country', $country_m, time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);
        setcookie('adresy_customer_state', '', time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);

        if (is_user_logged_in()) {
            update_user_meta(get_current_user_id(), 'adresy_customer_country', $country_m);
            update_user_meta(get_current_user_id(), 'adresy_customer_state', '');
            update_user_meta(get_current_user_id(), 'adresy_shipping_selected', '');
        }

        $label = isset($countries[$country_m]) ? $countries[$country_m] : $country_m;
        wp_send_json_success(['label' => wp_kses_post($label), 'icon' => $arrow]);
    }


    
    public static function save_shipping_location()
    {
        require_once ADRESY_PATH . 'includes/components/modal/class-wc-default-location.php';
        check_ajax_referer('adresy_nonce', 'nonce');

        $user_id = get_current_user_id();
        $shipping_first_name = get_user_meta($user_id, 'shipping_first_name', true);
        $shipping_last_name  = get_user_meta($user_id, 'shipping_last_name', true);
        $shipping_state_code = get_user_meta($user_id, 'shipping_state', true);
        $shipping_city       = get_user_meta($user_id, 'shipping_city', true);
        $shipping_address_1  = get_user_meta($user_id, 'shipping_address_1', true);
        $shipping_country_code = get_user_meta($user_id, 'shipping_country', true);
        $arrow = '<svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 9L12 15L18 9" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

        $wc_countries = WC()->countries;
        $all_states = $wc_countries->get_states();

        $shipping_state = isset($all_states[$shipping_country_code][$shipping_state_code])
        ? $all_states[$shipping_country_code][$shipping_state_code]
        : $shipping_state_code;


        $shipping = [
            'line1' => $shipping_first_name ? esc_html($shipping_first_name . ' - ') : esc_html($shipping_last_name . ' - '),
            'line2' => ' ' . esc_html($shipping_state) . ', ' . esc_html($shipping_city) . $arrow,
        ];

        if ( empty( $shipping ) ) {
            wp_send_json_error(['message' => __('Choose your location.', 'adresy')], 400);
        }
        setcookie('adresy_customer_country','', time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);
        setcookie('adresy_customer_state', '', time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);

        if (is_user_logged_in()) {
            update_user_meta(get_current_user_id(), 'adresy_customer_country', '');
            update_user_meta(get_current_user_id(), 'adresy_customer_state', '');
            update_user_meta(get_current_user_id(), 'adresy_shipping_selected', true);
        }

        wp_send_json_success($shipping);
    }

    public static function find_address()
    {
        check_ajax_referer('adresy_nonce', 'nonce');
        $settings = get_option('adresy_settings', []);
        $arrow = '<svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 9L12 15L18 9" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>';
        $selected_mode_option = isset($settings['geo_option']) ? $settings['geo_option'] : 'opencage';
        $key_input = isset($settings['key_input']) ? $settings['key_input'] : '';
        $lat = isset($_POST['lat']) ? sanitize_text_field(wp_unslash($_POST['lat'])) : '';
        $lng = isset($_POST['lang']) ? sanitize_text_field(wp_unslash($_POST['lang'])) : '';
       
        if ( empty( $lat ) || empty( $lng ) ) {
            wp_send_json_error(['message' => __('Missing coordinates', 'adresy')], 400);
        }
        if ( empty( $key_input ) ) {
            wp_send_json_error(['message' => __('API key required', 'adresy')], 400);
        }
        if ($selected_mode_option == 'opencage' ) {
        $url = "https://api.opencagedata.com/geocode/v1/json?q={$lat}+{$lng}&key={$key_input}&no_annotations=1&language=en";
        } else {
            wp_send_json_error(['message' => 'API Link defined']);
        }

        $request = wp_remote_get($url, [ 'timeout' => 10 ]);

        if ( is_wp_error( $request ) ) {
            wp_send_json_error(['message' => __('API request error', 'adresy')], 500);
        }

        $response_code = wp_remote_retrieve_response_code( $request );
        if ( 200 !== intval( $response_code ) ) {
            wp_send_json_error(['message' => __('Invalid API response', 'adresy')], 502);
        }

        $data = json_decode(wp_remote_retrieve_body($request), true);

        if ( empty( $data['results'][0]['components'] ) ) {
            wp_send_json_error(['message' => __('Invalid response structure', 'adresy')], 502);
        }

        $components = $data['results'][0]['components'];
        $country = isset( $components['ISO_3166-1_alpha-2'] ) ? sanitize_text_field( $components['ISO_3166-1_alpha-2'] ) : '';
        $state = isset( $components['city'] ) ? sanitize_text_field( $components['city'] ) : ( isset( $components['state'] ) ? sanitize_text_field( $components['state'] ) : ( isset( $components['town'] ) ? sanitize_text_field( $components['town'] ) : '' ) );

        $wc_countries = new WC_Countries();
        $countries = $wc_countries->countries;

        $country_label = isset( $countries[ $country ] ) ? $countries[ $country ] : $country;

        setcookie( 'adresy_customer_country', $country_label, time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN );
        setcookie( 'adresy_customer_state', $state, time() + MONTH_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN );

        if ( is_user_logged_in() ) {
            update_user_meta( get_current_user_id(), 'adresy_customer_country', $country_label );
            update_user_meta( get_current_user_id(), 'adresy_customer_state', $state );
            update_user_meta( get_current_user_id(), 'adresy_shipping_selected', '' );
        }

        $loc = [ 'country' => wp_kses_post( $country_label ), 'state' => wp_kses_post( $state ), 'icon' => $arrow ];
        wp_send_json_success( $loc );
 
    }
}
