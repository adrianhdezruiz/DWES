<?php
include ('dbconnection.php');

$sql="SELECT password FROM agenda WHERE id=:identificador";
$stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$id=4;
$stmt->execute(array(':identificador'=> 4));
$user_view = $stmt-> fetchAll();


echo "<br>";
$stmt->execute(array(':identificador'=> 3));
$user_view = $stmt-> fetchistaMarcas.comprobarMarca("Ford");All();

$midbHash= $user_view[0]["password"];
$micontrasena='sal123';





/*if (password_verify($micontrasena, $midbHash) {
  echo "Acceso autorizado";
}else {
  echo "Acceso denegado";
}*/




 ?>
