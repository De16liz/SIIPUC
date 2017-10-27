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
		<title>Servicios</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
	
		
			<?php include('includes/menu.php'); ?>
	<main>
		<article>
			<h1>SERVICIOS</h1>
			<hr>
			<p>Radio IPUC.</p>
			<img src="img/022.jpg">
			<p>cultos entre semana: </p>
			<p>martes 6:30 pm.</p>
			<p>jueves 6:30 pm.</p>
			<p>Sabados 6:00 pm.</p>
			<p>Domingos 10:00 am y 6:00 pm.</p>
			<p>.</p>
			<p>.</p>
			
		</article>
	</main>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php } ?>
</body>
</html>