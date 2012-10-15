<!-- File: /app/View/Orders/index.ctp -->

<h1>Orders</h1>



<table>
    <tr>
        <th>Customer</th>
        <th>Cake</th>
        <th>View Order Details</th>
        <th>Delete Order</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($orders as $order): ?>
    <tr>
        <td>
            <?php echo $order['Order']['customerName']; ?>
        </td>
        <td>
            <?php 
                switch ( $order['Order']['cakeType'] ){
                    case 1: echo "Chocolate Cake"; 
                        break;
                    case 2: echo "Vanilla Cake";
                        break;
                    case 3: echo "Lemon Cake";
                        break;

                }
                ?>
        </td>
        <td>
            <?php echo $this->Html->link('view', array('action'=>'view', $order['Order']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('delete', array('action'=>'delete', $order['Order']['id']), NULL , "Are you sure you want to remove this order"); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($order); ?>
</table>

<br />

<?php echo $this->Html->link('Add Order', array('controller' => 'orders', 'action' => 'add')); ?>