<?php

/**
 * Title: Postcode iDEAL - Config test test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_PostcodeIDeal_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_PostcodeIDeal_TestConfig();

		$expected = 'https://ideal-test.postcode.nl/ideal';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}
}
