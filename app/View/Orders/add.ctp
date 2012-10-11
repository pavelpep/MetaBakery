<!-- File: /app/View/Orders/add.ctp -->

<h1>Add Order</h1>
<?php
echo $this->Form->create('Order');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Order');
?>