<?php
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$sql="INSERT INTO tb_usuarios (nombres, apellidos, usuario, password) VALUES ('$nombres','$apellidos','$usuario','$password')";
echo $sql;
// $sql= "INSERT INTO tb_usuarios ";
// $sql .="VALUES ('$nombres','$apellidos','$usuario','$password')";
include('config.php');
if ($conexion-> affected_rows >0){echo "ya guarde";
echo "<script>location.href='index.php'</script>";
}
else
{
	echo"Verifique, por que se duplicaria usuarios";
}
?>