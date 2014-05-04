<?php

namespace app\extensions\utils;

class Dates extends \lithium\core\StaticObject {


	public static function is_today( $date ) {
		return ( ( $date - mktime( 0, 0, 0 ) ) < 86400 );
	}

	public static function is_tomorrow( $date ) {
		return ( ( $date - mktime( 0, 0, 0 ) ) < ( 86400 * 2 ) );
	}

	public static function is_n_day( $date, $n = 0 ) {
		return ( ( $date - mktime( 0, 0, 0 ) ) < ( 86400 * $n ) );
	}

	public static function between_limits( $date, array $limits = array() ) {
		//
	}

	public static function get_today() {
		return mktime( 0, 0, 0 );
	}

	public static function get_tomorrow() {
		return mktime( 24, 0, 0 );
	}

	public static function get_n_day( $n = 0 ) {
		return mktime( (24 * $n), 0, 0 );
	}
}


?>