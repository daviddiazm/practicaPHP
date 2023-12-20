<?php

$jsonContenido = '[
  {"nombre":"david", "apellido":"diaz"},
  {"nombre":"juan", "apellido":"perez"}
]';

$res = json_decode($jsonContenido);
print_r($res);

echo "<br>";

foreach($res as $persona){
  // print_r($persona->nombre);
  echo $persona->nombre." ".$persona->apellido."<br>";
}


?>