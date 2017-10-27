<?php 
session_start();
if (!isset($_SESSION['usuario'])) 
{
echo "<script>location.href='index.php'</script>";
} else{

?>
<?php include( "funciones.php" ); ?>

<!-- Esto es para la tabla de pastor. -->

<html>
	<head>
		<?php include('includes/headgo.php'); ?>
		<title>Ministros/pastor</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet"  href="css/fonts.css">
		<script src="js/jssor.slider.min.js"></script>
	
	</head>

	<body>
	<div class='col-xs-12 col-md-4 col-lg-4 ' >
					
	</div>
	<div class='col-xs-12 col-md-4 col-lg-4 ' >
		<img src="img/ipuc.png">			
	</div>
	<div class='col-xs-12 col-md-4 col-lg-4 ' >
					
	</div>
	
		<main>
		<article>
		<?php  echo imprimir_menus();  ?>
		<br>

		
		<center>
		<?php 

$sql= "SELECT * FROM tb_feligres";
	include ('config.php');
	$resultado= $conexion->query($sql);
?>
<div class="panel-body">
	<div class="table table-responsive">
	<table class="table table-responsive"> 
	<thead>
		<tr>
		<th>Folio</th>		       
		<th>ID</th>
       	<th>Nombre</th>
	    <th>Fecha de nacimiento</th>
	    <th>Estado civil</th>
	    <th>Telefono</th>
	    <th>Direccion</th>
	    <th>Barrio</th>
	    <th>Editar</th>
		</tr>
	</thead>
	<?php
    while ($row=mysqli_fetch_row($resultado))
    { 
    ?> 
      <tr>
        <td><?php echo $row['0']; ?></td>
        <td><?php echo $row['1']; ?></td>
        <td><?php echo $row['2']; ?></td>
        <td><?php echo $row['3']; ?></td>
        <td><?php echo $row['4']; ?></td>
        <td><?php echo $row['5']; ?></td>
        <td><?php echo $row['6']; ?></td>
        <td><?php echo $row['7']; ?></td>
        <td><a  class="btn btn-success"  role="button" href="editarfel.php?Nro_folio=<?php echo $row['0']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr> 
        <?php 
    
        
    }?>
    </table>
		<!--//<?php 
			//echo traer_informacion( "tb_feligres" ); //Trae los datos. 
		?>//-->
		</center>
		</main>
		</article>
<?php include('includes/footer.php'); ?>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/headroom.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
<?php 
	}
	?>
	</body>

</html>