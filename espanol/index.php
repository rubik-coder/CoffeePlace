<?php 

session_start();
require 'funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coffee place</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/css/slider.css">
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
          <a class="navbar-brand" href="index.php">Coffee Place</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
          <li>
              <a href="contacto.html" class="btn">CONTACTO</a>
            </li> 
            <li>
              <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadPeliculas(); ?></span></a>
            </li> 
            <li class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  CATEGORIAS
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
   <li><a href="index.php">Café</a></li>
    <li><a href="bocadillos.php">Bocadillos</a></li>
    <li><a href="postres.php">Postres</a></li>
    <li><a href="bebidas.php">Bebidas</a></li>
          </ul>
          </li>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="slider/meal-918639_1920.jpg" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="slider/breakfast-1209260_1920.jpg" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="slider/breakfast-1246686_1920.jpg" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="slider/pancakes-2020863_1920.jpg" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="slider/salmon-518032_1920.jpg" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="slider/tarte-2409958_1920.jpg" />
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>
    <div class="container" id="main">
    <form method="post" action="buscar.php">
       <div class="demo">
          <form class="form-search">
            <div class="input-group">
              <input class="form-control form-text" maxlength="128" placeholder="Buscar" size="15" type="text" name="busqueda"/>
              <span class="input-group-btn"><button class="btn btn-primary"><i class="fa fa-search fa-lg">&nbsp;</i></button></span>
            </div>
          </form>
        </div>
    </form>
    <br>
    <br>
     <div class="row">
       <?php 
       require 'vendor/autoload.php';
       $pelicula = new Kawschool\Pelicula;
       $info_peliculas = $pelicula->cafe();
       $cantidad = count($info_peliculas);
       if ($cantidad > 0){

        for($x =0; $x < $cantidad; $x++){
          $item = $info_peliculas[$x];
        
        
       ?>
       
       <div class="col-md-3">
       <div class="panel panel-default">
       <div class="pannel-heading">
       <h4 class="text-center"><?php print $item['titulo']?></h4>
       </div>
         <div class="panel-body">
         <?php
          $foto = '../upload/'.$item['foto'];
           if (file_exists($foto)){
         ?>
          <img src="<?php print $foto; ?>" width="230px" height="115px">
          </div>
          <div class="text-center"><?php print $item['descripcion']?></div>
          <strong><div class="text-center">Precio: $<?php print $item['precio']?></div></strong>
          <?php
           }else{}
          ?>
         <div class="panel-footer">
         <a href="carrito.php?id=<?php print $item['id']?>" class="btn btn-success btn-block">
         <span class="glyphicon glyphicon-shopping-cart"> </span> Comprar
         </a>
         </div>
        </div>
       </div>
       <?php
        }
       }else{
       ?>
       <h4>No hay registros</h4> 
       <?php } ?>
       
     </div>
    </div> <!-- /container -->
    <footer><a href="panel/index.php">Todos los derechos reservados</a></footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
