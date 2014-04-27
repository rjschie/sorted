<?php

use \lithium\analysis\Logger;

Logger::config( array(
	'default' => array(
		'production' => array(
			'adapter' => 'File',
			'priority' => array('emergency', 'aleret', 'critical', 'error')
		),
		'development' => array(
			'adapter' => 'File',
			'priority' => array('emergency', 'aleret', 'critical', 'error', 'warning', 'info', 'debug')
		),
		'test' => array(
			'adapter' => 'File',
			'priority' => array('emergency')
		)
	)
));

?>