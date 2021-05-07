<?php require_once 'Conexion.php';
    class EliminarZonas  
    {
        private $id;

        public function __construct($id) {
            $this->id = $id;
        }

        public function Eliminar(){
            $conexion = new Conexion();
            $id = $this->id;
            //$conexion->EstablecerConexion()->query("DELETE FROM cliente WHERE idzona = '$id'");
            $conexion->EstablecerConexion()->query("DELETE FROM zonas WHERE idzona = '$id'");


        }
    }
    

?>