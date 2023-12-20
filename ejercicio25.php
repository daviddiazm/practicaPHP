<?php

class Persona {
  public $nombre;
  protected $edad = 5;

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

class Trabajador extends Persona {
  public $cargo;
  public function asignarCargo ($nuevoCargo) {
    $this->cargo = $nuevoCargo;
  }

  public function presentarInfo () {
    echo "el nombre es = ".$this->nombre."<br>su cargo es = ".$this->cargo."su edad ".$this->edad;
  }
}


$trabajador1 = new Trabajador ();

$trabajador1->asignarNombre("Lulu la chambeadora");
echo $trabajador1->imprimirNombre();
$trabajador1->asignarCargo("guarda espaldas");

echo "<br>";
echo $trabajador1->cargo;
echo "<br>";
$trabajador1->presentarInfo();

// $objHumano = new Persona();

// $objHumano->asignarNombre("lulu");

// echo $objHumano->nombre;
// // echo $objHumano->edad;
// echo $objHumano->mostrarEdad();

// echo $objHumano->imprimirNombre();
// echo $objHumano->imprimirNombre();

?>