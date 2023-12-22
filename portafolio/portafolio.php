<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php  
// $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, 'Pagina portafolio', 'imagen.jpg', 'esta es una prueba para insertar');";
if($_POST) {
  $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "No hay nombre"; 
  $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "No hay descripcion"; 
  $fecha = new DateTime();
  $archivo = $fecha->getTimestamp()."_".$_FILES['archivo']['name']; 
  $archivoTemp = $_FILES['archivo']['tmp_name'];
  move_uploaded_file($archivoTemp, "imagenes/".$archivo);

  $objConexion = new Conexion();
  $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$archivo', '$descripcion');";
  $objConexion->ejecutar($sql);
  header('location:portafolio.php');
}

if($_GET){
  $objConexion = new Conexion();
  $imagen = $objConexion->consultar("select imagen from proyectos where id =".$_GET['borrar']);
  print_r($_GET);
  unlink("imagenes/".$imagen[0]['imagen']);
  $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$_GET['borrar'];
  $objConexion->ejecutar($sql);
  header('location:portafolio.php');
}

$objConexion = new Conexion();
$proyectos = $objConexion->consultar("select * from proyectos");
?>

<div class="container">
  <div class="container">
    <div class="row">
      <div class="col-6" >
        <div class="card">
          <div class="card-header">Datos del proyecto</div>
          <div class="card-body">
            <form action="portafolio.php" method="post" enctype="multipart/form-data">
            <p>Nombre del proyecto</p>
            <input type="text" name="nombre" class="form-control" id="">
            <p>Imagen del proyecto</p>
            <input type="file" name="archivo" class="form-control" id="">
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" ></textarea>
            <input class="btn btn-success" type="submit" value="Enviar">
            </form>
          </div>
          <div class="card-footer text-muted"></div>
        </div>
      </div>

      <div class="col-6" >
        <div class="table-responsive" >
          <table class="table table-primary" >
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <?php foreach ($proyectos as $proyecto) { ?>
              <tbody>
                <tr class="">
                  <td scope="row"><?php echo $proyecto['id']; ?></td>
                  <td><?php echo $proyecto['nombre']; ?></td>
                  <td ><img src=<?php echo "imagenes/".$proyecto['imagen']; ?> alt="" style="max-width: 100px; max-height: 50px; overflow: hidden;"></td> 
                  <td><?php echo $proyecto['descripcion']; ?></td>
                  <td>
                    <a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" >Eliminar</a >
                  </td>
                </tr>
              </tbody>
            <?php } ?>

          </table>
        </div>

      </div>
      
    </div>
  </div>
  
</div>




<?php include("pie.php");?>