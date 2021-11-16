<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Usuario</title>
</head>
<body>
  <br>

  <form method="post">
  <!--Primera y segunda fila-->
  <div class="container">
  <div class="row">
    <div class="col align-self-start">
      <label for="identificacion">NºIdentificación (DNI,NIE,Pasaporte)</label>
      <input type="text" name="identidicacion" class="form-control">
      <br>
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="col align-self-center">

      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
      <br>
      <label for="contraseña">Contraseña</label>
      <input type="password" name="contraseña" class="form-control" required>
    </div>
    <div class="col align-self-end">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" class="form-control" required>
      <br>
      <label for="telefono">Telefono</label>
      <input type="text" name="apellido" class="form-control" required>
    </div>
  </div>
</div>
<!-- Tercera fila-->
    <br>
    <div class="container">
    <div class="row">
      <div class="d-grid gap-2">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" class="form-control" required placeholder="pe calle Juan Carlos I">
      </div>
    </div>
  </div>

<!--Cuarta fila-->
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      <br>
      <label for="ciudad">Ciudad / Provincia</label>
      <select class="form-select" name="ciudad">
        <option selected>Selecciona...</option>
      </select>
    </div>
    <div class="col-2 align-self-center">
      <br>
      <label for="cp">Codigo Postal</label>
      <input type="text" name="cp" class="form-control">
    </div>
    <div class="col align-self-end">
      <br>
      <label for="pais">Pais</label>
      <select class="form-select"  name="pais">
        <option selected>Selecciona...</option>
      </select>
    </div>
  </div>
</div>

<!--Quinta fila-->

<div class="container">
  <div class="row">
    <div class="col align-self-start">
      <br>
      <label for="usuario">Tipo</label>
      <select class="form-select"  name="usuario">
        <option selected>Selecciona...</option>
        <option value="lector">Lector</option>
        <option value="socio">Socio</option>
        <option value="dotador">Dotador</option>
      </select>

    </div>
    <div class="col align-self-center">
      <br>
      <label for="estado">Estado</label>
      <select class="form-select"  name="estado">
        <option selected>Selecciona...</option>
      </select>
    </div>
    <div class="col align-self-center">
      <br>
      <label for="ocupacion">Ocupacion</label>
      <input type="text" name="ocupacion" class="form-control">
    </div>
    <div class="col align-self-end">
      <label for="foto">Foto</label>
      <input type="button" name="foto" value="Examinar">
      <?php if (!isset($_POST['foto'])) {
        echo "<br> No se han seleccionado archivos.";
      } ?>
    </div>
  </div>
</div>

<!--Sexta fila-->
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      <br>
      <input type="submit" name="" value="Enviar" class="btn btn-primary">
        </form>
    </div>
  </div>
</div>
</body>
<script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
