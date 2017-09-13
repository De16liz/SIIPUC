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
			
			<h1>Registrarme</h1>
				<div class="col-xs-12 col-sm-6 ">	
				<form  action="nuevo.php" method="POST" autocomplete="off">
							
		
							<div style="margin-bottom: 25px" class="input-group">
								<label for="usuario" class="col-md-3 control-label"></label>
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="nombres" placeholder="Digite su nombre" value="" required="">
								
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<label for="usuario" class="col-md-3 control-label"></label>
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" class="form-control" name="apellidos" placeholder="Digite sus Apellidos" value="" required="">
								</div>
							</div>

							<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="digite su usuario" required>                                  
					</div>
							
							<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="password" type="password" class="form-control" name="password" placeholder="ingrese su contraseña" required>
					</div>
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i>Registrar</button> 
								</div>
							</div>
						</form>
						<h4>volver al  <a href="index.php">Inicio</a></h4>
					</div>
				
				<div class="col-sm-3 ">
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