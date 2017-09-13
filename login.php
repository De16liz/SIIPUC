<meta charset="UTF-8">
<?php
$usuario= $_POST['usuario'];
$password= $_POST['password'];

$sql="select * from tb_usuarios where usuario = '$usuario'";
include('config.php');
$row=mysqli_fetch_row($resultado);

	if($row[2]==$usuario)
	{
		if($row[3]==$password)
		{
			session_start();
			$_SESSION['nombre']= $row[0];



			//if(isset($_SESSION['nombre']) = $row[2];= $row[2];
			echo  "<script>location.href='desktop.php'</script>";
		}
		else
		{
			echo "usuario o contraseña incorrecta";
		}
	}
	else
	{
		echo "usuario no existe";
	}
?>