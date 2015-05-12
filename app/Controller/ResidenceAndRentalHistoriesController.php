<?php
App::uses('AppController', 'Controller');
/**
 * ResidenceAndRentalHistories Controller
 *
 * @property ResidenceAndRentalHistory $ResidenceAndRentalHistory
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ResidenceAndRentalHistoriesController extends AppController {

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
		$this->ResidenceAndRentalHistory->recursive = 0;
		$this->set('residenceAndRentalHistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ResidenceAndRentalHistory->exists($id)) {
			throw new NotFoundException(__('Invalid residence and rental history'));
		}
		$options = array('conditions' => array('ResidenceAndRentalHistory.' . $this->ResidenceAndRentalHistory->primaryKey => $id));
		$this->set('residenceAndRentalHistory', $this->ResidenceAndRentalHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResidenceAndRentalHistory->create();
			if ($this->ResidenceAndRentalHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The residence and rental history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The residence and rental history could not be saved. Please, try again.'));
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
		if (!$this->ResidenceAndRentalHistory->exists($id)) {
			throw new NotFoundException(__('Invalid residence and rental history'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ResidenceAndRentalHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The residence and rental history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The residence and rental history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ResidenceAndRentalHistory.' . $this->ResidenceAndRentalHistory->primaryKey => $id));
			$this->request->data = $this->ResidenceAndRentalHistory->find('first', $options);
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
		$this->ResidenceAndRentalHistory->id = $id;
		if (!$this->ResidenceAndRentalHistory->exists()) {
			throw new NotFoundException(__('Invalid residence and rental history'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ResidenceAndRentalHistory->delete()) {
			$this->Session->setFlash(__('The residence and rental history has been deleted.'));
		} else {
			$this->Session->setFlash(__('The residence and rental history could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
