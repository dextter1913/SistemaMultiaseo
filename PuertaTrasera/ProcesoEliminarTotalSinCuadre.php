<?php 
    require_once '../clases/EliminarTotal.php';
    $eliminar = new EliminarTotal($_GET['idTotal']);
    $eliminar->EliminarTotalSinCuadre();
    header('Location:../gastos/');
?>