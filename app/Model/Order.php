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
//wei's branch
	);
}

