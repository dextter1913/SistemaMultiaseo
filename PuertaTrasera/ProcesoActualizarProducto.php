<?php 
    require_once '../clases/ActualizarProducto.php';

    if (isset($_GET['id'])) {
        $update = new ActualizarProducto($_GET['id'],$_POST['NombreProducto'],$_POST['Costo'],$_POST['PrecioVenta'],$_POST['DescripcionProducto']);
        $update->UpdateProducto();
        header('Location:../consulta\IngresarNuevoStock');
    }else {
        echo "Hubo un error";
    }
?>