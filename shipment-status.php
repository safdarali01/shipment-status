<?php
/**
 * Plugin Name: Shipment Status
 * Plugin URI: https://www.muhammadsafdarali.com
 * Description: add to ship status in woocommerce.
 * Version: 1.1.1.0
 * Author: Safdar ALi
 * Author URI: https://www.muhammadsafdarali.com
 * Text Domain: shipment-status
 *
 * @package shipment-status
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'SS_PLUGIN_DIR' ) ) {
	define( 'SS_PLUGIN_DIR', __DIR__ );
}

if ( ! defined( 'SS_PLUGIN_DIR_URL' ) ) {
	define( 'SS_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'SS_ABSPATH' ) ) {
	define( 'SS_ABSPATH', dirname( __FILE__ ) );
}

require_once SS_ABSPATH . '/includes/class-ss-loader.php';
