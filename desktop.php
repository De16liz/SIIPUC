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
		<title>SIIPUC</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
	
		
			<?php include('includes/menuadmin.php'); ?>
		
	<div  class="container"> <!-- inicio contenedor-->
		

		<div class='row'><!--fila 2-->
			<?php include('includes/contenido.php'); ?>
		</div><!-- fin fila 2-->

		<div class='row '> <!--fila 3-->
			<?php include('includes/footer.php'); ?>
		</div> <!--fin fila 3-->
		

		</div> <!--fin container-->

		<!-- <script src="js/jquerymin.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php } ?>
	</body>
</html>	
