<?php

$server = "locaclhost";
$dns = "mysql:host=localhost;dbname=album";
$user = "root";
$pass = "";

try {
  $conection = new PDO($dns, $user, $pass);
  $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM `fotos`;";
  $senetencia = $conection->prepare($sql);
  $senetencia->execute();
  $res = $senetencia->fetchAll();
  // print_r($res);
  foreach ($res as $foto) {
    // print_r($foto['nombre_foto']);
    echo $foto['nombre_foto'];
    echo "<br>";
  }
  echo "conexion relaizada";
} catch (PDOExeption $error) {
  echo $error;
}

?>