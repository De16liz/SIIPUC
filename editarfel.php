<!DOCTYPE html>
<html>
<head>
  <title>Siipuc</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-3 ">
    
    </div>
    <div class="col-xs-12 col-sm-6 well">
    <center>
    <?php 

    $Nro_folio=$_GET['Nro_folio'];
    session_start();
    $_SESSION['Nro_folio']=$Nro_folio;

    $sql = " select * from tb_feligres where Nro_folio='$Nro_folio'";
    include('config.php');
    $resultado= $conexion->query($sql);
    $row = mysqli_fetch_row($resultado);
  ?>
<form action='editar_fel.php' method='POST'>
<div class="form-group" >
  <label for="codigo instructor">Numero folio</label>
  <input type="text" class="form-control" name="cod_ficha" value="<?php echo  $row['0']; ?>" required>
</div>
<div class="form-group">
<label for="nombre">Identificacion</label>
  <input type="text" class="form-control" name="descripcion" value="<?php echo  $row['1']; ?>" required>
</div>
<div class="form-group">
<label for="apellido">Nombre</label>
  <input type="text" class="form-control" name="cod_instructor" value="<?php echo  $row['2']; ?>" required  >
</div>
<div class="form-group">
<label for="nompro">Fecha de nacimiento</label>
  <input type="text" class="form-control" name="num_apren" value="<?php echo  $row['3']; ?>"  required >
</div>
<div class="form-group">
<label for="nompro">Estado civil</label>
  <input type="text" class="form-control" name="num_apren" value="<?php echo  $row['4']; ?>"  required >
</div>
<div class="form-group">
<label for="nompro">Telefono</label>
  <input type="text" class="form-control" name="num_apren" value="<?php echo  $row['5']; ?>"  required >
</div>
<div class="form-group">
<label for="nompro">Direccion</label>
  <input type="text" class="form-control" name="num_apren" value="<?php echo  $row['6']; ?>"  required >
</div>
<div class="form-group">
<label for="nompro">Barrio</label>
  <input type="text" class="form-control" name="num_apren" value="<?php echo  $row['7']; ?>"  required >
</div>
<button type="submit" class="btn btn-success">Guardar</button>
<a class="btn btn-success" href="feligrez.php" role="button">Cancelar</a>
</form>
</tr>
</div>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
</body>
</html>
