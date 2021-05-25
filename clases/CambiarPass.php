<?php 
require_once 'Conexion.php';
    class CambiarPass 
    {
        private $user;
        private $pass;

        public function __construct($user, $pass) {
            $this->user = $user;
            $this->pass = $pass;
        }

        public function CambiarContraseña(){
            $user = $this->user;
            $pass = $this->pass;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("UPDATE usuarios SET pass = '$pass' WHERE user = '$user'");
        }
    }
    
?>
