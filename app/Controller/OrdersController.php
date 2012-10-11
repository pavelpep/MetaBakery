<?php

class OrdersController extends AppController {
	
	var $name = 'Orders';
	
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('orders', $this->Order->find('all'));
    }
	
	
	function hello_world(){
		
	}
}