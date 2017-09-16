<!DOCTYPE html>
<html lang="es">
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/019.jpg">
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
		<br><br>
		<div class='row '> <!--fila 2-->
			<div class="col-sm-3 ">
			</div>
			<div class="col-xs-12 col-sm-6 ">		
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
					<a href="nuevo_usu.php">Registrate aquí</a><h4>Si no tienes una cuenta! .    volver al  <a href="index.php">Inicio</a></h4>
					</div>
					</div>
					</div>    
				</form>
			</div>
			<div class="col-sm-3 ">
			</div>

		<div class='row'>
			<?php include('footer.php'); ?>
		</div>

		</div> <!--fin container-->

		<script src="js/jquerymin.js"></script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>