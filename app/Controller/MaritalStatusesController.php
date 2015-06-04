<?php
App::uses('AppController', 'Controller');
/**
 * MaritalStatuses Controller
 *
 * @property MaritalStatus $MaritalStatus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MaritalStatusesController extends AppController {

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
		$this->MaritalStatus->recursive = 0;
		$this->set('maritalStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid marital status'));
		}
		$options = array('conditions' => array('MaritalStatus.' . $this->MaritalStatus->primaryKey => $id));
		$this->set('maritalStatus', $this->MaritalStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaritalStatus->create();
			if ($this->MaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The marital status has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marital status could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->MaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid marital status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The marital status has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The marital status could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('MaritalStatus.' . $this->MaritalStatus->primaryKey => $id));
			$this->request->data = $this->MaritalStatus->find('first', $options);
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
		$this->MaritalStatus->id = $id;
		if (!$this->MaritalStatus->exists()) {
			throw new NotFoundException(__('Invalid marital status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaritalStatus->delete()) {
			$this->Session->setFlash(__('The marital status has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The marital status could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
