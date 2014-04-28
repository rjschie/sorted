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
			<a href="<?= $this->url( '/' ); ?>" class="navbar-brand">Home</a>
		</div>
		<nav class="navbar-collapse bs-navbar-collapse collapse in" role="navigation">
			<ul class="nav navbar-nav navbar-left">
				<li>
					<!-- <a href="<?= $this->url( '/' ); ?>">Home</a> -->
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if($this->session->loggedIn()): ?>
					<li><a href="<?= $this->url('/logout'); ?>">Logout</a></li>
				<?php else: ?>
					<li><a href="<?= $this->url('/login'); ?>">Login</a></li>
				<?php endif; ?>
			</ul>
		</nav>
	</div>
</header>

<main class="" id="content" role="main">
	<div class="container">
		<?php echo $this->content(); ?>
	</div>
</main>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<?php echo $this->html->script( array(
	'/bower_components/jquery/dist/jquery.min.js',
	'/bower_components/bootstrap/dist/js/bootstrap.min.js',
	'/bower_components/sprockets-modernizr/modernizr.js',
	'min/app-ck.js',
)); ?>
</body>
</html>