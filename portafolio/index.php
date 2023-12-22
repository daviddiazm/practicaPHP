<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php 
$objConexion = new Conexion();
$proyectos = $objConexion->consultar("select * from proyectos");
?>



<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Custom jumbotron</h1>
    <p class="col-md-8 fs-4">
      Using a series of utilities, you can create this jumbotron, just
      like the one in previous versions of Bootstrap. Check out the
      examples below for how you can remix and restyle it to your liking.
    </p>
    <button class="btn btn-primary btn-lg" type="button">
      Example button
    </button>
  </div>
</div>



<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach ($proyectos as $proyecto) { ?>
  <div class="col">
    <div class="card h-100">
      <img src=<?php echo "imagenes/".$proyecto['imagen']?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
      </div>
    </div>
  </div>
<?php } ?>

<?php include("pie.php");?>