<?php
App::uses('AppModel', 'Model');
/**
 * Unit Model
 *
 * @property Property $Property
 * @property RentalOwner $RentalOwner
 * @property Size $Size
 * @property Leasestype $Leasestype
 * @property Status $Status
 * @property ApplicationsLease $ApplicationsLease
 */
class Unit extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'property_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Property' => array(
			'className' => 'Property',
			'foreignKey' => 'property_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RentalOwner' => array(
			'className' => 'RentalOwner',
			'foreignKey' => 'rental_owner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Size' => array(
			'className' => 'Size',
			'foreignKey' => 'size_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Leasestype' => array(
			'className' => 'Leasestype',
			'foreignKey' => 'leasestype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ApplicationsLease' => array(
			'className' => 'ApplicationsLease',
			'foreignKey' => 'unit_id',
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
