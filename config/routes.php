<?php

use lithium\net\http\Router;
use lithium\core\Environment;
use lithium\security\Auth;


$userAuth = Auth::check( 'default' );

/**
 * Home Route
 */
if ($userAuth) {
	Router::connect( '/', 'Home::index' );
} else {
	Router::connect( '/', 'Sessions::add' );
}


/**
 * Session Routes
 */
Router::connect('/login', 'Sessions::add');
Router::connect('/logout', 'Sessions::remove');


/**
 * Testing Routes
 */
if (!Environment::is('production')) {
	Router::connect('/test/{:args}', array('controller' => 'lithium\test\Controller'));
	Router::connect('/test', array('controller' => 'lithium\test\Controller'));
}


/**
 * Database object routes
 */
Router::connect('/{:controller}/{:action}/{:id:\d+}.{:type}', array('id' => null));
Router::connect('/{:controller}/{:action}/{:id:\d+}');


/**
 * Catch-all
 */
Router::connect('/{:controller}/{:action}/{:args}');

?>