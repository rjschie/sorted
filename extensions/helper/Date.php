<?php

namespace app\extensions\helper;

class Date extends \lithium\template\Helper {

	public function get_weekday( $date, $three = false ) {
		$three = ( $three ) ? 'D' : 'l' ;
		return date( $three, $date );
	}

	public function get_day( $date, $lz = false ) {
		//
	}

	public function get_month( $date ) {
		//
	}
}


?>