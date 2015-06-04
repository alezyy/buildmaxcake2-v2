<?php
App::uses('AppController', 'Controller');
/**
 * Contacttypes Controller
 *
 * @property Contacttype $Contacttype
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContacttypesController extends AppController {

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
		$this->Contacttype->recursive = 0;
		$this->set('contacttypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contacttype->exists($id)) {
			throw new NotFoundException(__('Invalid contacttype'));
		}
		$options = array('conditions' => array('Contacttype.' . $this->Contacttype->primaryKey => $id));
		$this->set('contacttype', $this->Contacttype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contacttype->create();
			if ($this->Contacttype->save($this->request->data)) {
				$this->Session->setFlash(__('The contacttype has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacttype could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Contacttype->exists($id)) {
			throw new NotFoundException(__('Invalid contacttype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contacttype->save($this->request->data)) {
				$this->Session->setFlash(__('The contacttype has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacttype could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Contacttype.' . $this->Contacttype->primaryKey => $id));
			$this->request->data = $this->Contacttype->find('first', $options);
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
		$this->Contacttype->id = $id;
		if (!$this->Contacttype->exists()) {
			throw new NotFoundException(__('Invalid contacttype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contacttype->delete()) {
			$this->Session->setFlash(__('The contacttype has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The contacttype could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
