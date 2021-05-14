<?php 
require_once '../clases/ActualizarStock.php';

$ModificarStock = new ActualizarStock($_POST['id'],$_POST['Stock']);
$ModificarStock->InsertarNuevoStock();
header('Location:../consulta/ingresarNuevoStock/');
?>