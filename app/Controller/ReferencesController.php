<?php
App::uses('AppController', 'Controller');
/**
 * References Controller
 *
 * @property Reference $Reference
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ReferencesController extends AppController {

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
		$this->Reference->recursive = 0;
		$this->set('references', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid reference'));
		}
		$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
		$this->set('reference', $this->Reference->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reference->create();
			if ($this->Reference->save($this->request->data)) {
				$this->Session->setFlash(__('The reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reference could not be saved. Please, try again.'));
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
		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid reference'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reference->save($this->request->data)) {
				$this->Session->setFlash(__('The reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reference could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
			$this->request->data = $this->Reference->find('first', $options);
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
		$this->Reference->id = $id;
		if (!$this->Reference->exists()) {
			throw new NotFoundException(__('Invalid reference'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reference->delete()) {
			$this->Session->setFlash(__('The reference has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reference could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
