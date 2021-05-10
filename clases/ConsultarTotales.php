<?php 
    class ConsultarTotales  
    {
        public function Consulta(){
            $query = "SELECT * FROM totales WHERE estado = 'Pendiente de Cuadre' ORDER BY fechatotal DESC LIMIT 5";
            return $query;
            
        }
    }
    

?>