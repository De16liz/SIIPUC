<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_siipuc";

$conexion= mysqli_connect ($servidor, $usuario, $clave ,$bd);
$resultado= $conexion->query($sql);
?>