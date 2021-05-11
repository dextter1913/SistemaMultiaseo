<?php 
    class ConsultarCompras  
    {
        
        public function Consultar(){
            $consulta = "SELECT * FROM compras ORDER BY FechaCompra DESC LIMIT 8";
            return $consulta;
        }
    }
    
?>