<?php
defined( 'ABSPATH' ) || exit;

class Adresy_API {

    public function __construct() {
        add_action( 'wp_ajax_adresy_find_address', [ $this, 'find_address' ] );
        add_action( 'wp_ajax_nopriv_adresy_find_address', [ $this, 'find_address' ] );
    }

    public function find_address() {
        check_ajax_referer( 'adresy_nonce', 'nonce' );

        $query = isset( $_POST['query'] ) ? sanitize_text_field( wp_unslash( $_POST['query'] ) ) : '';

        if ( empty( $query ) ) {
            wp_send_json_error( [ 'message' => __( 'Empty query.', 'adresy' ) ] );
        }

        // TODO: Replace with actual logic or API call
        $results = [
            [ 'id' => 1, 'address' => '123 Main Street, NY' ],
            [ 'id' => 2, 'address' => '456 Broadway, NY' ],
        ];

        wp_send_json_success( $results );
    }
}

new Adresy_API();
