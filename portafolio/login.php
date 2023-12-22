<?php

session_start();
$usuario = "";
$contrasenia = "";

if($_POST) {
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "no a ingresado el usuario";
  $contrasenia = (isset($_POST['contrasenia'])) ? $_POST['contrasenia'] : "no a ingresado la contrasenia";
  $_SESSION['usuario'] = $usuario;
  if ($usuario != "david" && $contrasenia != "123" ) {
    echo "el usuario no existe";
  } else {
    header("location:index.php");
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center g-2" >
        <div class="col"></div>
        <div class="col">
          <br>
          <form action="login.php" method="post">
            <p>Nombre de Usuario</p>
            <input type="text" class="form-control" name="usuario" id="">
            </br>
            <p>Contrasenia</p>
            <input type="password" class="form-control" name="contrasenia" id="">
            </br>
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </body>
</html>
