<?php include( "funciones.php" ); ?>

<!-- Esto es para la tabla de pastor. -->

<html>
	<head>
		<?php include('includes/headgo.php'); ?>
		<title>Ministros/pastor</title>
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

		
		<center>
		<?php 
			echo traer_informacion( "tb_feligres" ); //Trae los datos. 
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