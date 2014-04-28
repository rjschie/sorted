<?php

namespace app\tests\fixtures;

class UsersFixture extends \li3_fixtures\test\Fixture {

	protected $_model = 'app\models\Users';

	protected $_fields = array(
		'id'		=> array('type' => 'id'),
		'username'	=> array('type' => 'string'),
		'password'	=> array('type' => 'string'),
		'created'	=> array('type' => 'integer'),
	);
}

?>