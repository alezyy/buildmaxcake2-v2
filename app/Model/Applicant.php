<?php
App::uses('AppModel', 'Model');
/**
 * Applicant Model
 *
 * @property Gender $Gender
 * @property MaritalStatus $MaritalStatus
 * @property Country $Country
 * @property State $State
 * @property Status $Status
 */
class Applicant extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'gender_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Gender' => array(
			'className' => 'Gender',
			'foreignKey' => 'gender_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MaritalStatus' => array(
			'className' => 'MaritalStatus',
			'foreignKey' => 'marital_status_id',
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
