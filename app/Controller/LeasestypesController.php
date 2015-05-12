<?php
App::uses('AppController', 'Controller');
/**
 * Leasestypes Controller
 *
 * @property Leasestype $Leasestype
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LeasestypesController extends AppController {

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
		$this->Leasestype->recursive = 0;
		$this->set('leasestypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Leasestype->exists($id)) {
			throw new NotFoundException(__('Invalid leasestype'));
		}
		$options = array('conditions' => array('Leasestype.' . $this->Leasestype->primaryKey => $id));
		$this->set('leasestype', $this->Leasestype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Leasestype->create();
			if ($this->Leasestype->save($this->request->data)) {
				$this->Session->setFlash(__('The leasestype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leasestype could not be saved. Please, try again.'));
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
		if (!$this->Leasestype->exists($id)) {
			throw new NotFoundException(__('Invalid leasestype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Leasestype->save($this->request->data)) {
				$this->Session->setFlash(__('The leasestype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leasestype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Leasestype.' . $this->Leasestype->primaryKey => $id));
			$this->request->data = $this->Leasestype->find('first', $options);
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
		$this->Leasestype->id = $id;
		if (!$this->Leasestype->exists()) {
			throw new NotFoundException(__('Invalid leasestype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Leasestype->delete()) {
			$this->Session->setFlash(__('The leasestype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leasestype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
