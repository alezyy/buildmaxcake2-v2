<?php
App::uses('AppModel', 'Model');
/**
 * Property Model
 *
 * @property Propertiestype $Propertiestype
 * @property PropertiestypesSpecification $PropertiestypesSpecification
 * @property RentalOwner $RentalOwner
 * @property OperatingAccount $OperatingAccount
 * @property Country $Country
 * @property State $State
 * @property ApplicationsLease $ApplicationsLease
 * @property Unit $Unit
 */
class Property extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'propertiestype_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Propertiestype' => array(
			'className' => 'Propertiestype',
			'foreignKey' => 'propertiestype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PropertiestypesSpecification' => array(
			'className' => 'PropertiestypesSpecification',
			'foreignKey' => 'propertiestypes_specification_id',
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
		'OperatingAccount' => array(
			'className' => 'OperatingAccount',
			'foreignKey' => 'operating_account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
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
			'foreignKey' => 'property_id',
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
			'foreignKey' => 'property_id',
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
