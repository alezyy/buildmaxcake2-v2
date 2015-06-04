<?php
App::uses('AppController', 'Controller');
/**
 * Contactsubdetails Controller
 *
 * @property Contactsubdetail $Contactsubdetail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContactsubdetailsController extends AppController {

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
		$this->Contactsubdetail->recursive = 0;
		$this->set('contactsubdetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contactsubdetail->exists($id)) {
			throw new NotFoundException(__('Invalid contactsubdetail'));
		}
		$options = array('conditions' => array('Contactsubdetail.' . $this->Contactsubdetail->primaryKey => $id));
		$this->set('contactsubdetail', $this->Contactsubdetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contactsubdetail->create();
			if ($this->Contactsubdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The contactsubdetail has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactsubdetail could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$contacts = $this->Contactsubdetail->Contact->find('list');
		$this->set(compact('contacts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contactsubdetail->exists($id)) {
			throw new NotFoundException(__('Invalid contactsubdetail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contactsubdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The contactsubdetail has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactsubdetail could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Contactsubdetail.' . $this->Contactsubdetail->primaryKey => $id));
			$this->request->data = $this->Contactsubdetail->find('first', $options);
		}
		$contacts = $this->Contactsubdetail->Contact->find('list');
		$this->set(compact('contacts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Contactsubdetail->id = $id;
		if (!$this->Contactsubdetail->exists()) {
			throw new NotFoundException(__('Invalid contactsubdetail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contactsubdetail->delete()) {
			$this->Session->setFlash(__('The contactsubdetail has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The contactsubdetail could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
