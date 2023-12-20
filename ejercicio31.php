<?php

$txtNombre = "";
$rdgLenguaje = "";

$chkPhp = "";
$chkHtml = "";
$chkCss = "";
$isAnime = "";
$txtComentario = "";


if($_POST) {
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "no hay datos";
  $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "no hay datos";
  $chkPhp = (isset($_POST['chkphp']) &&$_POST['chkphp'] == 'true') ? 'checked' : '';
  $chkHtml = (isset($_POST['chkhtml']) && $_POST['chkhtml'] == 'true') ? 'checked' : '';
  $chkCss = (isset($_POST['chkcss']) && $_POST['chkcss'] == 'true') ? 'checked' : '';
  $isAnime = (isset($_POST['isAnime'])) ? $_POST['isAnime'] : "ninguna";
  $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "no hay comentario";
  print_r($_POST);
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario</title>
</head>
<body>
  
  <form action="ejercicio31.php" method="post">
    <p>Nombre</p>
    <input value="<?php echo $txtNombre?>" type="text" name="txtNombre" id="">
    </br>
    <p>lenguajes que te gustan</p>
    <strong>php</strong><input type="radio" value="php" <?php echo ($rdgLenguaje == "php")? "checked": "" ?> name="lenguaje" id="">
    <strong>java</strong><input type="radio" value="java" <?php echo ($rdgLenguaje == "java")? "checked": "" ?> name="lenguaje" id="">
    <strong>javaScrip</strong><input type="radio" value="javaScript" <?php echo ($rdgLenguaje == "javaScript")? "checked": "" ?> name="lenguaje" id="">
    </br>
    <p>estas aprendiendo...</p>
    </br>php <input type="checkbox" name="chkphp" value="true" <?php echo $chkPhp;?> id="">
    </br>Html <input type="checkbox" name="chkhtml" value="true" <?php echo $chkHtml;?> id="">
    </br>css <input type="checkbox" name="chkcss" value="true" <?php echo $chkCss;?> id="">
    </br>
    que anime te gusta?
    <select name="isAnime" id="">
      <option value="" <?php echo ($isAnime == "ninguna")? "selected": "";?> >ninguna</option>
      <option value="naruto" <?php echo ($isAnime == "naruto")? "selected": "";?> >Naruto</option>
      <option value="dragon" <?php echo ($isAnime == "dragon")? "selected": "";?> >Dagron Ball</option>
      <option value="evangelion" <?php echo ($isAnime == "evangelion")? "selected": "";?> >Evangelion</option>
    </select>

    <p>Tienes alguna duda?</p>
    <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>

    <input type="submit" value="Enviar">
  </form>
  <?php if ($_POST) { ?>
    <p>hola: </p><?php echo $txtNombre ?>
    <p>Lenguaje seleccionado: <?php echo $rdgLenguaje; ?></p>
    <p>estas aprendiendo:</p> <?php 
      echo ($chkPhp = "checked") ? "php<br>" : "";
      echo ($chkHtml = "checked") ? 'html<br>' : '';
      echo ($chkCss = "checked") ? 'css<br>' : '';
    ?>
    <p>tu serie favorita es:</p>
    <?php echo $isAnime; ?>
    <p>tu comentario fue</p>
    <?php echo $txtComentario;?>
  <?php } ?>
</body>
</html>
