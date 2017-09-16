
<div class="col-xs-12" id="nav">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      
      <ul class="nav navbar-nav">
        <li class="active"><a href="pdf/MISIÓN.pdf">IPUC</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Secretaria
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pastor.php">Pastor/Ministro</a></li>-
            <li><a href="">Feligreses</a></li>-
            <li><a href="">Comites</a></li> 
          </ul>
        </li>
       
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Eventos</a></li>
            <li><a href=""></a></li>
            <li><a href="#"></a></li> 
          </ul>
        </li>
         
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="pdf/formato membresia.docx">Formatos para llenar</a></li>
            <li><a href=""></a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Asignar perfil</a></li>
            <li><a href="">cambiar contraseña</a></li>
            <li><a href="">Cerrar sesion</a></li>
            <li><a href="">Salir</a></li> 
          </ul>
        </li>
         <div class="navbar-header">
        <a class="navbar-brand" href=" "></a>
      </div>
      </ul>
       <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['usuario']; ?></a></li>
            <li><a href="cerrarsesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
          </ul>
    </div>
  </nav>
</div>