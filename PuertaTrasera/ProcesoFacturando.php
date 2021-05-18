<?php
require_once '../clases/CambiarEstadoVentaYPrecio.php';
if (empty($_POST['IdVenta'])) {
    session_start();
    $_SESSION['Mensaje'] = "No se selecciono ningun pedido";
    $criterio = $_GET['criterio'];
    header("Location:../buscar-factura/Facturas?criterio=$criterio");
} elseif ($_POST['Precio'] == "") {

    foreach ($_POST['IdVenta'] as $idVenta) {
        $CambiarEstadoVenta = new CambiarEstadoVentaYPrecio($_POST['EstadoVenta'], $idVenta, $_POST['Precio']);
        $CambiarEstadoVenta->CambiarEstadoVenta();
        $criterio = $_GET['criterio'];
        header("Location:../buscar-factura/Facturas?criterio=$criterio");
    }
} else {
    foreach ($_POST['IdVenta'] as $idVenta) {
        $CambiarEstadoVenta = new CambiarEstadoVentaYPrecio($_POST['EstadoVenta'], $idVenta, $_POST['Precio']);
        $CambiarEstadoVenta->CambiarPrecioVenta();
        $criterio = $_GET['criterio'];
        header("Location:../buscar-factura/Facturas?criterio=$criterio");
    }
}
