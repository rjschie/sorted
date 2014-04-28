<?php
$this->form->config( array(
	'field' => array(
		'class'	=> 'form-control',
		'wrap'	=> 'class="form-group"',
	),
	'submit' => array(
		'class'	=> 'btn btn-default',
	),
));
?>


	<h2>Login</h2>
	<br>
<?php if( $loginFailed ): ?>
	<div class="text-error">Login failed - please check your credentials</div>
	<br>
<?php endif; ?>

<?=$this->form->create( $user );?>
<?=$this->form->field( 'username', array(
	'label'=>'',
	'placeholder'=>'Username'
));?>
<?=$this->form->field( 'password', array(
	'type'=>'password',
	'label' => '',
	'placeholder'=>'Password'
));?>
<?=$this->form->submit( 'Log in' );?>
<?=$this->form->end();?>

<?//= \lithium\security\Password::hash('rschie'); ?>