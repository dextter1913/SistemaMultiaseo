<?php 
    class StringConsultaProducto  
    {
        private $producto;
        public function __construct($producto) {
            $this->producto = $producto;
        }
        public function QuerySeleccionarProducto(){
            $producto = $this->producto;
            $consulta = "SELECT * FROM productos WHERE idProd = '$producto' OR nomProd LIKE '$producto%'";
            return $consulta;
        }
    }
    

?>