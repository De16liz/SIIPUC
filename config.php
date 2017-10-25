 <?php  
/*conexion a base de datos*/
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_siipuc";

$conexion= mysqli_connect ($servidor, $usuario, $clave ,$bd);
//$resultado= $conexion->query($sql);
//$conexion=  new mysqli ('localhost', 'root', '' ,'bd_siipuc');
//if ($conexion->connect_error) {
	//die('Error en la conexion' . $conexion->connect_error);
//}
$sn_pruebas = "n";
?>