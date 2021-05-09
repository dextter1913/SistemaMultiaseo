<?php 
require_once 'Conexion.php';
class InsertarGanancias  
{
    private $totalGanancias;

    public function __construct($totalGanancias) {
        $this->totalGanancias = $totalGanancias;
    }

    public function InsertarGanacias(){
        $totalGanancias = $this->totalGanancias;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO totales(cantidad, estado, fechatotal) VALUES('$totalGanancias','Pendiente de Cuadre',NOW())");
        print '<center>Se ingreso correctamente en totales</center>';
        
    }
}


?>