<?php
if (isset($_POST['btnModificarEstadoVenta'])) {
    require_once '../clases/CambiarEstadoVentaYPrecio.php';
    $CambiarEstadoVenta = new CambiarEstadoVentaYPrecio($_POST['EstadoVenta'], $_POST['IdVenta'],$_POST['Precio']);
    $CambiarEstadoVenta->CambiarEstadoVenta();
    $criterio = $_GET['criterio'];
    $criterio2 = $_GET['criterio2'];
    $CambiarEstadoVenta->CambiarPrecioVenta();
    header("Location:../buscar-factura/Facturas?criterio=$criterio&criterio2=$criterio2");

}
