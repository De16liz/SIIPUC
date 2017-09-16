<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/logo-header.png">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SIIPUC</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
		
	<div  class="container"> <!-- inicio contenedor-->
		<div  class='row'><!-- fila 1-->
			<?php include('encabezado.php'); ?>
		</div> <!--fin fila 1 -->

		<div style="float:right;" class='col-xs-6' id="cabecera"><!--fila 2-->
			
 				<a href="iniciar.php"><button class="col-xs-6 col-sm-6 btn btn-default">Acceder</button></a>
 				<a href="nuevo_usu.php"><button class="col-xs-6 col-sm-6 btn btn-default">Registrarse</button></a>
 				
		</div><!-- fin fila 2-->

		<div class='row '> <!--fila 3-->
			<?php include('contenido.php'); ?>
		</div> <!--fin fila 3-->
		<div class='row'>
			<?php include('footer.php'); ?>
		</div>

		</div> <!--fin container-->

		<script src="js/jquerymin.js"></script>
        <script src="js/bootstrap.min.js"></script>
         
	</body>
</html>	