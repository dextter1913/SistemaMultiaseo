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
        $conexion->EstablecerConexion()->query("INSERT INTO logs(FechaLogeo,FechaDeslogeo, user) VALUES(CURDATE(),CURDATE(),'$user')");
        $conexion->EstablecerConexion()->query("UPDATE logs SET FechaLogeo = DATE_SUB(NOW(), INTERVAL 5 HOUR) WHERE user = '$user' ORDER BY idlog DESC Limit 1");
    }
    public function IngresarRastroDesLogeo(){
        $user = $this->user;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("UPDATE logs SET FechaDeslogeo = DATE_SUB(NOW(), INTERVAL 5 HOUR) WHERE user = '$user' ORDER BY idlog DESC Limit 1");
    }
}


?>