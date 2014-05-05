<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sorted &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style( array(
		'/bower_components/normalize-css/normalize.css',
		'min/app.css',
		(($this->request()->controller == "Sessions") ? 'min/login.css' : ''),
	)); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>

<?php if($this->request()->controller != 'Sessions'): ?>
<header role="banner">

</header>
<?php endif; ?>

<div class="main-content centered">
<?php echo $this->content(); ?>
</div>

<!-- TODO - Uncomment -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<?php echo $this->html->script( array(
	'/bower_components/jquery/dist/jquery.min.js',	// TODO - remove
	'/bower_components/sprockets-modernizr/modernizr.js',
	'min/app-ck.js',
)); ?>
</body>
</html>