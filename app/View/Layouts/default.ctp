<?php echo $this->Html->docType('html4-trans'); ?>
<html>
	<head>
		<title><?php echo $title_for_layout; ?> </title>
		<?php echo $this->Html->css('cake.generic'); ?>
		<?php echo $this->Html->css('app'); ?>
		<?php echo $this->Html->css('foundation.min'); ?>
		<?php echo $this->Html->css('metabakery'); ?>
		<?php echo $this->Html->script('jquery'); ?>
		<?php echo $this->Html->script('techcomparison'); ?>

	</head>
	<body>
		
		<div id="header">
			<h1>Cake Orders</h1>
		</div>
		
		<div id="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>

		
	</body>
	
</html>