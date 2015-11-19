<?php

class Pronamic_WP_Pay_Gateways_PostcodeIDeal_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'postcode-ideal';
		$this->name     = 'Postcode iDEAL';
		$this->provider = 'postcode.nl';
	}
}
