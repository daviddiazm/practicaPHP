<?php

$frutas = array("fresa", "pera", "manzana");

foreach ($frutas as $i => $valor) {
  echo $valor;
}

echo "<br>";
array_push($frutas,"coco");

foreach ($frutas as $i => $valor) {
  echo $valor;
}



?>