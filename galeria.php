 <?php 
session_start();
if (isset($_SESSION['usuario'])) 
{
echo "<script>location.href='desktop.php'</script>";
} else{

?>
<!DOCTYPE html>
<html>
<head> 
		<?php include('includes/headgo.php'); ?>
		<title>Galeria</title>
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
	
		
			<?php include('includes/menu.php'); ?>
	<main>
		<?php include('includes/contenido.php'); ?>
		<article>
			<h1>GALERIA</h1>
			<hr>
			<p>Diferentes eventos realizados en el presente año.</p>
			<p>Mostrando la gloria de Dios, y las victorias obtenidas de sus manos; por su misericordia.</p>
			<p><img src="img/021.jpg"></p>
			
			
		</article>
	</main>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php } ?>
</body>
</html>