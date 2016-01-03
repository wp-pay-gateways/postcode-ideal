<?php

/**
 * Title: Postcode iDEAL - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2014
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_PostcodeIDeal_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_PostcodeIDeal_Config();

		$expected = 'https://ideal.postcode.nl/ideal';

		$url = $config->get_payment_server_url();

		$this->assertEquals( $expected, $url );
	}

	public function test_certificates() {
		$config = new Pronamic_WP_Pay_Gateways_PostcodeIDeal_Config();

		$certificates = $config->get_certificates();

		foreach ( $certificates as $certificate ) {
			$this->assertFileExists( $certificate );
		}
	}
}
