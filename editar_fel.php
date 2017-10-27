<?php 

$Nro_folio =$_POST['Nro_folio'];
$id =$_POST['id'];
$nombre =$_POST['nombre'];
$nacimiento =$_POST['nacimiento'];
$EC =$_POST['EC'];
$telefono =$_POST['telefono'];
$direccion =$_POST['direccion'];
$barrio =$_POST['barrio'];

session_start();

$sql = "update tb_feligres set Nro_folio= '$Nro_folio', id= '$id', nombre='$nombre', 
nacimiento='$nacimiento', EC='$EC', telefono='$telefono', direccion='$direccion', barrio='$barrio', where Nro_folio='$_SESSION[Nro_folio]'";

include("config.php");

echo "<script>location.href='feligrez.php'</script>";
?>
