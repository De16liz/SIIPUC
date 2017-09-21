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
			<!-- <div  class="container">  inicio contenedor -->
		<div class='row '> <!--fila 2-->
		<center>
		<div class="col-sm-3 ">
		</div>
			<div class="col-xs-12"><h1>Registro</h1></div>
			
				<div class="col-xs-12 col-sm-6 ">	
				<form  action="nuevo.php" method="POST" autocomplete="off">
							
		
							<div style="margin-bottom: 25px"  class="col-xs-12 input-group ">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="nombres" placeholder="Digite Nombre" value="" required="">
								
							</div>

							<div style="margin-bottom: 25px"  class="col-xs-12 input-group">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" class="form-control" name="apellidos" placeholder="Digite Apellidos" value="" required="">
								</div>
				</div>
				<div class="col-xs-12 col-sm-6 ">	
											
		
							<div style="margin-bottom: 25px"  class="col-xs-12 input-group ">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario" required>
								
							</div>

							<div style="margin-bottom: 25px"  class="col-xs-12 input-group">
								
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="password" type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
								</div>
				</div>			
							<div class="form-group">                                      
								
									<button id="btn-signup" type="submit" class="col-xs-12 btn btn-success"><i class="icon-hand-right"></i>Registrar</button> 
								
							</div>
							<div class="col-sm-3 ">
					<h4>Volver al  <a href="index.php">Inicio</a></h4>
			</div>
						</form>
						
					</div>
				
				
			</center>
		</div> <!--fin fila 2-->
		<!-- <div class='row'>
			// <?php //include('includes/footer.php'); ?>
		</div> -->

	<!-- </div> fin container -->
			
		</article>
	</main>

		<!-- <script src="js/jquerymin.js"></script>
        <script src="js/bootstrap.min.js"></script> --> 
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<?php } ?>
</body>
</html>