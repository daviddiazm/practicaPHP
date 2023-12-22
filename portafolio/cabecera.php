<?php
session_start();
if($_SESSION['usuario'] != "david") {
  header('location:login.php');
}
echo "hola ".$_SESSION['usuario'];

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Portafolio</title>
</head>
<body>
  <div class="container">
    <a href="index.php">Inicio</a>
    <a href="portafolio.php">portafolio</a>
    <a href="cerrar.php">cerrar</a>
    </br>