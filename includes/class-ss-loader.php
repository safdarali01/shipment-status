<?php
/**
 * Main Loader
 *
 * @package shipment-status
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'SS_Loader' ) ) {
	/**
	 * Class SS_Loader
	 */
	class SS_Loader {

		/**
		 *  Constructor.
		 */
		public function __construct() {
			$this->includes();
		}

		/**
		 * Includes files depend on platform
		 */
		public function includes() {
			include 'class-ss-add-shipment-status.php';
            include 'class-ss-email-send.php';
		}

	}
}

new SS_Loader();
