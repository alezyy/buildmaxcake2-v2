<?php
App::uses('AppController', 'Controller');
/**
 * ApplicationsLeases Controller
 *
 * @property ApplicationsLease $ApplicationsLease
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApplicationsLeasesController extends AppController {

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
		$this->ApplicationsLease->recursive = 0;
		$this->set('applicationsLeases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ApplicationsLease->exists($id)) {
			throw new NotFoundException(__('Invalid applications lease'));
		}
		$options = array('conditions' => array('ApplicationsLease.' . $this->ApplicationsLease->primaryKey => $id));
		$this->set('applicationsLease', $this->ApplicationsLease->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ApplicationsLease->create();
			if ($this->ApplicationsLease->save($this->request->data)) {
				$this->Session->setFlash(__('The applications lease has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applications lease could not be saved. Please, try again.'));
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
		if (!$this->ApplicationsLease->exists($id)) {
			throw new NotFoundException(__('Invalid applications lease'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ApplicationsLease->save($this->request->data)) {
				$this->Session->setFlash(__('The applications lease has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applications lease could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ApplicationsLease.' . $this->ApplicationsLease->primaryKey => $id));
			$this->request->data = $this->ApplicationsLease->find('first', $options);
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
		$this->ApplicationsLease->id = $id;
		if (!$this->ApplicationsLease->exists()) {
			throw new NotFoundException(__('Invalid applications lease'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ApplicationsLease->delete()) {
			$this->Session->setFlash(__('The applications lease has been deleted.'));
		} else {
			$this->Session->setFlash(__('The applications lease could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
