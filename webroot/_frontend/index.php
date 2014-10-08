<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SORTED</title>
    <link rel="stylesheet" href="css/min/app.css" />
    <script src="js/modernizr.js"></script>
  </head>
  <body>


	<div id="page">
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

				<div class="as-top-bar collapse hide-for-small-only">
					<div class="medium-4 medium-push-4 columns">
						<h1 id="brand-logo">SORTED</h1>
					</div>
					<div class="medium-4 medium-pull-4 columns">
						<form id="search-area" class="row collapse">
							<div class="medium-1 medium-offset-1 columns">
								<i class="fa fa-search"></i>
							</div>
							<div class="medium-10 columns">
								<input type="text" placeholder="SEARCH">
							</div>
						</form>
					</div>
					<div class="medium-4 columns">
						<ul class="as-inline-list">
							<li><a href="#">SETTINGS</a></li>
							<li><a href="#">LOGOUT</a></li>
						</ul>
					</div>
				</div>

				<div class="as-top-bar collapse show-for-small-only">
					<div class="small-10 columns text-center">
						<h1 id="brand-logo">SORTED</h1>
					</div>
					<div class="small-2 columns">
						<a href="#" class="right-off-canvas-toggle as-menu-toggle"><i class="fa fa-bars"></i></a>
					</div>
				</div>

				<aside class="right-off-canvas-menu show-for-small-only">
					<ul class="off-canvas-list">
						<li>
							<form id="search-area" class="row collapse">
								<div class="small-1 columns">
									<i class="fa fa-search as-fa-adj"></i>
								</div>
								<div class="small-11 columns">
									<input type="text" class="no-padding" placeholder="SEARCH">
								</div>
							</form>
						</li>
						<li><a href="#">CALENDAR</a></li>
						<li><a href="#">COURSES</a></li>
						<li><a href="#">CAMPUS</a></li>
						<li><label></label></li>
						<li><a href="#">SETTINGS</a></li>
						<li><a href="#">LOGOUT</a></li>
					</ul>
				</aside>

				<?php include('day_view.php'); ?>

				<a class="exit-off-canvas"></a>
			</div>
		</div>
	</div>


	<!-- SCRIPTS -->
	<script type="text/javascript" src="//use.typekit.net/tzk6olp.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script src="js/_fastclick.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/foundation.js"></script>
    <script src="js/min/app-ck.js"></script>
  </body>
</html>
