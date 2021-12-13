<?php

include ('dbconnection.php');
//if (isset($_POST['submit']){
  //$id_user=$_GET['id'];
  $id_user=$_GET['id'];
//}

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
    <?php
    //Obtener todos los datos de la persona
    $sql="SELECT * FROM agenda WHERE id=:identificador";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));


    $stmt->execute(array(':identificador'=> $id_user));
    $user_view = $stmt-> fetchAll(PDO::FETCH_ASSOC);

    //----------------------------------------------//

    //Obtener datos paises
    $sql="SELECT iso,nombre FROM paises";
    $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));


    $stmt->execute();
    $list_pais = $stmt-> fetchAll();


     ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" >

      <input type="hidden" name="usuarioId" value="<?= $user_view[0]["id"];  ?>">

      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="<?= $user_view[0]["nombre"] ?>"><br>

      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" value="<?= $user_view[0]["apellido"] ?>" ><br>

      <label for="telefono">Telefono</label>
      <input type="text" name="telefono"value="<?= $user_view[0]["telefono"] ?>"><br>
6
      <label for="usuario">Usuario</label>
      <input type="email" name="usuario"value="<?= $user_view[0]["username"] ?>"><br>

      <label for="contrasena" >Contraseña</label>
      <input type="password" name="contrasena" value="<?= $user_view[0]["password"] ?>"><br>

      <label for="nacionalidad">Nacionalidad</label>
      <select name="nacionalidad">
        <?php foreach ($list_pais as $pais) {

         ?>
        <option value="<?= $pais[0]; ?>"> <?= $pais[1]; ?></option>

        <?php  }?>
      </select><br>

      <label for="sexo">Sexo</label>
      <input type="radio" name="sexo" value="m">Hombre
      <input type="radio" name="sexo" value="h">Mujer

    <input type="submit" name="submit" value="Actualizar usuario">
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
      $hash=password_hash($contrasena,PASSWORD_DEFAULT);


      $data=[
        'nombre'=>$nombre,
        'telefono'=>$telefono,
        'apellido'=>$apellido,
        'username'=>$username,
        'contrasena'=>$hash,
        'nacionalidad'=>$nacionalidad,
        'sexo'=>$sexo
      ];
      //Insertar en la base de datos
      //$sql="INSERT INTO agenda (nombre,telefono,apellido,username,password,nacionalidad,sexo) VALUES ('$nombre','$telefono','$apellido','$usuario','$hash','$nacionalidad','$sexo')";
      $sql="UPDATE agenda SET nombre=:nombre, telefono=:telefono, apellido=:apellido, username=:username, password=:contrasena, nacionalidad=:nacionalidad, sexo=:sexo WHERE id=$id_user";
      $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $stmt->execute($data);

      //:nombre,:telefono,:apellido,:username,:contrasena,:nacionalidad,:sexo

      //$conn->exec($sql);
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
      sexo=<?php isset($sexo) && $sexo=='h' ?print "Hombre": print "Mujer";?><br>

    <?php } else {
      echo "Se ha producido un error";
    }
}
    ?>




  </body>
  </html>
