<?php
if($_POST){
  $valorA = $_POST['valorA'];
  $valorB = $_POST['valorB'];

  if($valorA != $valorB) {
    echo "el valor de A es diferente que B";
  } else {
    echo "el valor de A es menor que el de B";
  }
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
  <form action="ejercicio9.php" method="post">
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