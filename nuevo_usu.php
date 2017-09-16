<!DOCTYPE html>
<html>
<head> 
<link rel="shortcut icon" type="image/x-icon" href="img/logo-header.png">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SIIPUC</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
</head>
<body>
	<div  class="container"> <!-- inicio contenedor-->
		<div  class='row'><!-- fila 1-->
			<?php include('encabezado.php'); ?>
		</div> <!--fin fila 1 -->

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
				<div class="col-xs-12 col-sm-6  ">	
							<div style="margin-bottom: 25px" class="col-xs-12 input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario" required>                                  
					</div>
							
							<div style="margin-bottom: 25px" class="col-xs-12 input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
					</div>
				</div>
							<div class="form-group">                                      
								
									<button id="btn-signup" type="submit" class="col-xs-12 btn btn-success"><i class="icon-hand-right"></i>Registrar</button> 
								
							</div>
						</form>
						
					</div>
				
				<div class="col-sm-3 ">
					<h4>volver al  <a href="index.php">Inicio</a></h4>
			</div>
			</center>
		</div> <!--fin fila 2-->
		<div class='row'>
			<?php include('footer.php'); ?>
		</div>

		</div> <!--fin container-->

		<script src="js/jquerymin.js"></script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>