<?php

namespace app\models;

use lithium\util\Validator;
use lithium\security\Password;

class Users extends \lithium\data\Model {

	protected $_schema = array(
		'id' => array(
			'type' => 'id',
		),
		'username' => array(
			'type' => 'string',
			'null' => false,
		),
		'password' => array(
			'type' => 'string',
			'null' => false,
		),
		'created' => array(
			'type' => 'integer',
		),
	);

	public $validates = array(
		'username' => array(
			array( 'notEmpty', 'message' => 'Please enter a username' ),
			array( 'alphaNumeric', 'message' => 'Please use only alpha-numeric characters' ),
		),
		'password' => array(
			array( 'notEmpty', 'message' => 'Please enter a password' ),
			array( 'noWhiteSpace', 'message' => 'White space is not allowed in the password' )
		),
	);
}

Validator::add('noWhiteSpace', function($value, $rule, $options) {
	if(preg_match( '/\s/', $value ))
		return false;
	else
		return true;
});


// TODO - uncomment
//Users::applyFilter('save', function ( $self, $params, $chain ) {
//	if( $params['data'] ) {
//		$params['entity']->set( $params['data'] );
//		$params['data'] = array();
//	}
//
//	if( !$params['entity']->exists() ) {
//		$params['entity']->password = Password::hash( $params['entity']->password );
//	}
//
//	return $chain->next( $self, $params, $chain );
//});

?>