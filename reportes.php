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
		<title>Reportes</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
	
		
			<?php include('includes/menuadmin.php'); ?>
	<main>
		<article>
			<h1>REPORTES</h1>
			<hr>
			<p> <a href="pdf/formato membresia.docx">Formatos de membresia.</a></p>
			<p> <a href="pdf/CERTIFICACIONES IGLESIA.doc">Certificaciones.</a></p>
			
		</article>
		<div class='col-xs-12 col-md-4 col-lg-4 ' >
					<h4>volver <a href="desktop.php">atras</a> </h4>
			</div>
		<div class='col-xs-12 col-md-4 col-lg-4 ' id="cabeza">
			<h4>volver al  <a href="index.php">Inicio</a></h4>
		</div>
					
		<div class='col-md-4 col-lg-4 ' >	
			
		</div>
	</main>
		<?php include('includes/footer.php'); ?>
	<main>
	
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php 
	}
	?>
</body>
</html>