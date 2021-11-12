<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col">
      <form method="post">

        <img src="https://leonautas.files.wordpress.com/2019/10/biblioteca-logo.png" alt="">
        <h2 class="display-6">Inicion sesión</h2>

        <label for="email">Direccion de e-mail</label>
        <p></p>
        <input type="email" class="form-control" name="email" placeholder="correo electronico" required>

        <p></p>
        <label for="contraseña">Contraseña</label>
        <p></p>
        <input type="password" class="form-control" name="contraseña" value="contraseña" placeholder="contraseña" required>

        <p></p>
        <div class="d-grid gap-2">
          <button class="btn btn-warning" type="button">Iniciar sesion</button>
        </div>
        <br>
        <p>¿Eres nuevo?</p>
        <div class="d-grid gap-2">
          <button class="btn btn-outline-secondary" type="button">Crea tu cuenta</button>
        </div>

      </form>
    </div>
    <div class="col">

    </div>
  </div>
</div>
<script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
