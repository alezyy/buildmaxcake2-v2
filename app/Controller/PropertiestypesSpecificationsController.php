<?php
App::uses('AppController', 'Controller');
/**
 * PropertiestypesSpecifications Controller
 *
 * @property PropertiestypesSpecification $PropertiestypesSpecification
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PropertiestypesSpecificationsController extends AppController {

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
		$this->PropertiestypesSpecification->recursive = 0;
		$this->set('propertiestypesSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PropertiestypesSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid propertiestypes specification'));
		}
		$options = array('conditions' => array('PropertiestypesSpecification.' . $this->PropertiestypesSpecification->primaryKey => $id));
		$this->set('propertiestypesSpecification', $this->PropertiestypesSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PropertiestypesSpecification->create();
			if ($this->PropertiestypesSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The propertiestypes specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propertiestypes specification could not be saved. Please, try again.'));
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
		if (!$this->PropertiestypesSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid propertiestypes specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PropertiestypesSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The propertiestypes specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propertiestypes specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PropertiestypesSpecification.' . $this->PropertiestypesSpecification->primaryKey => $id));
			$this->request->data = $this->PropertiestypesSpecification->find('first', $options);
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
		$this->PropertiestypesSpecification->id = $id;
		if (!$this->PropertiestypesSpecification->exists()) {
			throw new NotFoundException(__('Invalid propertiestypes specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PropertiestypesSpecification->delete()) {
			$this->Session->setFlash(__('The propertiestypes specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The propertiestypes specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
