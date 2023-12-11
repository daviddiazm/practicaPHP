<?php
  // $nombre = $_POST['txtNombre'];
  // if ($nombre) {
  //   echo $nombre;
  // } else {
  //   echo "ingrese el nombre";
  // };

  if($_POST) {
    $nombre = $_POST['txtNombre'];
    echo "hola ".$nombre;
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
  <form action="ejercicio2.php" method="post">
  <input type="text" name="txtNombre" id="">
  <input type="submit" value="Enviar">
  </form>
</body>
</html>