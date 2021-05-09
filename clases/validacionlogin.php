<?php 
require_once 'Conexion.php';
class validacionlogin  
{
    private $usuario;
    private $contraseña;

    public function __construct($usuario, $contraseña) {
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
    }

    private function ConsultaValidarUsuario(){
        $usuario = $this->usuario;
        $contraseña = $this->contraseña;
        $query = "SELECT * FROM usuarios WHERE user = '$usuario' AND pass = '$contraseña'";
        return $query;
    }

    public function GuardandoConsultaValidarUsuario(){
        $conexion = new Conexion();
        $resultado = mysqli_query($conexion->EstablecerConexion(),$this->ConsultaValidarUsuario());
        $filas = mysqli_num_rows($resultado);
        return $filas;
    }
}



?>