<?php 
require_once '../clases/Conexion.php';
    class AbrirZonas  
    {
        
        private $nombrezona;

        public function __construct($nombrezona) {
            $this->nombrezona = $nombrezona;
        }

        public function insertarzona(){
            $conexion = new Conexion();
            $nombrezona = $this->nombrezona;
            $conexion->EstablecerConexion()->query("INSERT INTO zonas(nombrezona) VALUES('$nombrezona')");
        }
    }
    
?>