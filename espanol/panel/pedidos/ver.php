<?php
session_start();
if(!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info'])) 
header('Location: ../index.php');
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
            <li class="active">
              <a href="index.php" class="btn">Pedidos</a>
            </li> 
            <li>
              <a href="../peliculas/index.php" class="btn">Productos</a>
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
    <div class="roW">
          <div class ="col-md-12">
           <fieldset>
           <?php
           require '../../vendor/autoload.php';
           $id = $_GET['id'];
           $pedido = new Kawschool\Pedido;

           $info_pedido = $pedido->mostrarPorid($id);

           $info_detalle_pedido = $pedido->mostrarDetallePorIdPedido($id);

           ?>
             <legend>Informacion de la compra</legend>
               <div class="form-group">
                 <label>Nombre</label>
                 <input value="<?php print $info_pedido['nombre'] ?>" type="text" class="form-control" readonly>
               </div>
               <div class="form-group">
                 <label>Apellidos</label>
                 <input value="<?php print $info_pedido['apellidos'] ?>" type="text" class="form-control" readonly>
               </div>
               <div class="form-group">
                 <label>Email</label>
                 <input value="<?php print $info_pedido['email'] ?>" type="text" class="form-control" readonly>
               </div>
               <div class="form-group">
                 <label>Fecha de compra</label>
                 <input value="<?php print $info_pedido['fecha'] ?>" type="text" class="form-control" readonly>
               </div>
               
               <hr>
                  Productos comprados:
               <hr>
               <table class="table table-bordered">
                  <thead>
                      <tr>
                      <th>#</th>
                      <th>Titulo</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Total</th>
                      </tr>
                  </thead>
                       <tbody>
                       <?php
                         
                         $cantidad = count($info_detalle_pedido);
                         if ($cantidad > 0) {
                           $c=0;
                          for($x =0; $x < $cantidad; $x++){
                           $c++;
                           $item = $info_detalle_pedido[$x];
                           $total = $item['precio'] * $item['cantidad'];
                       ?> 
                        <tr>
                          <td><?php print $c ?></td>
                          <td><?php print $item['titulo']?></td>
                          <td><?php print $item['precio']?> $</td>
                          <td><?php print $item['cantidad']?></td>
                          <td><?php print $total ?> $</td>
                         </tr>

                      <?php
                        }
                          }else{
                       
                      ?>
                      <tr>
                          <td colspan="6">No hay registros</td>
                      </tr>
                      <?php
                      }
                      ?>
                     </tbody>
                </table>
                <div class="form-group">
                 <label>Total Compra</label>
                 <input value="$ <?php print $info_pedido['total'] ?>" type="text" class="form-control" readonly>
               </div>
               <hr>
           </fieldset>
           <div class="pull-left">
           <a href="index.php" class="btn btn-default hidden-print">Regresar</a>
           </div>
           <div class="pull-right">
           <a href="javascript:;" id="btnImprimir" class="btn btn-danger hidden-print">Imprimir</a>
           </div>
           
          </div>
        </div>
        <br>
        <br>
        <br>
        <p>Todos los derechos reservados - Coffe Place © - 2020 </p>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script>
     $('#btnImprimir').on('click',function(){
         
         window.print();

         return false;
     })
    </script>
  </body>
</html>
