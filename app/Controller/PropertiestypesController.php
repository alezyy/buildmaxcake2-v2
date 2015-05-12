<?php
App::uses('AppController', 'Controller');
/**
 * Propertiestypes Controller
 *
 * @property Propertiestype $Propertiestype
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PropertiestypesController extends AppController {

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
		$this->Propertiestype->recursive = 0;
		$this->set('propertiestypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Propertiestype->exists($id)) {
			throw new NotFoundException(__('Invalid propertiestype'));
		}
		$options = array('conditions' => array('Propertiestype.' . $this->Propertiestype->primaryKey => $id));
		$this->set('propertiestype', $this->Propertiestype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Propertiestype->create();
			if ($this->Propertiestype->save($this->request->data)) {
				$this->Session->setFlash(__('The propertiestype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propertiestype could not be saved. Please, try again.'));
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
		if (!$this->Propertiestype->exists($id)) {
			throw new NotFoundException(__('Invalid propertiestype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Propertiestype->save($this->request->data)) {
				$this->Session->setFlash(__('The propertiestype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propertiestype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Propertiestype.' . $this->Propertiestype->primaryKey => $id));
			$this->request->data = $this->Propertiestype->find('first', $options);
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
		$this->Propertiestype->id = $id;
		if (!$this->Propertiestype->exists()) {
			throw new NotFoundException(__('Invalid propertiestype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Propertiestype->delete()) {
			$this->Session->setFlash(__('The propertiestype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The propertiestype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
