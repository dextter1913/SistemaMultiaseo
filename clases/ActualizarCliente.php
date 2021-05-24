<?php
require_once 'Persona.php';
require_once 'Conexion.php';

class ActualizarCliente  extends Persona
{
    private $_nomnegocio;
    private $_barrio;
    private $_idzona;

    public function __construct($_id, $_nombre, $_apellido, $_nomnegocio, $_ciudad, $_direccion, $_barrio, $_correo, $_telefono, $_idzona)
    {
        $this->_id = $_id;
        $this->_nombre = $_nombre;
        $this->_apellido = $_apellido;
        $this->_nomnegocio = $_nomnegocio;
        $this->_ciudad = $_ciudad;
        $this->_direccion = $_direccion;
        $this->_barrio = $_barrio;
        $this->_correo = $_correo;
        $this->_telefono = $_telefono;
        $this->_idzona = $_idzona;
    }

    public function ActualizarCliente()
    {
        $conexion = new Conexion();
        $_id = $this->_id;
        $_nombre = $this->_nombre;
        $_apellido = $this->_apellido;
        $_nomnegocio = $this->_nomnegocio;
        $_ciudad = $this->_ciudad;
        $_direccion = $this->_direccion;
        $_barrio = $this->_barrio;
        $_correo = $this->_correo;
        $_telefono = $this->_telefono;
        $_idzona = $this->_idzona;
        $conexion->EstablecerConexion()->query("UPDATE cliente SET nombreCl = '$_nombre', apellidoCl = '$_apellido', nombrenegocio = '$_nomnegocio', ciudadCl = '$_ciudad', direccionCl = '$_direccion', barrio = '$_barrio', correoCl = '$_correo', telefonoCl = '$_telefono', idzona = '$_idzona' WHERE idCl = '$_id'");
    }
}
