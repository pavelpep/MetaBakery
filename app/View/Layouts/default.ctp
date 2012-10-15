<?php echo $this->Html->docType('html4-trans'); ?>
<html>
	<head>
		<title><?php echo $title_for_layout; ?> </title>
		<?php echo $this->Html->css('app'); ?>
		<?php echo $this->Html->css('foundation.min'); ?>

	</head>
	<body>
		<div id="header">
			<h1>Cake Orders</h1>
		</div>
	</body>
	<div id="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
</html>