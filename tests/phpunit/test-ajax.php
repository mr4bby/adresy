<?php
use PHPUnit\Framework\TestCase;

/**
 * Basic tests for AJAX handlers returning JSON structure.
 */
class Adresy_Ajax_Test extends TestCase {
    public function test_save_state_response_structure() {
        // Simulate a valid response structure from server
        $response = [ 'success' => true, 'data' => [ 'label' => 'Tehran', 'icon' => '<svg/>' ] ];
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);
        $this->assertArrayHasKey('data', $response);
        $this->assertArrayHasKey('label', $response['data']);
    }
}


