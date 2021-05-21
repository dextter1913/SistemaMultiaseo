<?php 
require_once 'Conexion.php';

class EliminarCategoria  
{
    private $nomcategoria;

    public function __construct($nomcategoria) {
        $this->nomcategoria = $nomcategoria;
    }

    public function Eliminar(){
        $conexion = new Conexion();
        $nomcategoria = $this->nomcategoria;
        $conexion->EstablecerConexion()->query("DELETE from categorias WHERE nomcategoria = '$nomcategoria'");
    }
}


?>