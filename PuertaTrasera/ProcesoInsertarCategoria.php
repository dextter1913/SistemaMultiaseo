<?php 
require_once '../clases/InsertarCategorias.php';


$insertarCategoria = new InsertarCategorias($_POST['nomcategoria']);
$insertarCategoria->MetodoInsertarCategoria();
header('Location:../categorias/');
?>