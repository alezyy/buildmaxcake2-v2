<?php
App::uses('AppModel', 'Model');
/**
 * Contactaddress Model
 *
 * @property Contact $Contact
 */
class Contactaddress extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'contact_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'contact_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
