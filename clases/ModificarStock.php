<?php 
require_once 'ConsultarValorVentaProducto.php';
require_once 'Conexion.php';
    class ModificarStock  
    {
        private $_idprod;
        private $CantidadUnidad;
        public function __construct($_idprod,$CantidadUnidad) {
            $this->_idprod = $_idprod;
            $this->CantidadUnidad = $CantidadUnidad;
        }
        private function Consulta(){
            $_idprod = $this->_idprod;
            $Query = "SELECT * FROM productos WHERE idprod = '$_idprod'";
            return $Query;
        }
        private function GuardarConsulta(){
            $conexion = new Conexion();
            $resultado = mysqli_query($conexion->EstablecerConexion(),$this->Consulta());
            return $resultado;
        }
        private function ResultadoArray(){
            $resultadoArray = mysqli_fetch_array($this->GuardarConsulta());
            return $resultadoArray;
        }
        private function DescontandoStock(){
            $total = $this->ResultadoArray()['Stock'] - $this->CantidadUnidad;
            return $total;
        }
        public function MetodoModificarStock(){
            $CantidadUnidad = $this->DescontandoStock();
            $_idprod = $this->_idprod;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("UPDATE productos SET Stock = '$CantidadUnidad' WHERE idProd = '$_idprod'");
        }
    }
    

?>