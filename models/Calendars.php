<?php

namespace app\models;

class Calendars extends \lithium\data\Model {

	public $_schema = array(
		'id' => array('type'=>'id'),
		'name' => array(
			'type' => 'string',
			'null' => false,
		),
		'created' => array(
			'type' => 'integer',
			'null' => false,
		),
	);
}

?>