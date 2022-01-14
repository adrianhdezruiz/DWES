<?php

/**
 *
 */
class Persona2
{

  //Atributos
  private $nombre;
  private $apellido;
  private $edad;

  //Constructor

  public function __construct($nombre,$apellido,$edad){
    echo "Se acaba de crear el objeto persona"."<br>";
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->edad=$edad;
  }

  public function __destruct(){
    echo "Objeto destruido";
  }

  //Metodos
  public function saludar(){
    return "Hola soy ".$this->nombre." ".$this->apellido." y tengo ".$this->edad." años"."<br>";
  }
}


 ?>
