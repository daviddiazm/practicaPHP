<?php

if($_POST) {
  // print_r($_POST);
  print_r($_FILES['archivo']['tmp_name']);
  move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
  // move_uploaded_file($_FILES['archivo']['tmp_name'], "c:\Users\david\OneDrive\Documentos".$_FILES['archivo']['name']);
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
  <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
    imagen:
    <input type="file" name="archivo" id="">
    <br>
    <input type="submit" name="enviar" value="enviar informacion">
  </form>
</body>
</html>