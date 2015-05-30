<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::import('Component', 'Session');



/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

 public $helpers = array('Form', 'Time', 'Html', 'Session', 'Js', 'Authake.Authake',
			'FilterResults.Search' => array(
				'operators' => array(
				    'LIKE'       => 'containing',
				    'NOT LIKE'   => 'not containing',
				    'LIKE BEGIN' => 'starting with',
				    'LIKE END'   => 'ending with',
				    '='  => 'equal to',
				    '!=' => 'different',
				    '>'  => 'greater than',
				    '>=' => 'greater or equal to',
				    '<'  => 'less than',
				    '<=' => 'less or equal to'
			       		 )
			    			));



 public   $components = array('Session','RequestHandler', 
			  'Authake.Authake',
			 // 'DebugKit.Toolbar',
			  'FilterResults.Filter' => array(
       						  	 'auto' => array(
         					  		 'paginate' => false,
          					  		 'explode'  => true,  // recommended
       									 ),
        					   	'explode' => array(
           					   		'character'   => ' ',
           					   		'concatenate' => 'AND'
        								)
   				     			 ));

 
  // public $components = array('DebugKit.Toolbar');
   var $counter = 0;
    function beforeFilter(){
        $this->auth();
         $this->layout = 'bootstrap';
    }

     private function auth(){
        Configure::write('Authake.useDefaultLayout', true);
        $this->Authake->beforeFilter($this);
    }

    
	/**
	* CSV Import functionality for all controllers
	*     
	*/
	/*function import() {
  	  $modelClass = $this->modelClass;
    if ( $this->request->is('POST') ) {
        $records_count = $this->$modelClass->find( 'count' );
        try {
    $this->$modelClass->importCSV( $this->request->data[$modelClass]['CsvFile']['tmp_name']  );
        } catch (Exception $e) {
            $import_errors = $this->$modelClass->getImportErrors();
            $this->set( 'import_errors', $import_errors );
            $this->Session->setFlash( __('Error Importing') . ' ' . $this->request->data[$modelClass]['CsvFile']['name'] . ', ' . __('column name mismatch.')  );
            $this->redirect( array('action'=>'import') );
        }
         
        $new_records_count = $this->$modelClass->find( 'count' ) - $records_count;
        $this->Session->setFlash(__('Successfully imported') . ' ' . $new_records_count .  ' records from ' . $this->request->data[$modelClass]['CsvFile']['name'] );
        $this->redirect( array('action'=>'index') );
    }
    $this->set('modelClass', $modelClass );
    $this->render('../Common/import');
} //end import()  
    */

}
