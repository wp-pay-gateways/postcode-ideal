<?php

/**
 * Title: Postcode iDEAL config
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_PostcodeIDeal_Config extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config {
	public function get_payment_server_url() {
		return 'https://ideal.postcode.nl/ideal';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/postcode.cer',
		);
	}
}
