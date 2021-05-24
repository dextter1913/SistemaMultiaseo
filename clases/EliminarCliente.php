<?php 
require_once 'Conexion.php';
class EliminarCliente  
{
    private $idCl;

    public function __construct($idCl) {
        $this->idCl = $idCl;
    }

    public function Eliminar(){
        $conexion = new Conexion();
        $idCl = $this->idCl;
        $conexion->EstablecerConexion()->query("DELETE FROM cliente WHERE idCl = '$idCl'");
    }
}

?>