<?php

class Pronamic_WP_Pay_Gateways_PostcodeIDeal_Integration {
	public function __construct() {
		$this->id       = 'postcode-ideal';
		$this->name     = 'Postcode iDEAL';
		$this->provider = 'postcode.nl';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Gateway';
	}
}
