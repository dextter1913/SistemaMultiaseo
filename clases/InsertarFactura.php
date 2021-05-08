<?php require_once 'Conexion.php';
    class InsertarFactura  
    {
        public function Factura(){
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("INSERT INTO facturaVentas(fechaFactura) VALUES(CURDATE())");
        }
    }
    

?>