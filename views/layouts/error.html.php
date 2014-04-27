<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

/**
 * This layout is used to render error pages in both development and production. It is recommended
 * that you maintain a separate, simplified layout for rendering errors that does not involve any
 * complex logic or dynamic data, which could potentially trigger recursive errors.
 */
use lithium\core\Libraries;
$path = Libraries::get(true, 'path');
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style( array(
		'/bower_components/bootstrap/dist/css/bootstrap.min.css',
		'/bower_components/normalize-css/normalize.css',
		'li3/lithified.css',
		'min/app.css',
	)); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?= $this->url( array( 'Home::index' ) ); ?>" class="navbar-brand">Home</a>
		</div>
	</div>
</header>

<main class="" id="content" role="main">
	<div class="container">
		<?php echo $this->content(); ?>
	</div>
</main>

<?php echo $this->html->script(array(
	'/bower_components/jquery/dist/jquery.min.js',
	'/bower_components/bootstrap/dist/js/bootstrap.min.js'
)); ?>
</body>
</html>