<?php

namespace app\extensions\command;

use app\models\Calendars;

class CalendarCreate extends \lithium\console\Command {

	public function run($name = null) {
		$this->header( "Calendar Creator" );

		if( !$name ) {
			$name = $this->in( "Calendar Name: " );
		}

		$this->out( "Creating new calendar... " );

		$user = Calendars::create();
		$user->name = $name;
		$user->created = time();
		$user->save();

		$this->out( "Success: Created calendar: " . $name );

	}
}

?>