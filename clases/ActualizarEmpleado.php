<?php 
require_once 'ConsultarEmpleado.php';
require_once 'Conexion.php';
class ActualizarEmpleado  extends ConsultarEmpleado
{   
    private $idEmpleado;
    private $nombre;
    private $apellido;
    private $telefono;
    private $direccion;
    private $email;
    private $fechanac;

    public function __construct($user, $idEmpleado, $nombre, $apellido, $telefono, $direccion, $email, $fechanac) {
        $this->user = $user;
        $this->idEmpleado = $idEmpleado;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->fechanac = $fechanac;
    }

    public function ActualizarDatos(){
        $conexion = new Conexion();
        $user = $this->user;
        $idEmpleado = $this->idEmpleado;
        $nombre = $this->nombre;
        $apellido = $this->apellido;
        $telefono = $this->telefono;
        $direccion = $this->direccion;
        $email = $this->email;
        $fechanac = $this->fechanac;
        $conexion->EstablecerConexion()->query("UPDATE empleados SET idEmp = '$idEmpleado' ,nombreEmp = '$nombre',apellidoEmp = '$apellido',telefonoEmp = '$telefono',direccionEmp = '$direccion',correoEmp = '$email',fechanacEmp = '$fechanac' WHERE user = '$user'");
    }
}

?>