<?php 

require_once '../clases/InsertarFactura.php';
$id = $_GET['id'];
$Factura = $_GET['idfactura'];
$insertarFactura = new InsertarFactura();
$insertarFactura->Factura();
header("Location:../busqueda/ingresar-venta/?id=$id&idfactura=$Factura");