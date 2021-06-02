<?php 
    require_once '../clases/EliminarZonas.php';
    $EliminarZona = new EliminarZonas($_GET['id']);
    $EliminarZona->Eliminar();
    header('Location:../zonas/');

?>