<?php
require_once '../clases/ActualizarStock.php';

if (empty($_POST['id'])) {
    session_start();
    $_SESSION['Mensaje'] = "<center>Por favor Seleccione un Producto para Cambiarle el Stock</center>";
    header('Location:../consulta/IngresarNuevoStock/');
} else {


    foreach ($_POST['id'] as $id) {
        $ModificarStock = new ActualizarStock($id, $_POST['Stock']);
        $ModificarStock->InsertarNuevoStock();
        header('Location:../consulta/IngresarNuevoStock/');
    }
}
