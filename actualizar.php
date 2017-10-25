<?php 

$id=$_POST['id'];
$Nro_licencia=$_POST['Nro_licencia'];
$Nombre=$_POST['Nombre'];
$correo=$_POST['correo'];
$nacimiento=$_POST['nacimiento'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$barrio=$_POST['barrio'];
include ('funciones.php');//llamo la funcion
session_start();

$sql = "update tb_pastor set id= '$id', Nro_licencia='$Nro_licencia', Nombre= '$Nombre', correo='$correo' ,nacimiento='$nacimiento', telefono='$telefono', direccion='$direccion', barrio='$barrio', where id='$_SESSION[id]'";
//echo $sql;
//indico cuales seran los campos a modificar con sus respectivos valores siguiendo con los parametros que se asigno en la funcion de actualizar
include("config.php");
$tabla = "tb_pastor";
$campos = " id, Nro_licencia, Nombre, correo, nacimiento, telefono, direccion, barrio";
$valores = " '$id', '$Nro_licencia', '$Nombre', '$correo', '$nacimiento', '$telefono', '$direccion', '$barrio' ";
$condicion = "id='$_SESSION[id]'";

$a= actualizar($tabla, $campos, $valores, $condicion);
//echo $a;

echo "<script>location.href='index.php'</script>";//me retorna a la pantalla inicial


?>