<?php

namespace app\tests\cases\controllers;

use lithium\action\Request;
use li3_fixtures\test\Fixtures;
use lithium\net\http\Router;
use app\controllers\SessionsController;

class SessionsControllerTest extends \lithium\test\Unit {

	private $sut;

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

		$request = new Request();
		$request->data = array(
			'username' => 'foobar',
			'password' => 'bazbup',
		);

		$this->sut = new SessionsController( array( 'request' => $request ) );
	}

	public function tearDown() {
//		Fixtures::clear( 'db' );
		\lithium\storage\Session::clear();
	}

	public function testCannotLogInAsNonExistingUser() {
		$response = $this->sut->add();
		$this->assert( $response['loginFailed'] );
	}

	public function testCanLogInAsUser() {

		// Add user to log in with
		$user = \app\models\Users::create();
		$user->username = 'foobar';
		$user->password = 'bazbup';
		$user->created = 1298798;
		$user->save();

		// Add to session
		$response = $this->sut->add();
		$this->assertEqual( 302, $response->status['code'] );

		// Remove from session
		$logoutResponse = $this->sut->remove();
		$this->assertEqual( 302, $logoutResponse->status['code'] );
	}
}

?>