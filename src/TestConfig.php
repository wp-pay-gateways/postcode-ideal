<?php

/**
 * Title: Postcode iDEAL config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_PostcodeIDeal_TestConfig extends Pronamic_WP_Pay_Gateways_PostcodeIDeal_Config {
	public function get_payment_server_url() {
		return 'https://ideal-test.postcode.nl/ideal';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/postcode-test.cer',
		);
	}
}
