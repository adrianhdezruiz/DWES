<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
      <label for="">Subir archivo</label>
      <input type="file" name="uploadedFile">
      <br>
      <input type="submit" name="uploadBtn" value="Enviar foto">
  </form>

  <?php

if (isset($_POST['uploadBtn'])) {
  $nombre_archivo=$_FILES['uploadedFile']['name'];
  $nombre_archivo_temporal=$_FILES['uploadedFile']['tmp_name'];
  $uploadFileDir="../alumno/images/";
  $dest_path=$uploadFileDir.$nombre_archivo;

  if (move_uploaded_file($nombre_archivo_temporal,$dest_path)) {
    echo "Archivo enviado";
  }else {
    echo "ERROR";
  }
}

   ?>
</body>
</html>
