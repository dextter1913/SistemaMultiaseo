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
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("UPDATE usuarios SET fechaInicioLicencia = CURDATE() WHERE user = '$usuario'");
        $query = "SELECT * FROM usuarios WHERE user = '$usuario' AND pass = '$contraseña' AND super = TRUE AND fechaInicioLicencia <= fechaFinalLicencia";
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