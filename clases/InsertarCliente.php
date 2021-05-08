<?php
require_once 'Conexion.php';
require_once 'Persona.php';
class InsertarCliente extends Persona
{
    private $_usuario;
    private $_nombrenegocio;
    private $_barrio;
    private $_zona;

    public function __construct($_id, $_nombre, $_apellido, $_nombrenegocio, $_ciudad, $_direccion, $_barrio, $_correo, $_telefono, $_fechanac, $_zona, $_usuario)
    {
        $this->_id = $_id;
        $this->_nombre = $_nombre;
        $this->_apellido = $_apellido;
        $this->_nombrenegocio = $_nombrenegocio;
        $this->_ciudad   = $_ciudad;
        $this->_direccion = $_direccion;
        $this->_barrio = $_barrio;
        $this->_correo   = $_correo;
        $this->_telefono = $_telefono;
        $this->_fechanac = $_fechanac;
        $this->_zona = $_zona;
        $this->_usuario  = $_usuario;
    }
    //insertando datos llamando la clase conexion 
    public function Insertar()
    {
        $_id = $this->_id;
        $_nombre = $this->_nombre;
        $_apellido = $this->_apellido;
        $_nombrenegocio = $this->_nombrenegocio;
        $_ciudad = $this->_ciudad;
        $_direccion = $this->_direccion;
        $_barrio = $this->_barrio;
        $_correo = $this->_correo;
        $_telefono = $this->_telefono;
        $_fechanac = $this->_fechanac;
        $_zona = $this->_zona;
        $_usuario = $this->_usuario;
        $conexion = new Conexion();
        try {
            $conexion->EstablecerConexion()->query("INSERT INTO cliente(idCl, nombreCl, apellidoCl, nombrenegocio, ciudadCl, direccionCl, barrio, correoCl, telefonoCl, fechanacCl, idzona, user) 
            VALUES('$_id','$_nombre','$_apellido','$_nombrenegocio','$_ciudad','$_direccion','$_barrio','$_correo','$_telefono','$_fechanac','$_zona','$_usuario')");
            print '<center>Cliente Agregado Correctamente</center>';
        } catch (\Throwable $e) {
            echo "No se pudo ingresar al cliente $e";
        }
    }
}
