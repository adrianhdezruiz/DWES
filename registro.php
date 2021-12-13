  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

    <form  method="post" action="upload.php" enctype="multipart/form-data">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre"><br>

      <label for="apellido">Apellido</label>
      <input type="text" name="apellido"><br>

      <label for="telefono">Telefono</label>
      <input type="text" name="telefono"><br>

      <label for="usuario">Usuario</label>
      <input type="email" name="usuario"><br>

      <label for="contrasena">Contraseña</label>
      <input type="password" name="contrasena" required><br>

      <label for="nacionalidad">Nacionalidad</label>
      <select name="nacionalidad">
        <option value="ES">España</option>
        <option value="Otro" selected="selected">Extranjero</option>
      </select><br>

      <label for="sexo">Sexo</label>
      <input type="radio" name="sexo" value="m">Hombre
      <input type="radio" name="sexo" value="h">Mujer
      <br>
      <br>

    <label for="">Foto</label>
    <input type="file" name="uploadedFile">

    <input type="submit" name="submit" value="Registrarse">
  </form>
  </body>
  </html>
