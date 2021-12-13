<?php
include 'dbconnection.php';

if (isset($_POST['submit'])) {
  $nombre_archivo=$_FILES['uploadedFile']['name'];
  $nombre_archivo_temporal=$_FILES['uploadedFile']['tmp_name'];
  $uploadFileDir="../alumno/images/";
  $dest_path=$uploadFileDir.$nombre_archivo;
  $fileNameCmps=explode(".",$nombre_archivo);
  $fileExtension=strtolower(end($fileNameCmps));

  $allowedfileExtensions = array('jpg', 'gif', 'png');
  if (in_array($fileExtension, $allowedfileExtensions)) {

    if (move_uploaded_file($nombre_archivo_temporal,$dest_path)) {
      echo "Archivo enviado";
    }else {
      echo "ERROR";
    }
  }else {
    echo "El archivo tiene una extension no valida";
  }
}
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
        'sexo'=>$sexo,
        'foto' =>$nombre_archivo,
      ];
      //Insertar en la base de datos
      //$sql="INSERT INTO agenda (nombre,telefono,apellido,username,password,nacionalidad,sexo) VALUES ('$nombre','$telefono','$apellido','$usuario','$hash','$nacionalidad','$sexo')";
      $sql="INSERT INTO agenda (nombre,telefono,apellido,username,password,nacionalidad,sexo,foto) VALUES (:nombre,:telefono,:apellido,:username,:contrasena,:nacionalidad,:sexo,:foto)";
      $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
      $stmt->execute($data);


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
      nombre= <?php isset($nombre_archivo)?print $nombre_archivo:""?><br>

    <?php } else {
      echo "Se ha producido un error";
    }
}
    ?>
