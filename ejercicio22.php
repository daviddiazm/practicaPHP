<?php

$frutas = array("c"=>"coco", "m"=>"maracuya","fresa", "s"=>"sandia");

print_r($frutas);
echo "<br>";

echo $frutas["c"];
echo "<br>";

foreach ($frutas as $i => $valor) {
  
  echo "<br>";
  echo $i." ";
  echo $valor;
}

?>