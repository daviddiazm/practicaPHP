<?php

$frutas = array("coco","maracuya","fresa","sandia");

print_r($frutas);
echo "<br>";
for ($i=0; $i < sizeof($frutas); $i++) { 
  # code...
  echo $frutas[$i]."<br>";
}


// echo $frutas[1];

?>