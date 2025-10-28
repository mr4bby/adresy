<?php
// Minimal PHPUnit bootstrap for WordPress plugin tests
// This assumes dev environment with WP test framework available.
if ( file_exists( __DIR__ . '/../../vendor/autoload.php' ) ) {
    require __DIR__ . '/../../vendor/autoload.php';
}


