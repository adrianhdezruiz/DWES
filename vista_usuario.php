<?php
include('dbconnection.php');
$id_user=$_GET['id'];

$sql="SELECT * FROM agenda WHERE id=:identificador";
$stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));


$stmt->execute(array(':identificador'=> $id_user));
$user_view = $stmt-> fetchAll(PDO::FETCH_ASSOC);


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
  <table border="2">
    <tr>
      <td>Id</td>
      <td><?= $user_view[0]["id"] ?></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><?= $user_view[0]["nombre"] ?></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><?= $user_view[0]["apellido"] ?></td>
    </tr>
    <tr>
      <td>Telefono</td>
      <td><?= $user_view[0]["telefono"] ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?= $user_view[0]["username"] ?></td>
    </tr>
    <tr>
      <td>Nacionalidad</td>
      <td><?= $user_view[0]["nacionalidad"] ?></td>
    </tr>
    <tr>
      <td>Sexo</td>
      <td><?= $user_view[0]["sexo"] ?></td>
    </tr>
  </table>
</body>
</html>
