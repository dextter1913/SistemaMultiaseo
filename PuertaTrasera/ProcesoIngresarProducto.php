<?php 

echo $_POST['nombre'].' '.$_POST['precio'].' '.$_POST['precioVenta'].' '.$_POST['categoria'].' '.$_POST['DescripcionP'].' '.$_POST['Stock'].' '.$_POST['usuario'];
//require_once '../clases/IngresarProductos.php';
//$IngresProductos = new IngresarProductos($_POST['nombre'], $_POST['precio'], $_POST['precioVenta'], $_POST['categoria'], $_POST['DescripcionP'], $_POST['Stock'], $_POST['usuario']); //enviando los datos por metodo post en el parametro del objeto 
//$IngresProductos->InsertarProducto();
session_start();
$_SESSION['prueba'] = "<center>Producto ingresado correctamente</center>";
echo $_SESSION['prueba'];
//header('Location:../Ingresar-Productos');

?>