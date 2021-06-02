<?php 
require_once '../clases/EliminarCliente.php';
$eliminarCliente = new EliminarCliente($_GET['idCl']);
$eliminarCliente->Eliminar();
header('Location:../clientes/?pg=5&nomCl=');
?>