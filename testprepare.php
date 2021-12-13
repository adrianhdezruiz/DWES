<?php

include('dbconnection.php');

$micontrasena = '123$-';

$sql = "SELECT password FROM agenda WHERE id = :identificador";
$stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

$stmt->execute(array(':identificador' => 33));
$user_view = $stmt->fetchAll();

if(password_verify($micontrasena, $user_view[0]["password"])) {
    print "Acceso autorizado";
} else {
    print "Acceso denegado";
}

 ?>
