<?php
App::uses('AppController', 'Controller');
/**
 * Contactaddresses Controller
 *
 * @property Contactaddress $Contactaddress
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContactaddressesController extends AppController {

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
		$this->Contactaddress->recursive = 0;
		$this->set('contactaddresses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contactaddress->exists($id)) {
			throw new NotFoundException(__('Invalid contactaddress'));
		}
		$options = array('conditions' => array('Contactaddress.' . $this->Contactaddress->primaryKey => $id));
		$this->set('contactaddress', $this->Contactaddress->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contactaddress->create();
			if ($this->Contactaddress->save($this->request->data)) {
				$this->Session->setFlash(__('The contactaddress has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactaddress could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$contacts = $this->Contactaddress->Contact->find('list');
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
		if (!$this->Contactaddress->exists($id)) {
			throw new NotFoundException(__('Invalid contactaddress'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contactaddress->save($this->request->data)) {
				$this->Session->setFlash(__('The contactaddress has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contactaddress could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Contactaddress.' . $this->Contactaddress->primaryKey => $id));
			$this->request->data = $this->Contactaddress->find('first', $options);
		}
		$contacts = $this->Contactaddress->Contact->find('list');
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
		$this->Contactaddress->id = $id;
		if (!$this->Contactaddress->exists()) {
			throw new NotFoundException(__('Invalid contactaddress'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contactaddress->delete()) {
			$this->Session->setFlash(__('The contactaddress has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The contactaddress could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
