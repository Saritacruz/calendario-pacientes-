<?php
include('../config/config.php');
include('paciente.php');
$p = new paciente();
$data = mysqli_fetch_object($p->getOne($_GET['id']));


if (isset($_POST) && !empty($_POST)){
 
  $update = $p->update($_POST);
  if ($update){
    $error = '<div class="alert alert-success" role="alert">Paciente modificado correctamente</div>';
  }else{
    $error = '<div class="alert alert-danger" role="alert" > Error al modificar un paciente </div>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php') ?>

<?php
    if (isset($error)){
      echo $error;
    }
    ?>
<!-- CREAN FORMULARIO -->

<div class="container">
<form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="nombres" id="nombres"   class="form-control" value="<?= $data->nombres ?>" >
    <input type="hidden" name="id" id="id"   class="form-control" value="<?= $data->id ?>" >
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"  class="form-control" value="<?= $data->apellidos ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Cedula</label>
    <input type="text" name="cedula" id="cedula" class="form-control"  value="<?= $data->cedula ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular" class="form-control" value="<?= $data->celular ?>" >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Edad</label>
    <input type="text" name="edad" id="edad" class="form-control" value="<?= $data->edad ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Motivo de consulta </label>
    <input type="text" name="motivo" id="motivo" class="form-control" value="<?= $data->motivo ?>" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Correo</label>
    <input type="email" name="email" id="email" class="form-control" value="<?= $data->email ?>" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Direccion de residencia del paciente</label>
    <input type="text" name="residencia" id="residencia" class="form-control" value="<?= $data->residencia ?>" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Sexo</label>
    <input type="text" name="sexo" id="sexo" class="form-control" value="<?= $data->sexo ?>" >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Estado civil</label>
    <input type="text" name="estadocivil" id="estadocivil" class="form-control" value="<?= $data->estadocivil ?>" >
  </div>
  <div class="col-6">
  <label for="inputAddress2" class="form-label">Patologia</label>
    <textarea  class="form-control" name="patologia" id="patologia" cols="30" rows="10"><?= $data->patologia ?></textarea>
  </div>
  <div class="col-12">
    <button  class="btn btn-success">Modificar</button>
  </div>
</form>
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>