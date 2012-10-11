<!-- File: /app/View/Orders/view.ctp -->

<h1><?php echo h($order['Order']['title']); ?></h1>

<p><small>Created: <?php echo $order['Order']['created']; ?></small></p>

<p><?php echo h($order['Order']['body']); ?></p>