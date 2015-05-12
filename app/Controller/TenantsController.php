<?php
App::uses('AppController', 'Controller');
/**
 * Tenants Controller
 *
 * @property Tenant $Tenant
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TenantsController extends AppController {

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
		$this->Tenant->recursive = 0;
		$this->set('tenants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tenant->exists($id)) {
			throw new NotFoundException(__('Invalid tenant'));
		}
		$options = array('conditions' => array('Tenant.' . $this->Tenant->primaryKey => $id));
		$this->set('tenant', $this->Tenant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tenant->create();
			if ($this->Tenant->save($this->request->data)) {
				$this->Session->setFlash(__('The tenant has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tenant could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tenant->exists($id)) {
			throw new NotFoundException(__('Invalid tenant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tenant->save($this->request->data)) {
				$this->Session->setFlash(__('The tenant has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tenant could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Tenant.' . $this->Tenant->primaryKey => $id));
			$this->request->data = $this->Tenant->find('first', $options);
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
		$this->Tenant->id = $id;
		if (!$this->Tenant->exists()) {
			throw new NotFoundException(__('Invalid tenant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tenant->delete()) {
			$this->Session->setFlash(__('The tenant has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The tenant could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
