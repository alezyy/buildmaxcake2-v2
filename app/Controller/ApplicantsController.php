<?php
App::uses('AppController', 'Controller');
/**
 * Applicants Controller
 *
 * @property Applicant $Applicant
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApplicantsController extends AppController {

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
		$this->Applicant->recursive = 0;
		$this->set('applicants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Applicant->exists($id)) {
			throw new NotFoundException(__('Invalid applicant'));
		}
		$options = array('conditions' => array('Applicant.' . $this->Applicant->primaryKey => $id));
		$this->set('applicant', $this->Applicant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Applicant->create();
			if ($this->Applicant->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$genders = $this->Applicant->Gender->find('list');
		$maritalStatuses = $this->Applicant->MaritalStatus->find('list');
		$countries = $this->Applicant->Country->find('list');
		$states = $this->Applicant->State->find('list');
		$statuses = $this->Applicant->Status->find('list');
		$this->set(compact('genders', 'maritalStatuses', 'countries', 'states', 'statuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Applicant->exists($id)) {
			throw new NotFoundException(__('Invalid applicant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Applicant->save($this->request->data)) {
				$this->Session->setFlash(__('The applicant has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applicant could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Applicant.' . $this->Applicant->primaryKey => $id));
			$this->request->data = $this->Applicant->find('first', $options);
		}
		$genders = $this->Applicant->Gender->find('list');
		$maritalStatuses = $this->Applicant->MaritalStatus->find('list');
		$countries = $this->Applicant->Country->find('list');
		$states = $this->Applicant->State->find('list');
		$statuses = $this->Applicant->Status->find('list');
		$this->set(compact('genders', 'maritalStatuses', 'countries', 'states', 'statuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Applicant->id = $id;
		if (!$this->Applicant->exists()) {
			throw new NotFoundException(__('Invalid applicant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Applicant->delete()) {
			$this->Session->setFlash(__('The applicant has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The applicant could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
