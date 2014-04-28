<?php

namespace app\controllers;

use lithium\security\Auth;
use app\models\Users;

class SessionsController extends \lithium\action\Controller {

	public function add() {
		$user = Users::create();
		$loginFailed = false;

		if( $this->request->data ) {

			if( Auth::check( 'default', $this->request ) ) {
				return $this->redirect( '/' );
			}

			$user->set( $this->request->data );
			$loginFailed = ( $user->validates() ) ? true : false;
		}

		return compact( 'user', 'loginFailed' );
	}

	public function remove() {
		Auth::clear( 'default' );
		return $this->redirect( '/' );
	}
}

?>