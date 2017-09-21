<?php
include('config.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

	$sql="INSERT INTO tb_usuarios (nombres, apellidos, usuario, password) VALUES ('$nombres','$apellidos','$usuario','$password')";
	$resultado = $conexion->query( $sql );
	if ($conexion-> affected_rows >0){
		echo "<script> alert ('Usuario Registrado Exitosamente') </script>";
		echo "<script>location.href='index.php'</script>";
	}
	else
	{
	echo "<script> alert ('Verifique los datos del usuario') </script>";
	}
?>