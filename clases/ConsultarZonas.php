<?php 
    class ConsultarZonas  
    {
        public function MostrarZonas(){
            $consulta = 'SELECT * FROM zonas';
            return $consulta;
        }
    }
    
?>