<?php require_once 'Conexion.php';
class ModificarZonas  
{
    private $nombrezona;
    private $id;

    public function __construct($nombrezona, $id) {
        $this->nombrezona = $nombrezona;
        $this->id = $id;
    }

    public function Modificar(){
        $nombrezona = $this->nombrezona;
        $id = $this->id;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("UPDATE zonas SET nombrezona = '$nombrezona' WHERE idzona = '$id'");
    }
}


?>