<?php

namespace app\extensions\command;

use app\models\Events;

class EventAdd extends \lithium\console\Command {

	public function run( $args = null ) {

		$_defaults = array(
			'count' => 1,
			'min'	=> 0,
			'max'	=> 1,
		);

		$args = explode( ',', $args );
		$count = ( strlen($args[0]) > 0 ) ? $args[0] : $_defaults['count'];
		$min = ( strlen($args[1]) > 0) ? $args[1] : $_defaults['min'];
		$max = ( strlen($args[2]) > 0 ) ? $args[2] : $_defaults['max'];

		// Establish Vars :: 86400 seconds = 24 hours
		$max = time() + ( $max * 86400 );
		$min = time() + ( $min * 86400 );

		// Output
		$this->header( "Event Creator" );
		$this->out( "Creating event(s)... " );

		// Create new events
		for ($i=1; $i <= $count; $i++) {
			$event = Events::create();
			$event->title = "Event " . (rand());
			$event->description = "Desc: " . (rand());
			$event->time = rand( $min, $max );
			$event->save();
		}

		$this->out( "Success: Created " . $count . " event(s)." );
	}
}

?>