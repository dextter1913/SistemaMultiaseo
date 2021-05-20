<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hola</title>
</head>
<body>
        <h1>hola</h1>
</body>
</html>
<?php 
        require_once '../clases/IngresarProductos.php';
        $IngresProductos = new IngresarProductos($_GET['nombre'], $_GET['precio'], $_GET['precioVenta'], $_GET['categoria'], $_GET['DescripcionP'], $_GET['Stock'], $_GET['usuario']); //enviando los datos por metodo post en el parametro del objeto 
        $IngresProductos->InsertarProducto();
        session_start();
        $_SESSION['Mensaje'] = "<center>Producto Ingresado Correctamente</center>";
        header('Location:../registro/');
