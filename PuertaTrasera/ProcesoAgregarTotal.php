<?php
require_once '../clases/InsertarGanancias.php';
$totalGanacias = $_GET['totalGanancias'];
$insertarganancias = new InsertarGanancias($totalGanacias);
$insertarganancias->InsertarGanacias();
session_start();
$_SESSION['mensaje'] = "<center>Total Ingresado, <b>Recuerde Cuadrar Caja</b></center>";
header('Location:../ventas/');

?>