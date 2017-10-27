<?php
include('config.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$nacimiento=$_POST['nacimiento'];
$EC=$_POST['EC'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$barrio=$_POST['barrio'];
$sql="INSERT INTO tb_feligres (id, nombre, nacimiento, EC, telefono, direccion, barrio) VALUES ('$id', '$nombre','$nacimiento', '$EC', '$telefono', '$direccion', '$barrio')";
//echo $sql;
$resultado = $conexion->query( $sql );
if ($conexion-> affected_rows >0){
	echo "<script> alert ('Usuario Registrado Exitosamente') </script>";
	echo "<script>location.href='desktop.php'</script>";
}
else
{
echo "<script> alert ('Verifique los datos del usuario') </script>";
	}
?>