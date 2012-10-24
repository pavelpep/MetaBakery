<?php echo $this->Html->docType('html4-trans'); ?>
<html>
	<head>
		<title><?php echo $title_for_layout; ?> </title>
		<?php echo $this->Html->css('app'); ?>
		<?php echo $this->Html->css('foundation.min'); ?>
		<?php echo $this->Html->css('metabakery'); ?>
		<?php echo $this->Html->script('jquery'); ?>
		<?php echo $this->Html->script('techcomparison'); ?>

	</head>
	<body>
		
		<div id="header">
		    <h1>Meta Bakery</h1>
			
			<div id="headerBar">
				<?php echo $this->Html->Link('Orders List', array('controller' => 'orders', 'action' => 'index'), array('class' => 'button')); ?>
				<?php echo $this->Html->Link('Add Order', array('controller' => 'orders', 'action' => 'add'), array('class' => 'button'));	?>
			    <?php echo $this->Html->link('Technical Comparisons', array('controller' => 'orders', 'action' => 'tech_comparisons'), array('class' => 'button')); ?>
			    <?php echo $this->Html->link('Bakery Post', array('controller' => 'posts', 'action' => 'bakery'), array('class' => 'button')); ?>
			
				<?php
					if ($this->Session->read('Auth.User')):						
						echo $this->Html->Link('Log Out', array('controller' => 'users', 'action' => 'logout'), array('class' => 'button'));
				
					else:
						echo $this->Html->Link('Log In', array('controller' => 'users', 'action' => 'login'), array('class' => 'button'));
						
					endif;
				?>
			</div>

		</div>
		
		<div id="container">
		     
			
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>

		
	</body>
	
</html>