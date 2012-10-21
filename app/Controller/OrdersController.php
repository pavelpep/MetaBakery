<?php

class OrdersController extends AppController {
	
	var $name = 'Orders';
    var $layout = 'default';// dont need to specify if using default
	
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('orders', $this->Order->find('all'));
        $this->set('title_for_layout', 'Current Orders');
    }
	
	
    public function view($id = null) {
        $this->Order->id = $id;
        $this->set('order', $this->Order->read());
        $this->set('title_for_layout', 'Current Order'.$id);
    }
    
    public function delete($id = null ) {
        $this->Order->delete($id);
        $this->Session->setFlash('The order has been deleted');
        $this->redirect(array('action'=>'index'));
    }
    
    public function add() {
        $this->set('title_for_layout', 'Add Order');
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

    public function tech_comparisons(){
        $this->set('title_for_layout', 'Tech Comparisons');
    }
    
	public function edit($id = null) {
	    $this->Order->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Order->read();
	    } else {
	        if ($this->Order->save($this->request->data)) {
	            $this->Session->setFlash('Your order has been updated.');
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('Unable to update your order.');
	        }
	    }
	}
}