<?php

namespace app\models;

class Events extends \lithium\data\Model {

	public $_schema = array(
		'id' => array('type'=>'id'),
		'title' => array(
			'type' => 'string',
			'null' => false,
		),
		'description' => array(
			'type' => 'text',
			'null' => true,
		),
		'time' => array(
			'type' => 'integer',
			'null' => false,
		),
		'calendar_id' => array(
			'type' => 'integer',
			'null' => false,
		),
	);

}

?>