<?php

if($_POST){
  $boton = $_POST['btnValor1'];
  switch ($boton) {
      case 1:
        echo "el usuario presiono el ".$boton;
      break;
      case 2:
        echo "el usuario presiono el ".$boton;
      break;
      case 3:
        echo "el usuario presiono el ".$boton;
      break;
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
  <form action="ejercicio13.php" method="post">
    <input type="submit" name="btnValor1" value="1">
    <br>
    <input type="submit" name="btnValor1" value="2">
    <br>
    <input type="submit" name="btnValor1" value="3">
  </form>
</body>
</html>