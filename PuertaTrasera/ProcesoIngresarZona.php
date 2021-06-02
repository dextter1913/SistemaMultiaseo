<?php 
require_once '../clases/AbrirZonas.php';
$AbrirZonas = new AbrirZonas($_POST['nombrezona']);
$AbrirZonas->insertarzona();
header('Location:../zonas/');
