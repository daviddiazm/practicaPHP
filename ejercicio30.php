<?php

session_start();

$_SESSION["usuario"] = "david";
$_SESSION["estatus"] = "logueado";

echo "ususario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>