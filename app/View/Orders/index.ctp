<!-- File: /app/View/Orders/index.ctp -->

<h1>Orders</h1>
<table>
    <tr>
        <th>Order ID</th>
        <th>Customer</th>
        <th>Cake</th>
        <th>Request Made</th>
        <th>Request Due</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($orders as $order): ?>
    <tr>
        <td>
            <?php echo $order['Order']['id']; ?>
        </td>
        <td>
            <?php echo $order['Order']['customerName']; ?>
        </td>
        <td>
            <?php echo $order['Order']['cakeType']; ?>
        </td>
        <td>
            <?php echo $order['Order']['requestCreated']; ?>
        </td>
        <td>
            <?php echo $order['Order']['requestDue']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($order); ?>
</table>