<?php

namespace app\tests\cases\controllers;

use lithium\action\Request;
use lithium\net\http\Router;
use lithium\security\Auth;
use li3_fixtures\test\Fixtures;
use app\controllers\SessionsController;

class SessionsControllerTest extends \lithium\test\Unit {

	private $_sut;

	public function setUp() {
		Fixtures::config(array(
			'db' => array(
				'adapter' => 'Connection',
				'connection' => 'default',
				'fixtures' => array(
					'Users' => 'app\tests\fixtures\UsersFixture',
				),
			),
		));

		Fixtures::save( 'db' );
		Router::connect( '/{:controller}/{:action}/{:args}' );
	}

	public function tearDown() {
		Fixtures::clear( 'db' );
		Auth::clear('default');
//		\lithium\storage\Session::clear();
	}




	public function testCanLogInAsUser() {

		// Add user to log in with
		$user = \app\models\Users::create();
		$user->username = 'foobar';
		$user->password = 'bazbup';
		$user->created = 1298798;
		$user->save();

		//Create Request
		$loginRequest = new Request();
		$loginRequest->data = array(
			'username' => 'foobar',
			'password' => 'bazbup',
		);
		$this->_sut = new SessionsController( array( 'request' => $loginRequest ) );

		// Add to session
		$response = $this->_sut->add();
		$this->assertEqual( 302, $response->status['code'] );

		return $response;
	}
}

?>