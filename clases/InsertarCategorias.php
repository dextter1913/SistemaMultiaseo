<?php 
require_once 'Conexion.php';
class InsertarCategorias  
{
    private $nomcategoria;

    public function __construct($nomcategoria) {
        $this->nomcategoria = $nomcategoria;
    }

    public function MetodoInsertarCategoria(){
        $nomcategoria = $this->nomcategoria;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO categorias(nomcategoria) VALUES('$nomcategoria')");
    }

}

?>