<?php

namespace app\extensions\command;

use app\models\Events;

class EventRemoveAll extends \lithium\console\Command {

	public function run() {

		// Remove old events
		Events::remove();

		// Set Auto_Increment
		$sql = 'ALTER TABLE `' . Events::meta('source') . '` auto_increment = 1';
		Events::connection()->read( $sql );

		$this->out( "Success: Removed all events." );
	}
}

?>