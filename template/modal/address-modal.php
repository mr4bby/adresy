<?php
// adresy/template/modal/address-modal.php
defined('ABSPATH') || exit;
extract($data); // $options, $country_selling_location, $country, $top_body

?>
<div id="adresy-modal" class="adresy-modal">
    <div class="adresy-modal-backdrop"></div>
    <div class="adresy-modal-content">
        <div class="adresy-modal-header">
            <span class="adresy-close-modal">&times;</span>
            <h4>Choose your delivery location</h4>
        </div>
        <div class="adresy-modal-body">
            <div class="adresy-modal-top-body">
                <?php echo $top_body; ?>
            </div>
            <div class="adresy-modal-middle-body">
                <div class="adresy-modal-divider-block">
                    <h5>or enter city/area</h5>
                </div>
                <div class="adresy-modal-middle-select">
                    <select class="adresy-modal-middle-select-state" id="adresy-select-city-manualy">
                        <option value="disable" disabled selected>Select City</option>
                        <?php echo $options; ?>
                    </select>
                </div>
                <button type="button" class="adresy-modal-middle-submit" id="adresy-submit-selected-city">
                    Apply
                </button>
            </div>
            <div class="adresy-modal-bottom-body">
                <div class="adresy-modal-divider-block">
                    <h5>or ship outside the <?php echo esc_html($country); ?></h5>
                </div>
                <div class="adresy-modal-middle-select">
                    <select class="adresy-modal-bottom-select-country" id="adresy-select-country-manualy">
                        <option value="" disabled selected>Choose</option>
                        <?php echo $country_selling_location; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
