<?php

class Order extends AppModel {
	
	public $validate = array(
	
			'customerName' => array(
					'rule' => 'notEmpty',
					'message'=> 'Please enter the customers name'
			),
			'cakeType' => array(
					'rule' => 'notEmpty',
					'message'=> 'Please select a cake'
			)

	);
	public function isOwnedBy($order, $user) {
        return $this->field('id', array('id' => $order, 'user_id' => $user)) === $order;
    }
}

