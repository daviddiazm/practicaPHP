<?php

session_start();

echo $_SESSION["usuario"]."<br>".$_SESSION["estatus"];

if( isset($_SESSION["usuario"])) {
  echo $_SESSION["usuario"]."<br>".$_SESSION["estatus"];
} else {
  echo "No hay usuario ingresado";
}

?>