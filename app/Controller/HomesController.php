<?php


App::uses('AppController', 'Controller');


  class HomesController extends AppController {
  
 
   public function index() {

	 	$this->layout = 'home';
        $this->set('title_for_layout', __(' Build Management'));
	}   



   }
