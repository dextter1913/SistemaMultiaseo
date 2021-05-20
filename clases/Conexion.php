<?php 
class Conexion
{
    protected $host;
    protected $user;
    protected $pass;
    protected $db;
    protected $tbcliente;
    protected $tbempleado;
    protected $tbusuarios;
    protected $tbproductos;
    function __construct($host = "bgzdh6zz0h3xrgh672kg-mysql.services.clever-cloud.com", $user = "u5sumbtoonzzwft7", $pass = "qDL3tpVESjCR0GrABpWU", $db = "bgzdh6zz0h3xrgh672kg", $tbcliente = "cliente", $tbempleado = "empleados", $tbusuarios = "usuarios", $tbproductos = "productos")
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->tbcliente = $tbcliente;
        $this->tbempleado = $tbempleado;
        $this->tbusuarios = $tbusuarios;
        $this->tbproductos = $tbproductos;
    }

    public function EstablecerConexion()
    {
        $conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);

        error_reporting(0);

        if ($conexion->connect_errno) {
            echo "lo sentimos, no se pudo completar, en breve lo solucionaremos";
        }
        return $conexion;
    }

    function __destruct()
    {
        mysqli_close($this->EstablecerConexion());
    }
}
