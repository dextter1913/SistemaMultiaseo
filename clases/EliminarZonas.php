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
            //$conexion->EstablecerConexion()->query("DELETE FROM cliente WHERE idzona = '$id'");//solo desbloquear esta opcion por requerimientos del cliente ya que esto eslimina todos los clientes de dicha zona
            $conexion->EstablecerConexion()->query("DELETE FROM zonas WHERE idzona = '$id'");//query eliminar zonas, solo elimina zonas sin clientes


        }
    }
    

?>