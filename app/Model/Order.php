<?php

class Order extends AppModel {
	
	public $validate = array(
	// wei was here
			'customerName' => array(
					'rule' => 'notEmpty',
					'message'=> 'Please enter the customers name'
			),
			'cakeType' => array(
					'rule' => 'notEmpty',
					'message'=> 'Please select a cake'
			)

	);
}

