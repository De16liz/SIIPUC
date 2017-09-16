<?php
session_start();
include('config.php');
$usuario= $_POST['usuario'];
$password= $_POST['password'];

$sql="SELECT usuario FROM tb_usuarios WHERE usuario='".$usuario."' AND password='".$password."'" ;
		
		/*despues de consultar recupera los datos que trajo la variable sql  */
		$resultado = $conexion->query( $sql );
 		/*pregunta el numero de filas traido en la variable resultado y si exactamente igual a 0 muestra un mensaje de alerta si no inicia sesion con la variable $usuario y enlaza a chat.php*/
		if (mysqli_num_rows($resultado)==0) 
		{
				echo "<script text='text/javascript'>;
						alert('el usuario o la contraseña no coinsiden');
						window.location= 'iniciar.php';
					  </script>";
		}else{
					$_SESSION['usuario']=$usuario;
					header("location: desktop.php");
		}
?>