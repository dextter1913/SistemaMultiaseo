<?php 
require_once '../clases/EliminarCategoria.php';
$nomcategoria = new EliminarCategoria($_GET['nomcategoria']);
$nomcategoria->Eliminar();
header('Location:../categorias/');
?>