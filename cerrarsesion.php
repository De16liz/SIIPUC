<?php
  session_start();
  unset($_SESSION["nombre"]); 
  session_destroy();
  
 echo  "<script>location.href='index.php'</script>";


 /*
if (isset($_SESSION["nombre"])){
  header("Location: index.php");

}else{
  //echo "debe iniciar sesion";
}
*/
// echo "<meta http-equiv='refresh' content='0;url=index.php'>";

  //header("Location: index.php");
  //exit;

 // if (ini_get("session.use_cookies")) 
//{
  //$params = session_get_cookie_params();
  //setcookie(session_name(), '', time() - 42000,
    //  $params["path"], $params["domain"],
      //$params["secure"], $params["httponly"]);
//}
 
?>