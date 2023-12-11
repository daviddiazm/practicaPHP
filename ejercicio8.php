<?php
if($_POST){
  $valorA = $_POST['valorA'];
  $valorB = $_POST['valorB'];

  $suma = $valorA + $valorB;
  $multiplicacion = $valorA * $valorB;
  $division = $valorA / $valorB;
  $resta = $valorA - $valorB;
  echo "suma ".$suma."<br>";
  echo "resta ".$resta."<br>";
  echo "multiplicacion ".$multiplicacion."<br>";
  echo "division ".$division."<br>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="ejercicio8.php" method="post">
    valor a
    <br>
    <input type="text" name="valorA" id="">
    <br>
    valor b
    <br>
    <input type="text" name="valorB" id="">
    <br>
    <input type="submit" value="enviar">
  </form>
</body>
</html>