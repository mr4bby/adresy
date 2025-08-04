<?php

class WC_Default_Location {

    private $country_code;
    private $state_code;
    private $countries;
    private $states;

    public function __construct() {
        $default = get_option('woocommerce_default_country');

        list($this->country_code, $this->state_code) = array_pad(explode(':', $default), 2, '');

        $wc_countries = new WC_Countries();

        $this->countries = $wc_countries->countries;

        $this->states = $wc_countries->get_states($this->country_code);
    }

    
    public function get_country_code() {
        return $this->country_code;
    }

   
    public function get_state_code() {
        return $this->state_code;
    }

   
    public function get_country_name() {
        return $this->countries[ $this->country_code ] ?? '';
    }

   
    public function get_state_name() {
        return $this->states[ $this->state_code ] ?? '';
    }
    public function get_state() {
        return $this->states ?? '';
    }
    
    public function get_full_location() {
        $country = $this->get_country_name();
        $state = $this->get_state_name();
        return trim($country . ' - ' . $state, ' -');
    }
}
