<?php 
require_once 'Conexion.php';
class IngresarCompras  
{
    private $NumeroFactura;
    private $Prefijo;
    private $Cantidad;
    private $ValorUnitario;
    private $FechaCompra;
    private $Total;
    private $Descripcion;

    public function __construct($NumeroFactura,$Prefijo,$Cantidad,$ValorUnitario,$FechaCompra,$Total,$Descripcion) {
        $this->NumeroFactura = $NumeroFactura;
        $this->Prefijo = $Prefijo;
        $this->Cantidad = $Cantidad;
        $this->ValorUnitario = $ValorUnitario;
        $this->FechaCompra = $FechaCompra;
        $this->Total = $Total;
        $this->Descripcion = $Descripcion;
    }

    public function IngresarCompras(){
        $NumeroFactura = $this->NumeroFactura;
        $Prefijo = $this->Prefijo;
        $Cantidad = $this->Cantidad;
        $ValorUnitario = $this->ValorUnitario;
        $FechaCompra = $this->FechaCompra;
        $Total = $this->Total;
        $Descripcion = $this->Descripcion;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO compras(NumeroFactura,Prefijo,Cantidad,ValorUnitario,FechaCompra,Total,Descripcion) VALUES('$NumeroFactura','$Prefijo','$Cantidad','$ValorUnitario','$FechaCompra','$Total','$Descripcion')");
        echo "Compras ingresadas correctamente";
    }
}
