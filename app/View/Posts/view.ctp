<!-- File: /app/View/Posts/view.ctp -->

<h3><?php echo h($post['Post']['title']); ?></h3>

<p><small>Created on: <?php echo $post['Post']['created']; ?>
	Last Modified on: <?php echo $post['Post']['modified']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<br />
 
<p><?php echo $this->Html->link('Back', array('action'=>'bakery')); ?>
	<?php echo $this->Html->link('Edit', array('action'=>'edit', $post['Post']['id'])); ?></p>