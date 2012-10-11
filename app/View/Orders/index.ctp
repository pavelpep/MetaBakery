<!-- File: /app/View/Orders/index.ctp -->

<h1>Orders</h1>

<?php echo $this->Html->link('Add Order', array('controller' => 'orders', 'action' => 'add')); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($orders as $order): ?>
    <tr>
        <td><?php echo $order['Order']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($order['Order']['title'],
array('controller' => 'orders', 'action' => 'view', $order['Order']['id'])); ?>
        </td>
        <td><?php echo $order['Order']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($order); ?>
</table>