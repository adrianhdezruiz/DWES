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

    $id=1;
    $stmt->execute(array(':identificador'=> $id_user));
    $user_view = $stmt-> fetchAll();

    //Obtener datos paises

     ?>

     
    <input type="submit" name="submit" value="Borrar usuario">

  <?php


      //Insertar en la base de datos
      //$sql="INSERT INTO agenda (nombre,telefono,apellido,username,password,nacionalidad,sexo) VALUES ('$nombre','$telefono','$apellido','$usuario','$hash','$nacionalidad','$sexo')";
      $sql="DELETE FROM agenda WHERE id=$id_user";
      $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $stmt->execute();


      //$conn->exec($sql);


      //Cierre base de datos


      //Si el registro ha sido satisfactorio mostrar $datos


      ?>







  </body>
  </html>
