<?php
App::uses('AppModel', 'Model');
/**
 * Leasestype Model
 *
 * @property ApplicationsLease $ApplicationsLease
 * @property Unit $Unit
 */
class Leasestype extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ApplicationsLease' => array(
			'className' => 'ApplicationsLease',
			'foreignKey' => 'leasestype_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Unit' => array(
			'className' => 'Unit',
			'foreignKey' => 'leasestype_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
