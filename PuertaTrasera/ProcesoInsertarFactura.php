<?php 

require_once '../clases/InsertarFactura.php';
$id = $_GET['id'];
$Factura = $_GET['idfactura'];
$insertarFactura = new InsertarFactura();
$insertarFactura->Factura();
header("Location:../principal/submenu/ingresar-venta.php?id=$id&idfactura=$Factura");