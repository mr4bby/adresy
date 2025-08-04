<?php
// adresy/template/modal/address-modal-mobile.php
defined('ABSPATH') || exit;
extract($data); // $options, $country_selling_location, $country, $top_body
$settings = get_option('adresy_settings', []);
$button_color = isset($settings['button_color']) ? $settings['button_color'] : '#0073aa';
$button_text_color = isset($settings['button_text_color']) ? $settings['button_text_color'] : '#ffffff';
?>
<div id="adresy-modal-mobile" class="adresy-modal-mobile">
    <div class="adresy-modal-backdrop-mobile"></div>
    <div class="adresy-modal-content-mobile">
        <div class="adresy-modal-header-mobile">
            <span class="adresy-close-modal-mobile">&times;</span>
        </div>
        <div class="adresy-modal-body-mobile">
            <div class="adresy-modal-top-body-mobile">
                <h4>Choose your delivery location</h4>
                <?php echo $top_body; ?>
            </div>
            <div class="adresy-modal-middle-body">
                <div class="adresy-modal-divider-block">
                </div>

                <div class="adresy-modal-middle-actions-mobile">

                    <span class="adresy-select-city-mobile">
                        <svg stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                            <path class="adresy-actions-icon-mobile-loc1" d="M20 10C20 14.4183 12 22 12 22C12 22 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10Z"></path>
                            <path class="adresy-actions-icon-mobile-loc2" d="M12 11C12.5523 11 13 10.5523 13 10C13 9.44772 12.5523 9 12 9C11.4477 9 11 9.44772 11 10C11 10.5523 11.4477 11 12 11Z"></path>
                        </svg>
                        Select your city and area
                    </span>
                    <span class="adresy-select-current-loc-mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.0" viewBox="0 0 512 512">
                            <path d="M249.5 1.4a17 17 0 0 0-8.4 8.9c-.6 1.6-1.1 9.5-1.1 17.7 0 17 1 15.4-10.5 16.5A213.7 213.7 0 0 0 44.5 229c-1.1 12.1.8 10.8-17.9 11.2-18 .3-19.2.7-24 7.2-2.9 3.9-2.9 13.3 0 17.2 4.8 6.5 6 6.9 24 7.2 18.7.4 16.8-.9 17.9 11.2a214.2 214.2 0 0 0 185.1 184.5c11.2 1.1 10.2-.6 10.6 18 .3 17.8.7 19.1 7.2 23.9 3.9 2.9 13.3 2.9 17.2 0 6.5-4.8 6.9-6.1 7.2-23.7.2-11 .7-16.4 1.5-16.9.7-.4 2.9-.8 4.9-.8a215.3 215.3 0 0 0 160.4-102c15-24.6 26.3-57.4 28.9-83.6 1.1-11.2-.6-10.2 18-10.6 17.8-.3 19.1-.7 23.9-7.2 2.9-3.9 2.9-13.3 0-17.2-4.8-6.5-6.1-6.9-23.9-7.2-18.6-.4-16.9.6-18-10.6a214.4 214.4 0 0 0-185-185.1c-11.5-1.2-10.3.8-10.7-17.9-.3-17.9-.7-19.2-7-23.9a18.6 18.6 0 0 0-15.3-1.3zm-7.3 97.3c4.1 7.3 14.8 10 22.2 5.4 5.7-3.6 7.6-8.3 7.6-19.4v-9.3l7.2.8a182.3 182.3 0 0 1 156.2 154.2l1.3 9.6h-9.6c-8.1 0-10.2.4-13.5 2.3a15.8 15.8 0 0 0 .5 27.7c3 1.6 5.8 2 13.2 2h9.4l-1.3 9.6a182.2 182.2 0 0 1-153.8 153.8l-9.6 1.3v-9.4c0-7.4-.4-10.2-2-13.2a15.8 15.8 0 0 0-27.7-.5c-1.9 3.3-2.3 5.4-2.3 13.5v9.6l-6.2-.9a182 182 0 0 1-95.7-42.3 185.2 185.2 0 0 1-61.9-114.3l-.8-7.2h9.3c7.4 0 10.2-.4 13.2-2a15.8 15.8 0 0 0 0-28c-3-1.6-5.8-2-13.2-2h-9.3l.8-7.2a185.2 185.2 0 0 1 61.9-114.3A183.8 183.8 0 0 1 236 75.8l3.5-.3.5 10c.3 6.8 1.1 11 2.2 13.2z" />
                            <circle cx="255.5" cy="254.2" r="110.7" style="fill:none;stroke-width:29px" />
                        </svg>

                        Use my current location
                    </span>
                    <span class="adresy-select-country-mobile">
                        <svg stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M2.5 12.5L8 14.5L7 18L8 21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M17 20.5L16.5 18L14 17V13.5L17 12.5L21.5 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19 5.5L18.5 7L15 7.5V10.5L17.5 9.5H19.5L21.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M2.5 10.5L5 8.5L7.5 8L9.5 5L8.5 3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Ship outside the <?php echo esc_html($country); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="adresy-modal-city-mobile">
    <div class="adresy-modal-header-mobile-city">
        <div class="adresy-modal-city-back">
            <span>&#129120; Select your city</span>
        </div>
        <span class="adresy-close-modal-mobile-city">&times;</span>
    </div>

    <div class="adresy-modal-city-middle">
        <div class="adresy-modal-middle-select-mobile">
            <select class="adresy-modal-middle-select-state-mobile" id="adresy-select-city-manualy-mobile">
                <option value="disable" disabled selected>Select City</option>
                <?php echo $options; ?>
            </select>
        </div>
        <button type="button"
            class="adresy-modal-middle-submit-mobile"
            id="adresy-submit-selected-city-mobile"
            style="background-color: <?php echo esc_attr($button_color); ?>; color: <?php echo esc_attr($button_text_color); ?>;">
            Apply
        </button>
    </div>

</div>


<div class="adresy-modal-country-mobile">
    <div class="adresy-modal-header-mobile-country">
        <div class="adresy-modal-country-back">
            <span>&#129120; All countries and regions</span>
        </div>
        <span class="adresy-close-modal-mobile-country">&times;</span>
    </div>

    <div class="adresy-modal-middle-select-country-mobile">
        <ul class="adresy-modal-bottom-select-country-list" id="adresy-select-country-manualy-mobile">
            <?php echo $country_selling_location_list; ?>
        </ul>

    </div>

</div>