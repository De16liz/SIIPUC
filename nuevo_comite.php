<?php
include('config.php');
$tipo_comite=$_POST['tipo_comite'];
$eventos=$_POST['eventos'];
$sql="INSERT INTO tb_comites (tipo_comite, eventos) VALUES ('$tipo_comite','$eventos')";
$resultado = $conexion->query( $sql );
if ($conexion-> affected_rows >0){
	echo "<script> alert ('Comite Registrado Exitosamente') </script>";
	echo "<script>location.href='desktop.php'</script>";
}
else
{
echo "<script> alert ('Verifique los datos del usuario') </script>";
	}
?>