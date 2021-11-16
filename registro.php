<?php

include 'dbconnection.php';
 ?>
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <form  method="post">
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
        <option value="España">Español</option>
        <option value="Otro" selected="selected">Extranjero</option>
      </select><br>

      <label for="sexo">Sexo</label>
      <input type="radio" name="sexo" value="m">Hombre
      <input type="radio" name="sexo" value="h">Mujer

    <input type="submit" name="submit" value="Enviar">
  </form>
  <?php

    function filtrado($datos){
      $datos= trim($datos);
      $datos= stripslashes($datos);
      $datos= htmlspecialchars($datos);
      return $datos;
    }

    if (isset($_POST['submit'])&& $_SERVER["REQUEST_METHOD"]=="POST") {

      $nombre=filtrado($_POST['nombre']);
      $apellido=filtrado($_POST['apellido']);
      $telefono=filtrado($_POST['telefono']);
      $usuario=filtrado($_POST['usuario']);
      $contrasena=filtrado($_POST['contrasena']);
      $nacionalidad=filtrado($_POST['nacionalidad']);
      $sexo=filtrado($_POST['sexo']);

      //Insertar en la base de datos
      $sql="INSERT INTO agenda (nombre,telefono,invitado_id,apellido,username,password,nacionalidad,sexo) VALUES ('$nombre','$telefono',1,'$apellido','$usuario','$contrasena','$nacionalidad','$sexo')";

      $conn->exec($sql);
      $ultimo_id=$conn->lastInsertId();

      //Cierre base de datos
      

      //Si el registro ha sido satisfactorio mostrar $datos
      if (isset($ultimo_id)) {

      ?>

      <h2>Mostrar datos enviados</h2>
      nombre= <?php isset($nombre)?print $nombre:""?><br>
      apellido=<?php isset($apellido)?print $apellido: ""?><br>
      telefono=<?php isset($telefono)?print $telefono:""?><br>
      usuario=<?php isset($usuario)?print $usuario:""?><br>
      contraseña=<?php isset($contrasena)?print $contrasena: ""?><br>
      nacionalidad=<?php isset($nacionalidad)?print $nacionalidad: ""?><br>
      sexo=<?php isset($sexo) && $sexo=='h' ?print "Hombre": "Mujer";?><br>

    <?php } else {
      echo "Se ha producido un error";
    }
}
    ?>




  </body>
  </html>
