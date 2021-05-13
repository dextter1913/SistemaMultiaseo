<?php 
require_once 'Conexion.php';
class CambiarEstadoVentaYPrecio
{
    private $_EstadoVenta;
    private $IdVenta;
    private $Precio;

    public function __construct($_EstadoVenta, $IdVenta, $Precio) {
        $this->_EstadoVenta = $_EstadoVenta;
        $this->IdVenta = $IdVenta;
        $this->Precio = $Precio;
    }
    public function CambiarEstadoVenta(){
        $_idventa = $this->IdVenta;
        $_EstadoVenta = $this->_EstadoVenta;
        echo "<center>Se modifico con Exito $_idventa, $_EstadoVenta </center>";
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("UPDATE venta  SET Estadoventa ='$_EstadoVenta' WHERE idventa = '$_idventa'");
        
        
    }
    public function CambiarPrecioVenta(){
        $_idventa = $this->IdVenta;
        $_EstadoVenta = $this->_EstadoVenta;
        $Precio = $this->Precio;
        echo "<center>Se modifico con Exito $_idventa, $_EstadoVenta </center>";
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("UPDATE venta  SET totalV ='$Precio' WHERE idventa = '$_idventa'");
    }
}

?>