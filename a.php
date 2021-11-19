<?php
include 'dbconnection.php'


$stmt=$conn->prepare("SELECT * FROM agenda WHERE id=?");

$stmt->bind_param("1", $id);
$id=4;
$stmt->execute();

$user_view = $stmt-> fetch_All();
var_dump($user_view);

 ?>
