<?php 
    class ConsultarProducto  
    {
        private $producto;// Atributo consultar producto
        public function __construct($producto) { // ingresando datos al atributo privado
            $this->producto = $producto;
        }
        public function QuerySeleccionarProducto(){// metodo para hacer la consulta 
            $producto = $this->producto;
            $consulta = "SELECT * FROM productos WHERE idProd = '$producto' OR nomProd LIKE '$producto%'"; // consulta select para pedidos
            return $consulta;
        }
    }
    

?>