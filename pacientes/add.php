<?php
include('../config/config.php');
include('paciente.php');

if (isset($_POST) && !empty($_POST)){
  /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */

  $data= new paciente(); /* LLAMO A MI LIBRO DE RECETAS */


  $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
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
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
<!-- CREAN FORMULARIO -->
<div class="container">


<form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="nombres" id="nombres"   class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Cedula</label>
    <input type="text" name="cedula" id="cedula" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular" class="form-control"  >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Edad</label>
    <input type="text" name="edad" id="edad" class="form-control">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Motivo de consulta </label>
    <input type="text" name="motivo" id="motivo" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Correo</label>
    <input type="email" name="email" id="email" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Direccion de residencia del paciente</label>
    <input type="text" name="residencia" id="residencia" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Sexo</label>
    <input type="text" name="sexo" id="sexo" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Estado civil</label>
    <input type="text" name="estadocivil" id="estadocivil" class="form-control"  >
  </div>
  <div class="col-6">
  <label for="inputAddress2" class="form-label">Patologia</label>
    <textarea  class="form-control" name="patologia" id="patologia" cols="30" rows="10"></textarea>
  </div>
  <div class="col-12">
    <button  class="btn btn-success">Registrar</button>
  </div>
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>