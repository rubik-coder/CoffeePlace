<?php 

session_start();
require 'funciones.php';

//cadena de conexion
//mysql_connect("localhost","root","password");
//DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
//if ($busqueda<>''){
   //CUENTA EL NUMERO DE PALABRAS
 //  $trozos=explode(" ",$busqueda);
 //  $numero=count($trozos);
//  if ($numero==1) 
   //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
 //  $cadbusca="SELECT titulo FROM `panaderia` WHERE =1 AND titulo LIKE '%$busqueda%'  LIMIT 50";

//}
//$result=mysql("teleformacion", $cadbusca);
//While($row=mysql_fetch_object($result))
//{
   //Mostramos los titulos de los articulos o lo que deseemos...
  //$referencia=$row->REFERENCIA;
  // $titulo=$row->TITULO;
  // echo $referencia." - ".$titulo."<br>";;
//}
//}
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
              <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadPeliculas(); ?></span></a>
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
    <form method="post" action="buscar.php">
       <div class="demo">
          <form class="form-search">
            <div class="input-group">
              <input class="form-control form-text" maxlength="128" placeholder="Buscar" size="15" type="text" />
              <span class="input-group-btn"><button class="btn btn-primary"><i class="fa fa-search fa-lg">&nbsp;</i></button></span>
            </div>
          </form>
        </div>
    </form>
     <div class="row">
      
       
     </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
