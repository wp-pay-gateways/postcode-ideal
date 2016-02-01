<?php

/**
 * Title: Postcode iDEAL integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_PostcodeIDeal_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id       = 'postcode-ideal';
		$this->name     = 'Postcode iDEAL';
		$this->provider = 'postcode.nl';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_PostcodeIDeal_ConfigFactory';
	}
}
