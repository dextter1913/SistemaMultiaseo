<?php 
require_once 'Conexion.php';
class InsertarLog  
{
    private $user;
    public function __construct($user) {
        $this->user = $user;
    }
    public function IngresarRastroLogeo(){
        $user = $this->user;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO logs(HoraLogeo, FechaLogeo, user) VALUES(CURTIME(),CURDATE(),'$user')");
    }
}


?>