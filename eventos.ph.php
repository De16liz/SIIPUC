<?php include( "funciones.php" ); ?>

<!-- Esto es para la tabla de pastor. -->

<html>
	<head>
		<?php include('includes/headgo.php'); ?>
		<title>Eventos</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
	</head>

	<body>
	<div class='col-xs-12 col-md-4 col-lg-4 ' >
					
	</div>
	<div class='col-xs-12 col-md-4 col-lg-4 ' >
		<img src="img/ipuc.png">			
	</div>
	<div class='col-xs-12 col-md-4 col-lg-4 ' >
					
	</div>
	
		<main>
		<article>
		<?php  echo imprimir_menus();  ?>
		<br>

		<!--<form action="guardar_datos.php" method="get">
			Documento			<input type="text" name="dato1">
			Licencia	 			<input type="text" name="dato2"><br><br>
			Nombre 	<input type="text" name="dato3">
			Correo 	<input type="text" name="dato4">
			Fecha nacimiento 	<input type="text" name="dato5"><br><br>
			Telefono 	<input type="text" name="dato6">
			Direccion 	<input type="text" name="dato7">
			Barrio 	<input type="text" name="dato8">
			<input type="hidden" name="tabla" value="tb_pastor">
			<input type="hidden" name="total-campos" value="8">
			<input type="hidden" name="campos" value="id, Nro_licencia, Nombre, nacimiento, telefono, direccion, barrio">
			<input type="submit" value="Enviar">
		</form><br><br>-->
		<center>
		<?php 
			
		?>
		</center>
		</main>
		</article>
<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>

	</body>

</html>