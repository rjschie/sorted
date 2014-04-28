<?php

namespace app\extensions\helper;

use lithium\security\Auth;

class Session extends \lithium\template\Helper {

	public function loggedIn() {
		return Auth::check( 'default' );
	}
}


?>