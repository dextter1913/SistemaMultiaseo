<?php 
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

        
    }
    
?>