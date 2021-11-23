<?php

include ('dbconnection.php');

$sql="SELECT * FROM agenda";
$stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$stmt->execute();
$listaUsuarios = $stmt-> fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>
<body>
  <table border="1">
    <tr>
      <td>Id</td>
      <td>Nombre</td>
      <td>Telefono</td>
      <td>Fecha modificacion</td>
      <td>Apellido</td>
      <td>Username</td>
      <td>Nacionalidad</td>
      <td>Sexo</td>
      <td>Edit</td>
    </tr>
    <?php foreach ($listaUsuarios as $usuarios) {
       echo "<tr>";
        foreach ($usuarios as $columna=> $data) {
          if ($columna <> "password") {
            echo "<td>".$data."</td>";
          }
        }
    ?>
      <td><a href="?id=<?= $usuarios['id'] ?>"> Editar</a><a href="?id=<?= $usuarios['id'] ?>"> Ver</a><a href="?id=<?= $usuarios['id'] ?>"> Borrar</a></td>;



    <?php

      echo "</tr>";
    }
     ?>



  </table>
</body>
</html>
