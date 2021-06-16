<?php 
require_once 'Conexion.php';
    class ActualizarProducto  
    {
        private $id;
        private $NombreProducto;
        private $Costo;
        private $PrecioVenta;
        private $DescripcionProducto;

        public function __construct($id, $NombreProducto, $Costo, $PrecioVenta, $DescripcionProducto) {
            $this->id = $id;
            $this->NombreProducto = $NombreProducto;
            $this->Costo = $Costo;
            $this->PrecioVenta = $PrecioVenta;
            $this->DescripcionProducto = $DescripcionProducto;
        }

        public function UpdateProducto(){
            $id = $this->id;
            $NombreProducto = $this->NombreProducto;
            $Costo = $this->Costo;
            $PrecioVenta = $this->PrecioVenta;
            $DescripcionProducto = $this->DescripcionProducto;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("UPDATE productos SET nomProd = '$NombreProducto', precioProd = '$Costo', precioVenta = '$PrecioVenta', descripcionProd = '$DescripcionProducto' WHERE idProd = '$id'");
        }


    }
    
?>