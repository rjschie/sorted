<?php


namespace app\extensions\command;

class Test extends \lithium\console\Command {


	public function run( $args = null ) {

		$var = array_map( 'intval', explode( ',', $args ) );

		$this->out( var_dump( $var ) );
	}

}

?>