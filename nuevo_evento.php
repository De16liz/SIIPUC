<?php
include('config.php');
$descripcion=$_POST['descripcion'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO tb_eventos (descripcion, fecha) VALUES ('$descripcion','$fecha')";
$resultado = $conexion->query( $sql );
if ($conexion-> affected_rows >0){
	echo "<script> alert ('Evento Registrado Exitosamente') </script>";
	echo "<script>location.href='desktop.php'</script>";
}
else
{
echo "<script> alert ('Verifique los datos del usuario') </script>";
	}
?>