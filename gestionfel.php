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
		<title>Feligres</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
	
		
			<?php include('includes/menuadmin.php'); ?>
	<main>
		<article>
			<h1>Secretaria</h1>
			<hr>
			<div  class="container"> <!-- inicio contenedor-->
	<div  class='row'><!-- fila 1-->
		<a href="gestionpas.php">Pastor</a><br>
		<a href="gestionfel.php">feligreses</a><br>
		<a href="gestionco.php">comites</a>
	</div> <!--fin fila 1 -->

	<div class='row'>
	<center><h1>Datos del feligrez</h1></center>
		<div class='col-xs-12 col-md-4 col-lg-4 '>
		
		</div>
		<div class='col-xs-12 col-md-4 col-lg-4 '>	

			<form  action="nuevo_feligrez.php" method="POST" autocomplete="off">
				<div style="margin-bottom: 25px" class="input-group">
					<label for="usuario" class="col-md-3 control-label"><h4>Documento</h4></label>
					<input type="text" class="form-control" name="id" placeholder="Digite su documento" value="" required="">
				</div>

				<div style="margin-bottom: 25px" class="input-group">
					<label for="usuario" class="col-md-3 control-label"><h4>Nombre</h4></label>
					<input type="text" class="form-control" name="nombre" placeholder="Digite su nombre" value="" required="">
				</div>

				<div style="margin-bottom: 25px" class="input-group">
					<label for="usuario" class="col-md-3 control-label"><h4>Fecha nacimiento</h4></label>
					<input type="date" class="form-control" name="nacimiento"  >
				</div>	

				<div style="margin-bottom: 25px" class="input-group">
					<label for="usuario" class="col-md-3 control-label"><h4>Estado Civil</h4></label>
					<input type="text" class="form-control" name="EC" placeholder="Digite el estado civil" value="" required="">
				</div>	

				<div style="margin-bottom: 25px" class="input-group">
					<label for="usuario" class="col-md-3 control-label"><h4>Telefono</h4></label>
					<input type="text" class="form-control" name="telefono" placeholder="Digite numero de contacto" value="" required="">
				</div>

				<div style="margin-bottom: 25px" class="input-group">
					<label for="usuario" class="col-md-3 control-label"><h4>Direccion</h4></label>
					<input type="text" class="form-control" name="direccion" placeholder="Digite su direccion de residencia" value="" required="">
				</div>	

				<div style="margin-bottom: 25px" class="input-group">
					<label for="usuario" class="col-md-3 control-label"><h4>Barrio</h4></label>
					<input type="text" class="form-control" name="barrio" placeholder="Barrio de residencia" value="" required="">
				</div>
							
				<div class="form-group">                                      
					<div class="col-md-offset-3 col-md-9">
					<button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i>Registrar</button> 
					</div>
				</div>

			</form>
			<div class='col-xs-12 col-md-4 col-lg-4 ' >
					<h4>volver <a href="desktop.php">atras</a> </h4>
			</div>
		<div class='col-xs-12 col-md-4 col-lg-4 ' id="cabeza">
			<h4>volver al  <a href="index.php">Inicio</a></h4>
		</div>
					
		<div class='col-md-4 col-lg-4 ' >	
			<!--<h4>mostrar <a href="datos.php">datos</a></h4>-->
		</div>
		</div>
		<div class='col-xs-12 col-md-4 col-lg-4 '>
		
		</div>
						
		</div>

</div> <!--fin container-->

		</article>
		<div class='row'>
		<?php include('footer.php'); ?>
	</div>
	</main>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php 
	}
	?>
</body>
</html>