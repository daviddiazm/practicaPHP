<?php

class Persona {
  public $nombre;

  public function asignarNombre ($nuevoNombre) {
    $this->nombre = $nuevoNombre;
  }

  public function imprimirNombre () {
    echo "<br>".$this->nombre;
  }

}

$objHumano = new Persona();

$objHumano->asignarNombre("lulu");

echo $objHumano->nombre;

echo $objHumano->imprimirNombre();
echo $objHumano->imprimirNombre();

?>