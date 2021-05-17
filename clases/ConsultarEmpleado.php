<?php 
require_once 'Conexion.php';
    class ConsultarEmpleado  
    {
        private $user;

        public function __construct($user) {
            $this->user = $user;
        }

        private function Consulta(){
            $user = $this->user;
            $consulta = "SELECT * FROM empleados WHERE user = '$user'";
            return $consulta;
        }

        private function MetodoGuardarDatos(){
            $conexion = new Conexion();
            $resultado = mysqli_query($conexion->EstablecerConexion(),$this->Consulta());
            return $resultado;
        }

        public function MostrandoDatosGuardados(){
            $Array = mysqli_fetch_array($this->MetodoGuardarDatos());
            return $Array;
        }
    }
    

?>