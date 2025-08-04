<?php

namespace Adresy\Admin;

class SettingsPage
{
    public function render()
    {

?>
        <div class="adresy-info">
            <div class="adresy-info-text">
                <img src="<?php echo plugins_url('assets/images/adresy.png', plugin_dir_path(__DIR__)); ?>" alt="Adresy Logo" />
                <div>
                    <h1>Adresy Settings</h1>
                    <p>Plugin version: <?php echo ADRESY_VERSION; ?></p>
                </div>
            </div>
            <div class="adresy-info-links">
                <a href="https://adresy.com">Adresy</a>
                <a href="https://adresy.com/docs">Documentation</a>
                <a href="https://adresy.com/support">Support</a>
            </div>
        </div>

        <?php
        if (isset($_POST['adresy_settings_save_btn']) && check_admin_referer('adresy_settings_save', 'adresy_settings_nonce')) {
            $settings = [];
            $settings['mode_desktop'] = isset($_POST['adresy_mode_desktop']) ? sanitize_text_field($_POST['adresy_mode_desktop']) : 'dark';
            $settings['mode_mobile']  = isset($_POST['adresy_mode_mobile']) ? sanitize_text_field($_POST['adresy_mode_mobile']) : 'dark';
            $settings['button_color'] = isset($_POST['adresy_button_color']) ? sanitize_hex_color($_POST['adresy_button_color']) : '#0073aa';
            $settings['button_text_color'] = isset($_POST['adresy_button_text_color']) ? sanitize_hex_color($_POST['adresy_button_text_color']) : '#ffffff';
            $settings['geo_option'] = isset($_POST['adresy_geo_option']) ? sanitize_text_field($_POST['adresy_geo_option']) : 'option2';
            $settings['key_input']   = isset($_POST['adresy_key_input']) ? sanitize_text_field($_POST['adresy_key_input']) : '';

            update_option('adresy_settings', $settings);

            echo '<div class="updated"><p>Settings saved successfully.</p></div>';
        }

        $settings = get_option('adresy_settings', []);
        $selected_mode_desktop = isset($settings['mode_desktop']) ? $settings['mode_desktop'] : 'dark';
        $selected_mode_mobile  = isset($settings['mode_mobile']) ? $settings['mode_mobile'] : 'dark';
        $button_color = isset($settings['button_color']) ? $settings['button_color'] : '#0073aa';
        $button_text_color = isset($settings['button_text_color']) ? $settings['button_text_color'] : '#ffffff';
        $selected_mode_option = isset($settings['geo_option']) ? $settings['geo_option'] : 'opencage';
        $key_input = isset($settings['key_input']) ? $settings['key_input'] : '';

        ?>

        <div class="adresy-box">
            <div class="adresy-top-box-information bg">
                <h2>Welcome to the Adresy plugin</h2>
                <p>You can use modal in Desktop view with this Shortcode:
                    <strong>[adresy_location_trigger_desktop]</strong>
                </p>
                <p>an use this modal in mobile view with this Shortcode:
                    <strong>[adresy_location_trigger_mobile]</strong>
                </p>
            </div>

            <div class="adresy-middle-box">
                <div class="adresy-middle-box-left">
                    <div class="adresy-middle-box-left-1 bg padding-24">
                        <form method="post">
                            <?php wp_nonce_field('adresy_settings_save', 'adresy_settings_nonce'); ?>

                            <h2>Modal section settings</h2>

                            <p><strong>Desktop Label Color:</strong></p>
                            <label>
                                <input type="radio" name="adresy_mode_desktop" value="dark" <?php checked($selected_mode_desktop, 'dark'); ?> />
                                Dark
                            </label>
                            <label>
                                <input type="radio" name="adresy_mode_desktop" value="light" <?php checked($selected_mode_desktop, 'light'); ?> />
                                Light
                            </label>

                            <br>

                            <p><strong>Mobile Label Color:</strong></p>
                            <label>
                                <input type="radio" name="adresy_mode_mobile" value="dark" <?php checked($selected_mode_mobile, 'dark'); ?> />
                                Dark
                            </label>
                            <label>
                                <input type="radio" name="adresy_mode_mobile" value="light" <?php checked($selected_mode_mobile, 'light'); ?> />
                                Light
                            </label>

                            <br><br>

                            <p><strong>Buttons Color:</strong></p>
                            <input type="color" name="adresy_button_color" value="<?php echo esc_attr($button_color ?? '#0073aa'); ?>" />
                            <br>
                            <p><strong>Button Text Color:</strong></p>
                            <input type="color" name="adresy_button_text_color" value="<?php echo esc_attr($button_text_color ?? '#ffffff'); ?>" />
                            <br><br>

                            <p><strong>Select Geocoding API:</strong></p>
                            <select name="adresy_geo_option">
                                <option value="opencage" <?php selected($selected_mode_option, 'opencage'); ?>>Open Cage</option>
                                <option value="option2" <?php selected($selected_mode_option, 'option2'); ?>>Option 2</option>
                                <option value="option3" <?php selected($selected_mode_option, 'option3'); ?>>Option 3</option>
                            </select>

                            <br>
                            <p><strong>Enter Geocoding API Key:</strong></p>
                            <input type="text" name="adresy_key_input" value="<?php echo esc_attr($key_input); ?>" />
                            <br><br>


                            <input type="submit" name="adresy_settings_save_btn" value="Save Settings" class="button button-primary" />
                        </form>
                    </div>
                </div>

                <div class="adresy-middle-box-right bg padding-24">
                    <h2>Plugin Settings</h2>
                    <p>Here you can change the plugin settings.</p>
                    <p>For more information, please refer to the <a href="https://adresy.com/docs" target="_blank">documentation</a>.</p>
                    <p>If you have any questions or need support, please visit our <a href="https://adresy.com/support" target="_blank">support page</a>.</p>
                </div>
            </div>
        </div>
<?php
    }
}
