<?php
// adresy/includes/components/modal/class-adresy-modal.php
defined('ABSPATH') || exit;

class Adresy_Modal
{

    public static function render_modal()
    {
        $data = self::prepare_data();
        require ADRESY_PATH . 'template/modal/address-modal.php';
        require ADRESY_PATH . 'template/modal/address-modal-mobile.php';
    }

    private static function prepare_data()
    {
        $default_location = new WC_Default_Location();
        $states = $default_location->get_state();
        $country = strtoupper($default_location->get_country_name());

        $selected_state = is_user_logged_in()
            ? get_user_meta(get_current_user_id(), 'adresy_customer_state', true)
            : '';

        if (empty($selected_state) && isset($_COOKIE['adresy_customer_state'])) {
            $selected_state = sanitize_text_field($_COOKIE['adresy_customer_state']);
        }

        $options = '';
        foreach ($states as $key => $state) {
            $selected = selected($key, $selected_state, false);
            $options .= sprintf(
                '<option value="%s" %s>%s</option>',
                esc_attr($key),
                $selected,
                esc_html($state)
            );
        }

        $allowed = get_option('woocommerce_allowed_countries');
        $wc_countries = WC()->countries;
        $all_countries = $wc_countries->get_countries();

        $selected_country = is_user_logged_in()
            ? get_user_meta(get_current_user_id(), 'adresy_customer_country', true)
            : '';

        if (empty($selected_country) && isset($_COOKIE['adresy_customer_country'])) {
            $selected_country = sanitize_text_field($_COOKIE['adresy_customer_country']);
        }

        $country_selling_location = '';
        $country_selling_location_list = '';
        if ($allowed === 'all') {
            foreach ($all_countries as $code => $name) {
                if (strtoupper($name) === $country) continue;
                $selected = selected($code, $selected_country, false);
                $is_selected = ($code === $selected_country);
                $selected_attr = $is_selected ? 'checked' : '';
                $selected_class = $is_selected ? 'selected' : '';

                $country_selling_location .= sprintf(
                    '<option value="%s" %s>%s</option>',
                    esc_attr($code),
                    $selected,
                    esc_html($name)
                );

                $country_selling_location_list .= sprintf(
                    '<li class="adresy-country-item %s">
                        <label>
                            <input type="radio" name="adresy_country_mobile" value="%s" %s>
                            <span>%s</span>
                        </label>
                    </li>',
                    esc_attr($selected_class),
                    esc_attr($code),
                    $selected_attr,
                    esc_html($all_countries[$code])
                );
            }
        } elseif ($allowed === 'specific') {
            $specific_countries = get_option('woocommerce_specific_allowed_countries');
            if (!empty($specific_countries)) {
                foreach ($specific_countries as $code) {
                    if (isset($all_countries[$code])) {
                        if (strtoupper($all_countries[$code]) === $country) continue;
                        $selected = selected($code, $selected_country, false);
                        $is_selected = ($code === $selected_country);
                        $selected_attr = $is_selected ? 'checked' : '';
                        $selected_class = $is_selected ? 'selected' : '';

                        $country_selling_location .= sprintf(
                            '<option value="%s" %s>%s</option>',
                            esc_attr($code),
                            $selected,
                            esc_html($all_countries[$code])
                        );

                        $country_selling_location_list .= sprintf(
                            '<li class="adresy-country-item %s">
                                <label>
                                    <input type="radio" name="adresy_country_mobile" value="%s" %s>
                                    <span>%s</span>
                                </label>
                            </li>',
                            esc_attr($selected_class),
                            esc_attr($code),
                            $selected_attr,
                            esc_html($all_countries[$code])
                        );
                    }
                }
            }
        } else {
            $country_selling_location .= '<option disabled>' . esc_html__('No countries available', 'adresy') . '</option>';
            $country_selling_location_list .= '<li class="adresy-empty-country">' . esc_html__('No countries available', 'adresy') . '</li>';
        }
        $settings = get_option('adresy_settings', []);
        $button_color = isset($settings['button_color']) ? $settings['button_color'] : '#0073aa';
        $button_text_color = isset($settings['button_text_color']) ? $settings['button_text_color'] : '#ffffff';
        $my_account_page_id = get_option('woocommerce_myaccount_page_id');
        $my_account_page_url = $my_account_page_id ? get_permalink($my_account_page_id) : home_url('/my-account');

        return [
            'options' => $options,
            'country_selling_location' => $country_selling_location,
            'country_selling_location_list' => $country_selling_location_list,
            'country' => $country,
            'top_body' => is_user_logged_in()
                ? self::get_user_shipping_address()
                : '<div class="adresy-modal-before"><p>Delivery options and delivery speeds may vary for different locations</p><a href="' . esc_url($my_account_page_url) . '" style="background-color: ' . esc_attr($button_color) . '; color: ' . esc_attr($button_text_color) . ';">Sign in to see your addresses</a></div>',
        ];
    }

    private static function get_user_shipping_address()
    {
        $user_id = get_current_user_id();
        $shipping_first_name = get_user_meta($user_id, 'shipping_first_name', true);
        $shipping_last_name  = get_user_meta($user_id, 'shipping_last_name', true);
        $shipping_address_1  = get_user_meta($user_id, 'shipping_address_1', true);
        $shipping_address_2  = get_user_meta($user_id, 'shipping_address_2', true);
        $shipping_city       = get_user_meta($user_id, 'shipping_city', true);
        $shipping_state_code = get_user_meta($user_id, 'shipping_state', true);
        // $shipping_postcode   = get_user_meta($user_id, 'shipping_postcode', true);
        $shipping_country_code = get_user_meta($user_id, 'shipping_country', true);
        $meta_shipping = get_user_meta(get_current_user_id(), 'adresy_shipping_selected', true);

        $wc_countries = WC()->countries;
        $all_countries = $wc_countries->get_countries();
        $all_states = $wc_countries->get_states();

        $shipping_country = isset($all_countries[$shipping_country_code])
            ? $all_countries[$shipping_country_code]
            : $shipping_country_code;

        $shipping_state = isset($all_states[$shipping_country_code][$shipping_state_code])
            ? $all_states[$shipping_country_code][$shipping_state_code]
            : $shipping_state_code;

        $edit_address_url = wc_get_endpoint_url('edit-address', 'shipping', wc_get_page_permalink('myaccount'));
        $edit_link = '<div class="adresy-edit-link"><a href="' . esc_url($edit_address_url) . '">' . esc_html__('Manage address', 'adresy') . '</a></div>';

        if (empty($shipping_address_1)) {
            return '<div class="adresy-modal-after"><p>Delivery options and delivery speeds may vary for different locations</p><div class="adresy-mab"><p class="adresy-shipping-address-dect">' . esc_html__('No shipping address set.', 'adresy') . '</p>' . $edit_link . '</div></div>';
        }

        $full_name = trim($shipping_first_name . ' ' . $shipping_last_name);
        $address = sprintf(
            '<strong>%s</strong><br>%s<br>%s, %s<br>%s',
            esc_html($full_name),
            esc_html($shipping_address_1),
            esc_html($shipping_address_2),
            esc_html($shipping_state),
            esc_html($shipping_city),
            // esc_html($shipping_postcode),
        );
        $address = ($meta_shipping == true)
            ? '<p class="adresy-shipping-address active">' . nl2br($address) . '</p>'
            : '<p class="adresy-shipping-address">' . nl2br($address) . '</p>';

        return '<div class="adresy-modal-after"> <p>Delivery options and delivery speeds may vary for different locations</p><div class="adresy-mab">' . $address . $edit_link . '</div></div>';
    }
}
