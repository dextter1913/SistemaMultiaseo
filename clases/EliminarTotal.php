<?php 
require_once '../clases/Conexion.php';
    class EliminarTotal  
    {
        private $id;

        public function __construct($id) {
            $this->id = $id;
        }
        public function EliminarTotal(){
            $id = $this->id;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("DELETE FROM totales WHERE idtotal= '$id'");
        }
    }
    

?>