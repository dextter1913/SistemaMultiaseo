<?php 
require_once '../clases/ModificarZonas.php';
$ModificarZonas = new ModificarZonas($_POST['NombreZona'], $_GET['id']);
$ModificarZonas->Modificar();
header('Location:../zonas');
?>
