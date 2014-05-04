
<?php

foreach ( $events as $event ) {
	$weekday = $this->date->get_weekday( $event->time, true );
	$day = $this->date->get_day( $event->time, true );
}

?>