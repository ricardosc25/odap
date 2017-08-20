<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $title; ?></title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/favicon_odap.png"/> <!-- Favicon -->
	<link rel="stylesheet" href="<?php echo base_url();?>/css/materialize.css" type="text/css"/>
	
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css"/>
</head>
<body class="blue-grey lighten-4">
	<div class="section"></div>
	<div class="section"></div>
	<div class="section"></div>
	<div class="row">
		<div class="col m12 s12 z-depth-4 card-panel">
			<img src="<?php echo base_url();?>images/odap_logo_login.png">
			<?php echo validation_errors(); ?>
			<form class="login-form" action="<?php echo base_url();?>login/logueo" method="post">
				<div class="row">
					<div class="input-field col s12 center">
						<H5><b>Iniciar sesión</b></H5>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="material-icons prefix">perm_identity</i>
						<input name="usuario" type="text" value="<?php echo set_value('usuario'); ?>">
						<label for="usuario" class="center-align">Usuario</label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12">
						<i class="material-icons prefix">lock_outline</i>
						<input name="contrasena" type="password" value="<?php echo set_value('contrasena'); ?>">
						<label for="contrasena">Contraseña</label>
					</div>
				</div>
				<!-- Imprimimos un mensaje si la validacion de usuario falla -->
				<?php 
				$login_false = $this->session->flashdata('login_false'); 
				if ($login_false) { ?>

				<center><span class="red-text"> <?php echo $login_false; ?></span></center>

				<?php }	?>
				<div class="row">
					<p class="center-align">
						<button class="waves-effect waves-orange btn orange accent-2 black-text" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>        
				</div>

			</form>
		</div>
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/materialize.js"></script>
	<script src="https://use.fontawesome.com/295276088e.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$('.slider').slider();
			$('select').material_select();
			$('.materialboxed').materialbox();
		});

	</script>
</body>
</html>
