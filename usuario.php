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
    <br>
    <div class="container">
    <div class="row">
      <div class="d-grid gap-2">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" class="form-control" required placeholder="pe calle Juan Carlos I">

      </div>
      <div class="col align-self-center">

</body>
<script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
