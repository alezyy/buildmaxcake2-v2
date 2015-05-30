<?php
App::uses('AppModel', 'Model');
/**
 * Participant Model
 *
 * @property Competition $Competition
 */
class Participant extends AppModel {


 public function beforeSave($options = array()) { 

$id = $this->data['Participant']['competition_id'] ;
$email = $this->data['Participant']['email'];
$this->data['Participant']['unikkey'] = $id . $email ;    

    return true;

} 

 

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'competition_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Competition' => array(
			'className' => 'Competition',
			'foreignKey' => 'competition_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

      
	public $validate = array( 
                         'unikkey' => array(
                                  'isUnique' => array(
                                    'rule' => 'isUnique',
                                   // 'message' => 'You are already participate',
                                    'on' => 'create'
                                  )     
                  ));
   
}


