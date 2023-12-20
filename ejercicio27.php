<?php

class UnaClase {
  public static function unMetodo () {
    echo "soy un metodo estatico :D";
  }
}

$obj = new UnaClase();
$obj->unMetodo();
echo "<br>";
UnaClase::unMetodo();

?>