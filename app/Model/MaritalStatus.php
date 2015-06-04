<?php
App::uses('AppModel', 'Model');
/**
 * MaritalStatus Model
 *
 * @property Applicant $Applicant
 * @property Tenant $Tenant
 */
class MaritalStatus extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Applicant' => array(
			'className' => 'Applicant',
			'foreignKey' => 'marital_status_id',
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
		'Tenant' => array(
			'className' => 'Tenant',
			'foreignKey' => 'marital_status_id',
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
