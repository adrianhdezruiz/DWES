<?php
require_once('persona.php');

$persona = new Persona('Adrian','Hernandez','19');

/*$persona->nombre='Adrian';
$persona->apellido='Hernandez';
$persona->edad='19';*/


//echo $persona->nombre." ".$persona->apellido." ".$persona->edad;
echo $persona->saludar();

$persona2 = new Persona('Fernando','Gaita',26);
echo $persona2->saludar();

//Destruir objeto persona

unset($persona);

 ?>
