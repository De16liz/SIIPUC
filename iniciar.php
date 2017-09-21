 <?php 
session_start();
if (isset($_SESSION['usuario'])) 
{
echo "<script>location.href='desktop.php'</script>";
} else{

?>
<!DOCTYPE html>
<html lang="es">
<head>
		<?php include('includes/headgo.php'); ?>
		<title>SIIPUC</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
		
</head>
<body>
	
		
			<?php include('includes/menu.php'); ?>
			<main>
		<article>

			<div class='row '> <!--fila 2-->
			<div class="col-sm-3 ">
			</div>

			<div class="col-xs-12 col-sm-6 ">	
				<div class="col-xs-12 ">
					
					<center><h1>Iniciar Sesión</h1></center>	
					<br>
				</div>
				<form  action="login.php" method="POST" autocomplete="off">
						
					<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario" required>                                   
					</div>
								
					<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
					</div>
								
					<div  class="form-group">
					
					<button id="btn-login" type="submit" class="col-xs-12 btn btn-primary"><b>Iniciar Sesi&oacute;n</b></a>
					
					</div><br>
								
					<div class="form-group">
					<div class="panel-heading">
					<div class="panel-title"></div><br>
					<div style="float:right; font-size: 80%; position: relative; top:10px"><a href="recuperacontra.php">¿has olvidado tu contraseña?</a></div>
					</div> <br>
					<div class="col-md-12 control">
					<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
					<a href="registro.php">Registrate aquí</a>
					<br><br><br>
					Volver al  <a href="index.php">Inicio</a>
					</div>
					</div>
					</div>    
				</form>
			</div>
			<div class="col-sm-3 ">
			</div>

		<!-- <div class='row'>
			<?php //include('footer.php'); ?>
		</div> -->

		</div> <!--fin container-->
			
			
		</article>
	</main>
		<br><br>

		

		<!-- <script src="js/jquerymin.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php 
	}
	?>
</body>
</html>