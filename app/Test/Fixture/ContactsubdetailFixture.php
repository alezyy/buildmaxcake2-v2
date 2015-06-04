<?php
/**
 * ContactsubdetailFixture
 *
 */
class ContactsubdetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 19, 'unsigned' => false, 'key' => 'primary'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'home_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'other_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'assistant' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'assistant_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'birthday' => array('type' => 'date', 'null' => true, 'default' => null),
		'laststayintouchrequest' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 30, 'unsigned' => false),
		'laststayintouchsavedate' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 19, 'unsigned' => false),
		'lead_source' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'contact_id' => 1,
			'home_phone' => 'Lorem ipsum dolor sit amet',
			'other_phone' => 'Lorem ipsum dolor sit amet',
			'assistant' => 'Lorem ipsum dolor sit amet',
			'assistant_phone' => 'Lorem ipsum dolor sit amet',
			'birthday' => '2015-05-30',
			'laststayintouchrequest' => 1,
			'laststayintouchsavedate' => 1,
			'lead_source' => 'Lorem ipsum dolor sit amet'
		),
	);

}
