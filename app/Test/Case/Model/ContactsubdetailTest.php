<?php
App::uses('Contactsubdetail', 'Model');

/**
 * Contactsubdetail Test Case
 *
 */
class ContactsubdetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contactsubdetail',
		'app.contact',
		'app.contacttype',
		'app.contactaddress'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contactsubdetail = ClassRegistry::init('Contactsubdetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contactsubdetail);

		parent::tearDown();
	}

}
