<?php

class OrdersController extends AppController {
	
	var $name = 'Orders';
	
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('orders', $this->Order->find('all'));
    }
	
	
    public function view($id = null) {
        $this->Order->id = $id;
        $this->set('order', $this->Order->read());
    }
    
    public function add() {
    	if ($this->request->is('post')) {
    		$this->Order->create();
    		if ($this->Order->save($this->request->data)) {
    			$this->Session->setFlash('Your order has been saved.');
    			$this->redirect(array('action' => 'index'));
    		} else {
    			$this->Session->setFlash('Unable to add your order.');
    		}
    	}
    }
}