<?php 
        require_once '../clases/IngresarProductos.php';
        $IngresProductos = new IngresarProductos($_GET['nombre'], $_GET['precio'], $_GET['precioVenta'], $_GET['categoria'], $_GET['DescripcionP'], $_GET['Stock'], $_GET['usuario']); //enviando los datos por metodo post en el parametro del objeto 
        $IngresProductos->InsertarProducto();
        session_start();
        $_SESSION['Mensaje'] = "<center>Producto Ingresado Correctamente</center>";
        header('Location:../registro/'); ?>
