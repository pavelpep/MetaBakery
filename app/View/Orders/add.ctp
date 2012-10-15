<!-- File: /app/View/Orders/add.ctp -->

<h1>Add Order</h1>
<?php
echo $this->Form->create('Order');
echo $this->Form->input('customerName');
echo $this->Form->input('cakeType');
echo $this->Form->input('requestCreated');
echo $this->Form->input('requestDue');
echo $this->Form->end('Save Order');
?>
<?php echo $this->Html->link('Back', array('controller' => 'orders', 'action' => 'index')); ?>