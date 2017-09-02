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

	<script type="text/javascript">
            //función encargada de procesar la solicitud al pulsar el botón pasar_edicion
            function saltar(id){
                $("#editar").load("http://localhost/updateCI/datos/mostrar_datos", { id: id }); 
                $("#editar").fadeIn('2000');
            }
    </script>

    <style type="text/css">
    	#editar{
                margin: 30px 0px 0px 300px;
                background-color: #D0D0D0;
                border: 3px solid #999;
                width: 500px;
                padding: 20px;
                display: none;
            }
    </style>
</head>
<body>
<main>
