<?php

namespace app\extensions\command;

use app\models\Users;

class UserCreate extends \lithium\console\Command {

	public function run($name = null, $pass = null) {
		$this->header( "User Creator" );

		if( !$name || !$pass ) {
			$name = $this->in( "Username: " );
			$pass = $this->in( "Password: " );
		}

		$this->out( "Creating new user... " );

		$user = Users::create();
		$user->username = $name;
		$user->password = $pass;
		$user->created = time();
		$user->save();

		$this->out( "Success: Created user: " . $name );

	}
}

?>