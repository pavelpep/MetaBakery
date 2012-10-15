<!-- File: /app/View/Orders/view.ctp -->

<p>Customer: <?php echo $order['Order']['customerName']; ?></p>

<p>Cake Type: <?php echo $order['Order']['cakeType']; ?></p>

<p>Request Made: <?php echo $order['Order']['requestCreated']; ?></p>

<p>Required by: <?php echo $order['Order']['requestDue']; ?></p>

<p>Order ID: <?php echo $order['Order']['id']; ?></p>

<?php echo $this->Html->link('Back', array('controller' => 'orders', 'action' => 'index')); ?>