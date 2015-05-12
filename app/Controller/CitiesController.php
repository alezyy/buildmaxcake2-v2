<?php
App::uses('AppController', 'Controller');

/**
 * Cities Controller
 *
 * @property City $City
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CitiesController extends AppController {

	public $helpers = array('Js','Form','Html');
	
	

/**
 * Components
 *
 * @var array
 */
public $components = array('Paginator', 'RequestHandler', 'CsvView.CsvView','Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->City->recursive = 0;
		$this->set('cities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->City->exists($id)) {
			throw new NotFoundException(__('Invalid city'));
		}
		$options = array('conditions' => array('City.' . $this->City->primaryKey => $id));
		$this->set('city', $this->City->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->City->create();
			if ($this->City->save($this->request->data)) {
				$this->Session->setFlash(__('The city has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		
		/*$states = $this->City->State->find('list', array('fields'=>array 	
                                                     ('id','state'),
                                                   'recursive' => -1)); */

              //  $countries = $this->City->State->Country->find('list');

		// $countries = $this->City->Country->find('list');
		
				$this->loadModel('Country');         
                                $this->loadModel('State');

                $this->set('countries', $this->Country->find('list')); 

                $this->set('states', $this->State->find('list', array('fields'=>array('id','state'),
                                                                       'recursive' => -1)));  
	           

                
	     //   $this->set(compact('states'));
              //  $this->layout = 'city';

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->City->exists($id)) {
			throw new NotFoundException(__('Invalid city'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->City->save($this->request->data)) {
				$this->Session->setFlash(__('The city has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('City.' . $this->City->primaryKey => $id));
			$this->request->data = $this->City->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->City->id = $id;
		if (!$this->City->exists()) {
			throw new NotFoundException(__('Invalid city'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->City->delete()) {
			$this->Session->setFlash(__('The city has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The city could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/*
	 * FriendsOfCake plugin used for export to csv
	 */


        public function quick_export() { 

            $results = $this->City->find('all');
	    $this->CsvView->quickExport($results);

           }


	/*
	 * FriendsOfCake plugin used for export to csv
	 */

	public function advanced_quick_export() {
	
	$results = $this->City->find('all');
$excludePaths = array('City.id', 'City.country_id', 'City.state_id'); // Exclude all id fields
	$customHeaders = array('City.city' => 'Nos villes');

	$this->CsvView->quickExport($results, $excludePaths, $customHeaders);
	
	}

	/*
	 * FriendsOfCake plugin used for export to csv
	 */

	public function not_quick_export() { 

	$results = $this->City->find('all');

$excludePaths = array('City.id', 'City.country_id', 'City.state_id'); // Exclude all id fields
$_extract = $this->CsvView->prepareExtractFromFindResults($results, $excludePaths);

$customHeaders = array('City.city' => 'ALL Cities');
$_header = $this->CsvView->prepareHeaderFromExtract($_extract, $customHeaders);

$_serialize = 'results';
$this->viewClass = 'CsvView.Csv';
$this->set(compact('results' ,'_serialize', '_header', '_extract'));

       }

	/**
	* CSV Import functionality for all controllers
	*     
	*/
	public function import() {  

  		if ($this->request->is('post')) {
	
		    

              $records_count = $this->City->find('count');

             //  debug($records_count) ;

             $csvfile = $this->request->data ;

            //  $name = $csvfile-> ;

		$name1 = array_values($csvfile)[0];
		
		$name2 = array_values($name1)[0];

		$name3 = array_values($name2)[2] ;

	    //    debug($name1) ;

		 // debug($name2) ;

		debug($name3) ;

                //  $lines = file($name3) ;
	
		$seperator = ",";
                
                $lines = file($name3);

		    $counter = 0;
	        $keys = array();

		foreach($lines as $line) { 

	          $rows = explode($seperator,$line); 
			$counted = count($rows);
		  // debug($counted);

			$string = '';

				if($counter == 0){
		foreach($rows as $key => $value){
			$value = trim($value," \t");
			$value = str_replace("\r","",$value); 
			$keys[] = str_replace (array("\r\n", "\n", "\r"), ' ', $value);
			
		}
        echo "<pre>"; 
		print_r($keys);// add this instruction to see what the result is from the array 
		echo "</pre>"; 
	}else{
	    $string = '';
		$sc = 0;
		$counted = count($rows);
		//debug($counted) ;
		foreach($keys as $v){
			/*
			if($sc==0){
				//$string .= "SET $v = ".$rows[$sc].",";
			}elseif($sc == 1){
				$string .= " SET $v = '".$rows[$sc]."',";
			}elseif($sc < ($counted-1)){
				$string .= " $v = '".$rows[$sc]."',";
			}else{
				$string .= " $v = '".$rows[$sc]."'";
				$string .= " WHERE id = '".$rows[0]."'";
			}			
				$sc++; */

				$this->City->create();


				$saveable = array(
              'City' => array(
                'country_id' => $v['GoogleNews']['title'],
                'description' => $_one['GoogleNews']['description']
              )
            );



				$string .= " $v = '".$rows[$sc]."'";

				$sc++;
		}

		      // debug($string) ;
			   $sql = $string."";
			   
			   

			   echo $sql."<br/>";	




			 //  $this->City->save($sql) ;

		 //$this->City->saveMany($sql) ;

			//$result = mysql_query($sql, $dblink) or die("load -" . mysql_error());
		}
	       

		  
	$counter++;

          
        /*
       if ($this->City->save() {
				$this->Session->setFlash(__('The city has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
              */   



	
     }
   
        } //end importa()

				}


			}

		
	
			

			  
		
