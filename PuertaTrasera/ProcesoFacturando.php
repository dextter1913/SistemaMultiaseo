<?php
if (isset($_POST['btnModificarEstadoVenta'])) {
    require_once '../clases/CambiarEstadoVentaYPrecio.php';
    $CambiarEstadoVenta = new CambiarEstadoVentaYPrecio($_POST['EstadoVenta'], $_POST['IdVenta'], $_POST['Precio']);

    if ($_POST['Precio'] == "") {
        $CambiarEstadoVenta->CambiarEstadoVenta();
        $criterio = $_GET['criterio'];
        header("Location:../buscar-factura/Facturas?criterio=$criterio");
    } else {

        $CambiarEstadoVenta->CambiarPrecioVenta();
        $criterio = $_GET['criterio'];
        header("Location:../buscar-factura/Facturas?criterio=$criterio");
    }
}
