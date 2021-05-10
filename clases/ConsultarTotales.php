<?php 
    class ConsultarTotales  
    {
        public function ConsultaSinCuadre(){
            $query = "SELECT * FROM totales WHERE estado = 'Pendiente de Cuadre' ORDER BY fechatotal DESC LIMIT 5";
            return $query;
            
        }
        public function ConsultaConCuadre(){
            $query = "SELECT * FROM totales WHERE estado = 'Cuadrado' ORDER BY fechatotal DESC LIMIT 5";
            return $query;
            
        }
    }
    

?>