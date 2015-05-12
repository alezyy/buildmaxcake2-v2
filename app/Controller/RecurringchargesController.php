<?php
App::uses('AppController', 'Controller');
/**
 * Recurringcharges Controller
 *
 * @property Recurringcharge $Recurringcharge
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RecurringchargesController extends AppController {

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
		$this->Recurringcharge->recursive = 0;
		$this->set('recurringcharges', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recurringcharge->exists($id)) {
			throw new NotFoundException(__('Invalid recurringcharge'));
		}
		$options = array('conditions' => array('Recurringcharge.' . $this->Recurringcharge->primaryKey => $id));
		$this->set('recurringcharge', $this->Recurringcharge->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Recurringcharge->create();
			if ($this->Recurringcharge->save($this->request->data)) {
				$this->Session->setFlash(__('The recurringcharge has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurringcharge could not be saved. Please, try again.'));
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
		if (!$this->Recurringcharge->exists($id)) {
			throw new NotFoundException(__('Invalid recurringcharge'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Recurringcharge->save($this->request->data)) {
				$this->Session->setFlash(__('The recurringcharge has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurringcharge could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recurringcharge.' . $this->Recurringcharge->primaryKey => $id));
			$this->request->data = $this->Recurringcharge->find('first', $options);
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
		$this->Recurringcharge->id = $id;
		if (!$this->Recurringcharge->exists()) {
			throw new NotFoundException(__('Invalid recurringcharge'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Recurringcharge->delete()) {
			$this->Session->setFlash(__('The recurringcharge has been deleted.'));
		} else {
			$this->Session->setFlash(__('The recurringcharge could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
