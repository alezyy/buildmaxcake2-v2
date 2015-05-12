<?php
App::uses('AppController', 'Controller');
/**
 * OperatingAccounts Controller
 *
 * @property OperatingAccount $OperatingAccount
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class OperatingAccountsController extends AppController {

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
		$this->OperatingAccount->recursive = 0;
		$this->set('operatingAccounts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OperatingAccount->exists($id)) {
			throw new NotFoundException(__('Invalid operating account'));
		}
		$options = array('conditions' => array('OperatingAccount.' . $this->OperatingAccount->primaryKey => $id));
		$this->set('operatingAccount', $this->OperatingAccount->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OperatingAccount->create();
			if ($this->OperatingAccount->save($this->request->data)) {
				$this->Session->setFlash(__('The operating account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operating account could not be saved. Please, try again.'));
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
		if (!$this->OperatingAccount->exists($id)) {
			throw new NotFoundException(__('Invalid operating account'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OperatingAccount->save($this->request->data)) {
				$this->Session->setFlash(__('The operating account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operating account could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OperatingAccount.' . $this->OperatingAccount->primaryKey => $id));
			$this->request->data = $this->OperatingAccount->find('first', $options);
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
		$this->OperatingAccount->id = $id;
		if (!$this->OperatingAccount->exists()) {
			throw new NotFoundException(__('Invalid operating account'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OperatingAccount->delete()) {
			$this->Session->setFlash(__('The operating account has been deleted.'));
		} else {
			$this->Session->setFlash(__('The operating account could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
