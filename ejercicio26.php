<?php

class Persona {
  public $nombre;
  private $edad;

  function __construct ($nombre, $edad) {
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  // public function asignarNombre ($nuevoNombre) {
  //   $this->nombre = $nuevoNombre;
  // }

  public function imprimirNombre () {
    echo "<br>".$this->nombre;
  }

  public function mostrarEdad () {
    echo "<br>".$nuevaEdad = $this->edad;
  }

}

$objHumano = new Persona("lulu", 12);
$objHumano->imprimirNombre();
$objHumano->mostrarEdad();

?>