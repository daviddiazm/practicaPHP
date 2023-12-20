<?php

$nombreArchivo = "el archivo xd.txt";

$contenidoArchivo = "que mas pues como te a ido sigues soltera o ya tienes marido?";

$archivoCrear = fopen($nombreArchivo, "w");
echo "archivo crear = ".$archivoCrear."<br>";
fwrite($archivoCrear, $contenidoArchivo);
fclose($archivoCrear);


?>