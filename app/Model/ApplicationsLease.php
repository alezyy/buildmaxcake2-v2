<?php
App::uses('AppModel', 'Model');
/**
 * ApplicationsLease Model
 *
 * @property Tenant $Tenant
 * @property Property $Property
 * @property Unit $Unit
 * @property Leasestype $Leasestype
 * @property Recurringcharge $Recurringcharge
 * @property Status $Status
 */
class ApplicationsLease extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tenant_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tenant' => array(
			'className' => 'Tenant',
			'foreignKey' => 'tenant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Property' => array(
			'className' => 'Property',
			'foreignKey' => 'property_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Unit' => array(
			'className' => 'Unit',
			'foreignKey' => 'unit_id',
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
		'Recurringcharge' => array(
			'className' => 'Recurringcharge',
			'foreignKey' => 'recurringcharge_id',
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
}
