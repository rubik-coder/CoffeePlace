<?php
session_start();

require '../vendor/autoload.php';
$pedido = new Kawschool\Pedido;

if (!isset($_SESSION['usuario_info']) OR empty($_SESSION['usuario_info'])) 
header('Location: ../index.php');


if($_SERVER['REQUEST_METHOD'] ==='GET'){
    $id = $_GET['id'];
    $rpt = $pedido->completado($id);

    if ($rpt) 
        header('Location: dashboard.php');
    else 
        print 'Error al confirmar un pedido';

}

?>