<?php
App::uses('AppController', 'Controller');
/**
 * Competitions Controller
 *
 * @property Competition $Competition
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompetitionsController extends AppController {

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
		$this->Competition->recursive = 0;
		$this->set('competitions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Competition->exists($id)) {
			throw new NotFoundException(__('Invalid competition'));
		}
		$options = array('conditions' => array('Competition.' . $this->Competition->primaryKey => $id));
		$this->set('competition', $this->Competition->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Competition->create();
			if ($this->Competition->save($this->request->data)) {
				$this->Session->setFlash(__('The competition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competition could not be saved. Please, try again.'));
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
		if (!$this->Competition->exists($id)) {
			throw new NotFoundException(__('Invalid competition'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Competition->save($this->request->data)) {
				$this->Session->setFlash(__('The competition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Competition.' . $this->Competition->primaryKey => $id));
			$this->request->data = $this->Competition->find('first', $options);
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
		$this->Competition->id = $id;
		if (!$this->Competition->exists()) {
			throw new NotFoundException(__('Invalid competition'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Competition->delete()) {
			$this->Session->setFlash(__('The competition has been deleted.'));
		} else {
			$this->Session->setFlash(__('The competition could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Competition->recursive = 0;
		$this->set('competitions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Competition->exists($id)) {
			throw new NotFoundException(__('Invalid competition'));
		}
		$options = array('conditions' => array('Competition.' . $this->Competition->primaryKey => $id));
		$this->set('competition', $this->Competition->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Competition->create();
			if ($this->Competition->save($this->request->data)) {
				$this->Session->setFlash(__('The competition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competition could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Competition->exists($id)) {
			throw new NotFoundException(__('Invalid competition'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Competition->save($this->request->data)) {
				$this->Session->setFlash(__('The competition has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The competition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Competition.' . $this->Competition->primaryKey => $id));
			$this->request->data = $this->Competition->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Competition->id = $id;
		if (!$this->Competition->exists()) {
			throw new NotFoundException(__('Invalid competition'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Competition->delete()) {
			$this->Session->setFlash(__('The competition has been deleted.'));
		} else {
			$this->Session->setFlash(__('The competition could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
