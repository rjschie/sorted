<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sorted &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style( array(
		(($this->request()->controller == "Sessions") ? 'min/login.css' : 'min/app.css'),
	)); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>

<?php if($this->request()->controller != 'Sessions'): ?>
<!-- HEADER -->
<header id="masthead" class="pure-g" role="banner">
	<div id="site-search" class="pure-sm-hidden pure-u-1-3">
		<form>
			<i class="fa fa-search"></i>
			<input type="text" placeholder="SEARCH" class="testBorder">
		</form>
	</div>
	<?php // TODO Make Header not clickable when so huge ?>
	<div class="pure-u-1 pure-u-sm-1-3 navbar-header text-center">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#masthead-nav-collapse">
			<i class="fa fa-bars"></i>
		</button>
		<h1 id="brand">SORTED</h1>
	</div>

	<div class="pure-u-1 pure-u-sm-1-3 "  role="navigation">
		<nav id="masthead-nav-collapse" class="collapse navbar-collapse pure-menu pure-menu-open pure-menu-horizontal">
			<ul>
				<li><a href="#" class="">SETTINGS</a</li>
				<li><a href="<?= $this->url('/logout'); ?>" class="">LOGOUT</a></li>
			</ul>
		</nav>
	</div>
</header>
<?php endif; ?>

<!-- MAIN CONTENT -->
<?php echo $this->content(); ?>


<!-- SCRIPTS -->
<script type="text/javascript" src="//use.typekit.net/tzk6olp.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php
use lithium\core\Environment;
$jquery_path = (Environment::is('production')) ? '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' : 'min/jquery.min.js';
$modernizr_path = (Environment::is('production')) ? '//ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js' : 'min/modernizr.js';
?>
<?php echo $this->html->script( array(
	$jquery_path,
	$modernizr_path,
	'min/app-ck.js',
)); ?>
</body>
</html>