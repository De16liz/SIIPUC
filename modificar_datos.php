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

<div class="container">
  <div class="row">
    <div class="col-sm-3 ">
    
    </div>
    <div class="col-xs-12 col-sm-6 well">
    <center>
<?php 

	$id = $_GET['id'];
	session_start();
	$_SESSION['id']=$id;
	$sql = "select * from tb_pastor where id = '$id'";
	include("config.php");
	$resultado= $conexion->query($sql);
	$row = mysqli_fetch_assoc($resultado);

?>
<form action="actualizar.php" method="POST">
<div class="form-group">
	<label for="numero id">Documento</label>
	<input type="text" class="form-control" name="id" value="<?php echo  $row['id']; ?>" required>
</div>	

<div class="form-group">
	<label for="nombre">Licencia</label>
	<input type="text" class="form-control" name="Nro_licencia" value="<?php  echo $row['Nro_licencia'];?>" required">
</div>			

<div class="form-group">
	<label for="nombre">Nombres Completo</label>
	<input type="text" class="form-control" name="Nombre" value="<?php  echo $row['Nombre'];?>" required">
</div>

<div class="form-group">
	<label for="nombre">Correo</label>
	<input type="text" class="form-control" name="correo" value="<?php  echo $row['correo'];?>" required">
</div>
<div class="form-group">
	<label for="apellido">Fecha nacimiento</label>
	<input type="text" class="form-control" name="nacimiento" value="<?php  echo $row['nacimiento'];?>" required>
</div>

<div class="form-group">
	<label for="nombre">Telefono</label>
	<input type="text" class="form-control" name="telefono" value="<?php  echo $row['telefono'];?>" required">
</div>

<div class="form-group">
	<label for="nombre">Direccion</label>
	<input type="text" class="form-control" name="direccion" value="<?php  echo $row['direccion'];?>" required">
</div>

<div class="form-group">
	<label for="nombre">barrio</label>
	<input type="text" class="form-control" name="barrio" value="<?php  echo $row['barrio'];?>" required">
</div>
<button type="submit" class="btn btn-default">Actualizar</button>
</form>
<div class='col-xs-12 col-md-4 col-lg-4 ' >
					<h4>volver <a href="ministro.php">atras</a> </h4>
			</div>
		<div class='col-xs-12 col-md-4 col-lg-4 ' id="cabeza">
			<h4>volver al  <a href="index.php">Inicio</a></h4>
		</div>
					
		<div class='col-md-4 col-lg-4 ' >	
			
		</div>
<?php include('includes/footer.php'); ?>
</center>
</div>
</div></div>
</body>
</html>

