
<?php
$this->form->config( array(
	'field' => array(
		'class'	=> 'form-control',
		'wrap'	=> 'class="form-group"',
	),
	'submit' => array(
		'class'	=> 'btn btn-default form-control',
	),
	'error' => array(
		'class' => 'text-error subtext italic text-left',
	),
));

$this->title('Login');
?>

<div id="login-div" class="text-center grid-33 centered"> <?php // TODO - Remove ".panel" ?>
	<h1 class="logo">SORTED</h1>
	<p id="tagline" class="italic subtext centered">the simple organizer for your not-so-simple schedule</p>

	<?=$this->form->create( $user );?>
	<?php if( $loginFailed ): ?>
		<div class="error-panel italic subtext text-left">Login failed - please check your credentials</div>
	<?php endif; ?>
	<?=$this->form->field( 'username', array(
		'label'=>'',
		'required' => 'required',
		'placeholder'=>'USERNAME',
	));?>
	<?=$this->form->field( 'password', array(
		'type'=>'password',
		'label' => '',
		'required' => 'required',
		'placeholder'=>'PASSWORD',
	));?>
	<div class="form-group">
		<?=$this->form->submit( 'LOGIN' );?>
	</div>
	<?=$this->form->end();?>

	<?php // TODO Change link to Forgot Pass ?>
	<a id="forgot-pass" class="centered block simple" href="<?= $this->url('/forgotpass'); ?>">FORGOT MY PASSWORD</a></p>
</div>
