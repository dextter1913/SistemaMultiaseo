<?php 
require_once '../clases/IngresarCompras.php';
//$_POST['idtotal']
$insertarCompras = new IngresarCompras($_POST['NumeroFactura'],$_POST['Prefijo'],$_POST['Cantidad'],$_POST['ValorUnitario'],$_POST['FechaCompra'],$_POST['Total'],$_POST['Descripcion'],$_POST['idtotal']);
$insertarCompras->IngresarCompras();
$insertarCompras->ModificarCuadreCaja();
header('Location:../compras/?NumeroFactura='.$_POST['NumeroFactura'].'&Prefijo='.$_POST['Prefijo'].'&Cantidad='.$_POST['Cantidad'].'&ValorUnitario='.$_POST['ValorUnitario'].'&FechaCompra='.$_POST['FechaCompra'].'&Total='.$_POST['Total'].'&Descripcion='.$_POST['Descripcion']);
