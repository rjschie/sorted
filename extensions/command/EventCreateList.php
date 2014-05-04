<?php

namespace app\extensions\command;

use app\models\Events;

class EventCreateList extends \lithium\console\Command {

	public function run( $args = null ) {

		$_defaults = array(
			'count' => 10,
			'min'	=> -2,
			'max'	=> 4,
		);

		$args = explode( ',', $args );
		$count = ( strlen($args[0]) > 0 ) ? $args[0] : $_defaults['count'];
		$min = ( strlen($args[1]) > 0) ? $args[1] : $_defaults['min'];
		$max = ( strlen($args[2]) > 0 ) ? $args[2] : $_defaults['max'];

		// Establish Vars :: 86400 seconds = 24 hours
		$max = time() + ( $max * 86400 );
		$min = time() + ( $min * 86400 );

		// Output
		$this->header( "Event List Creator" );
		$this->out( "Creating list of events... " );

		// Remove old events
		Events::remove();

		// Set Auto_Increment
		$sql = 'ALTER TABLE `' . Events::meta('source') . '` auto_increment = 1';
		Events::connection()->read( $sql );

		// Create new events
		for ($i=1; $i <= $count; $i++) {
			$event = Events::create();
			$event->title = "Event " . rand();
			$event->description = "Desc: " . rand();
			$event->time = rand( $min, $max );
			$event->save();
		}

		$this->out( "Success: Created " . $count . " events." );
	}
}

?>