<?php

$server = "locaclhost";
$dns = "mysql:host=localhost;dbname=album";
$user = "root";
$pass = "";

try {
  $conection = new PDO($dns, $user, $pass);
  $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `fotos`(`id_foto`, `nombre_foto`, `ruta_foto`) VALUES (null,'jugando con la progrmacion','foto.jpg');";
  $conection->exec($sql);
  echo "conexion relaizada";
} catch (PDOExeption $error) {
  echo $error;
}

?>