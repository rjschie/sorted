
<?php
$this->form->config( array(
	'field' => array(
		'class'	=> 'form-control',
		'template' => '{:label}{:input}{:error}',
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

<div class="pure-g">
	<div id="login-div" class="pure-u-20-24 text-center centered"> <?php // TODO - Remove ".panel" ?>
		<h1 class="logo">SORTED</h1>
		<p id="tagline" class="italic subtext centered">the simple organizer for your not-so-simple schedule</p>

		<?=$this->form->create( $user, array('id'=>'loginForm') );?>
		<?php if( $loginFailed ): ?>
			<div class="error-panel italic subtext text-left">Login failed - please check your credentials</div>
		<?php endif; ?>
		<?=$this->form->field( 'username', array(
			'label'=>'Username',
			'required' => 'required',
			'placeholder'=>'USERNAME',
		));?>
		<?=$this->form->field( 'password', array(
			'type'=>'password',
			'label' => '',
			'required' => 'required',
			'placeholder'=>'PASSWORD',
		));?>
		<?=$this->form->submit( 'LOGIN' );?>
		<?=$this->form->end();?>

		<?php // TODO Change link to Forgot Pass Controller/Action ?>
		<a id="forgot-pass" class="centered block simple" href="<?= $this->url('/forgotpass'); ?>">FORGOT MY PASSWORD</a></p>
	</div>
</div>
