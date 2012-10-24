<div class="users form">
<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Html->link('Create Account', array('controller' => 'users', 'action' => 'add')); ?>
<br /><br /><br />
<?php echo $this->Html->link('Login to MetaBakery', array('controller' => 'users', 'action' => 'login')); ?>
</div>