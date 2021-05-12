<?php 
require_once 'Conexion.php';
    class CuadreCaja  

    {   private $idtotal;
        private $fijos;
        private $variables;

        public function __construct($idtotal,$fijos,$variables) {
            $this->idtotal = $idtotal;
            $this->fijos = $fijos;
            $this->variables = $variables;
        }

        private function SumaGastos(){
            $suma = $this->fijos + $this->variables;
            return $suma;
        }

        private function MostrarUltimoTotal(){
            $idtotal = $this->idtotal;
            $conexion  = new Conexion();
            $consulta = mysqli_query($conexion->EstablecerConexion(),"SELECT cantidad FROM totales WHERE idtotal = '$idtotal'");
            $resultados = mysqli_fetch_assoc($consulta);
            return $resultados;
        }

        public function TotalAModificar(){
            $idtotal = $this->idtotal;
            $Total = $this->MostrarUltimoTotal()['cantidad'] - $this->SumaGastos();
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("UPDATE totales SET cantidad = '$Total', estado = 'Cuadrado' WHERE idtotal = '$idtotal'");
        }
        
    }
    
?>