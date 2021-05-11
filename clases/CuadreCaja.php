<?php 
require_once 'Conexion.php';
    class CuadreCaja  
    {
        private $fijos;
        private $variables;

        public function __construct($fijos,$variables) {
            $this->fijos = $fijos;
            $this->variables = $variables;
        }

        private function SumaGastos(){
            $suma = $this->fijos + $this->variables;
            return $suma;
        }

        private function MostrarUltimoTotal(){
            $conexion  = new Conexion();
            $consulta = mysqli_query($conexion->EstablecerConexion(),"SELECT cantidad FROM totales ORDER BY fechatotal DESC LIMIT 1");
            $resultados = mysqli_fetch_assoc($consulta);
            return $resultados;
        }

        public function TotalAModificar(){
            $Total = $this->MostrarUltimoTotal()['cantidad'] - $this->SumaGastos();
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("UPDATE totales SET cantidad = '$Total', estado = 'Cuadrado'");
        }
        
    }
    
?>