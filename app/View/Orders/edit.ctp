<!-- File: /app/View/Orders/edit.ctp -->

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Order', array('action' => 'edit'));
    echo $this->Form->input('customerName');
	echo $this->Form->input('cakeType');
	echo $this->Form->input('requestCreated');
	echo $this->Form->input('requestDue');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Order');
?>  
<?php echo $this->Html->link('Back', array('controller' => 'orders', 'action' => 'index')); ?>