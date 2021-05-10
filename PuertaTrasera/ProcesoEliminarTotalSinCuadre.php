<?php 
    require_once '../clases/EliminarTotal.php';
    $eliminar = new EliminarTotal($_GET['idTotal']);
    $eliminar->EliminarTotal();
    header('Location:../gastos/');
?>