<?php

class Persona {
  public $nombre;
  private $edad;

  public function asignarNombre ($nuevoNombre) {
    $this->nombre = $nuevoNombre;
  }

  public function imprimirNombre () {
    echo "<br>".$this->nombre;
  }

  public function mostrarEdad () {
    return $this->edad = 20;
  }

}

$objHumano = new Persona();

$objHumano->asignarNombre("lulu");

echo $objHumano->nombre;
// echo $objHumano->edad;
echo $objHumano->mostrarEdad();

echo $objHumano->imprimirNombre();
echo $objHumano->imprimirNombre();

?>