<?php 
    class ConsultarTotales  
    {
        public function Consulta(){
            $query = "SELECT * FROM totales WHERE estado = 'Pendiente de Cuadre'";
            return $query;
            
        }
    }
    

?>