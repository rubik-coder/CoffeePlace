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
              <a href="carrito.php" class="btn">CART <span class="badge"><?php print cantidadPeliculas(); ?></span></a>
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
      <div class="main-form">
        <div class="row">
          <div class="col-md-12">
          <fieldset>
          <legend>Complete data</legend>
          
            <form action="completar_pedido.php" method="post">
                <div class="form-group">
                <br>
                <p align="center">---PAY WITH CASH---</p>
                <br>
                <br>
                       <label>Name</label>
                       <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                       <label>Last name</label>
                       <input type="text" class="form-control" name="apellidos" required>
                </div>
                <div class="form-group">
                       <label>Email</label>
                       <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                       <label>Telephone</label>
                       <input type="text" class="form-control" name="telefono" required>
                </div>
                <div class="form-group">
                       <label>Address</label>
                       <textarea name="direccion" class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
            <br>
            <br>
            <p align="center">---PAY WITH CREDIT OR DEBIT CARD---</p>
            <br>
            <br>
            <form action="">
            <div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'pill',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '15'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>
</form>
          </fieldset>
          </div>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
