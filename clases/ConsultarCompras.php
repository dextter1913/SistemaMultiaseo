<?php 
    class ConsultarCompras  
    {
        
        public function Consultar(){
            $consulta = "SELECT * FROM compras LIMIT 8 ORDER BY FechaCompra DESC";
        }
    }
    
?>