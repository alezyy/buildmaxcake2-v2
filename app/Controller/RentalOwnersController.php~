<?php
App::uses('AppController', 'Controller');
/**
 * RentalOwners Controller
 *
 * @property RentalOwner $RentalOwner
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RentalOwnersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RentalOwner->recursive = 0;
		$this->set('rentalOwners', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RentalOwner->exists($id)) {
			throw new NotFoundException(__('Invalid rental owner'));
		}
		$options = array('conditions' => array('RentalOwner.' . $this->RentalOwner->primaryKey => $id));
		$this->set('rentalOwner', $this->RentalOwner->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RentalOwner->create();
			if ($this->RentalOwner->save($this->request->data)) {
				$this->Session->setFlash(__('The rental owner has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental owner could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}

                                $this->loadModel('Country');         
                                $this->loadModel('State');
				$this->loadModel('Gender');

                $this->set('countries', $this->Country->find('list')); 

                $this->set('states', $this->State->find('list', array('fields'=>array('id','state'),
                                                                       'recursive' => -1)));  
		$this->set('genders', $this->Gender->find('list', array('fields'=>array('id','gender'),
                                                                       'recursive' => -1))); 


	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RentalOwner->exists($id)) {
			throw new NotFoundException(__('Invalid rental owner'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RentalOwner->save($this->request->data)) {
				$this->Session->setFlash(__('The rental owner has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rental owner could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('RentalOwner.' . $this->RentalOwner->primaryKey => $id));
			$this->request->data = $this->RentalOwner->find('first', $options);
		}

                 $this->loadModel('Country');         
                                $this->loadModel('State');
				$this->loadModel('Gender');

                $this->set('countries', $this->Country->find('list')); 

                $this->set('states', $this->State->find('list', array('fields'=>array('id','state'),
                                                                       'recursive' => -1)));  
		$this->set('genders', $this->Gender->find('list', array('fields'=>array('id','gender'),
                                                                       'recursive' => -1))); 

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RentalOwner->id = $id;
		if (!$this->RentalOwner->exists()) {
			throw new NotFoundException(__('Invalid rental owner'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RentalOwner->delete()) {
			$this->Session->setFlash(__('The rental owner has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The rental owner could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
