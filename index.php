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
	<title>Siipuc</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
</head>
<body> 
	
	<?php include('includes/menu.php');  ?>
	
	<main>
		<article>
			<h1>SIIPUC</h1>
			<hr>
			<?php include('includes/contenido.php'); ?>
			<?php include('includes/footer.php'); ?>
			<center><p>Desarrollado por: Deimi Gomez</p></center>
		</article>

	</main>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php 
	}
	?>
</body>
</html>