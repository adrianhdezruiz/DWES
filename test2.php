<?php
require_once('persona2.php');

$persona = new Persona2('Fernando','Gatian','26');
echo $persona->saludar();


/*ERROR MODIFICAR ATRIBUTO PRIVADO OBJETO
$persona->nombre="Adrian";
echo $persona->saludar();*/



 ?>
