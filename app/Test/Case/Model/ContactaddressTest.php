<?php
App::uses('Contactaddress', 'Model');

/**
 * Contactaddress Test Case
 *
 */
class ContactaddressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contactaddress',
		'app.contact',
		'app.contacttype',
		'app.contactsubdetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contactaddress = ClassRegistry::init('Contactaddress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contactaddress);

		parent::tearDown();
	}

}
