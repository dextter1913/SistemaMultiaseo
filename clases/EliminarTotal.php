<?php 
require_once '../clases/Conexion.php';
    class EliminarTotal  
    {
        private $id;

        public function __construct($id) {
            $this->id = $id;
        }
        public function EliminarTotalSinCuadre(){
            $id = $this->id;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("DELETE FROM totales WHERE idtotal= '$id' AND estado = 'Pendiente de Cuadre'");
        }
        public function EliminarTotalConCuadre(){
            $id = $this->id;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("DELETE FROM totales WHERE idtotal= '$id' AND estado = 'Cuadrado'");
        }
        public function EliminarTotalConCuadreOK(){
            $id = $this->id;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("DELETE FROM totales WHERE idtotal= '$id' AND estado = 'Cuadrado OK'");
        }
    }
    

?>