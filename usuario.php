 <?php 
session_start();
if (!isset($_SESSION['usuario'])) 
{
echo "<script>location.href='index.php'</script>";
} else{

?>
<!DOCTYPE html>
<html>
<head> 
		<?php include('includes/headgo.php'); ?>
		<title>Usuario</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
	
			<?php	include( "funciones.php" );?>
			<?php include('includes/menuadmin.php'); ?>
	<main>
		<article>
			<h1>USUARIO</h1>
			<hr>
			<?php  echo imprimir_menus(); ?>
		
		<br><br>
		
		<?php
			echo "Ministros registrados en el sistema: ".retornar_dato_tabla( "tb_pastor", "COUNT( * )" )."<br>";
			echo "Feligreses registrados en el sistema: ".retornar_dato_tabla( "tb_feligres", "COUNT( * )" )."<br>";
			echo "Comites registrados en el sistema: ".retornar_dato_tabla( "tb_comites", "COUNT( * )" )."<br>";
			echo "eventos registrados en el sistema: ".retornar_dato_tabla( "tb_eventos", "COUNT( * )" )."<br>";
		?>
		<div class='col-xs-12 col-md-4 col-lg-4 ' >
					<h4>volver <a href="desktop.php">atras</a> </h4>
			</div>
		<div class='col-xs-12 col-md-4 col-lg-4 ' id="cabeza">
			<h4>volver al  <a href="index.php">Inicio</a></h4>
		</div>
					
		<div class='col-md-4 col-lg-4 ' >	
			
		</div>
		</article>

	</main>
	<?php include('includes/footer.php'); ?>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php } ?>
</body>
</html>