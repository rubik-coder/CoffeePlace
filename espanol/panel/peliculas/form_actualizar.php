<?php 

session_start();
if (!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info'])) 
header('Location: ../index.php');

require '../../vendor/autoload.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
  $id = $_GET['id'];
  $pelicula = new Kawschool\Pelicula;
  $resultado = $pelicula->mostrarPorId($id);

  if (!$resultado)
     header('Location: index.php');
  
}else{
 header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">session_start();
 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coffee place</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="../dashboard.php">Coffee Place</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="../pedidos/index.php" class="btn">Pedidos</a>
            </li> 
            <li class="active">
              <a href="index.php" class="btn">Productos</a>
            </li> 
            <li class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  <?php print $_SESSION['usuario_info']['nombre_usuario'] ?>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="../cerrar_sesion.php">Salir</a></li>
</div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
        <div class="row"> 
          <div class="col-md-12">
          <fieldset>
          <legend>Datos del producto</legend>
          <form method="POST" action="../acciones.php" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php print $resultado['id']?>">
             <div class="row"> 
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Titulo</label>
                      <input value="<?php print $resultado['titulo']?>" type="text" class="form-control" name="titulo" required>
                   </div>
               </div>
            </div>
            <div class="row"> 
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Descripción</label>
                       <textarea class="form-control" name="descripcion" id="" cols="3" required><?php print $resultado['descripcion']?></textarea>
                   </div>
               </div>
            </div>
            <div class="row"> 
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Categoria</label>
                     <select class="form-control" name="categoria_id" required>
                       <option value="1">--SELECCIONAR--</option>
                       <?php
                         require '../../vendor/autoload.php';
                         $categoria = new Kawschool\Categoria;
                         $info_categoria = $categoria->mostrar();
                         $cantidad = count($info_categoria);

                         for($x =0; $x< $cantidad;$x++){
                           $item= $info_categoria[$x];
                       ?>
                       <option value="<?php print $item['id'] ?>"><?php print $item['nombre'] ?></option>
                       <?php } ?>
                       </select>
                   </div>
               </div>
            </div>
            <div class="row"> 
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Foto</label>
                       <input type="file" class="form-control" name="foto">
                       <input type="hidden" name="foto_temp" value="<?php print $resultado['foto']?>">
                   </div>
               </div>
            </div>
            <div class="row"> 
               <div class="col-md-4">
                  <div class="form-group">
                     <label>Precio $</label>
                       <input value="<?php print $resultado['precio']?>" type="number" min="0" class="form-control" name="precio" placeholder="0.00" required>
                   </div>
               </div>
            </div>
                 <input type="submit" class="btn btn-primary" name="accion" value="Actualizar">
                 <a href="index.php" class="btn btn-default">Cancelar</a>
          </form>
          </fieldset>
          </div>
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

  </body>
</html>