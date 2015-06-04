<?php
App::uses('Contacttype', 'Model');

/**
 * Contacttype Test Case
 *
 */
class ContacttypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contacttype',
		'app.contact',
		'app.contactaddress',
		'app.contactsubdetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contacttype = ClassRegistry::init('Contacttype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contacttype);

		parent::tearDown();
	}

}
