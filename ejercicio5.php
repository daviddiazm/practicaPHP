
<?php
  if ($_POST) {
    $txtNombre = $_POST['nombre'];
    $txtApellido = $_POST['apellido'];
    echo "hola ".$txtNombre." ".$txtApellido;
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
<form action="ejercicio5.php" method="post">
    nombre del socio:
    <input type="text" name="nombre">
    <br>
    apellido del socio:
    <input type="text" name="apellido">
    <input type="submit" value="enviar">
  </form> 
</body>
</html>