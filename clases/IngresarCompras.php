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
    private $idtotal;

    public function __construct($NumeroFactura,$Prefijo,$Cantidad,$ValorUnitario,$FechaCompra,$Total,$Descripcion,$idtotal) {
        $this->NumeroFactura = $NumeroFactura;
        $this->Prefijo = $Prefijo;
        $this->Cantidad = $Cantidad;
        $this->ValorUnitario = $ValorUnitario;
        $this->FechaCompra = $FechaCompra;
        $this->Total = $Total;
        $this->Descripcion = $Descripcion;
        $this->idtotal = $idtotal;
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




    private function Consulta(){
        $idtotal = $this->idtotal;
        $consulta = "SELECT *  FROM totales WHERE idtotal = '$idtotal'";
        return $consulta;
    }

    private function Resultados(){
        $conexion = new Conexion();
        $resultado = mysqli_query($conexion->EstablecerConexion(),$this->Consulta());
        $rows = mysqli_fetch_array($resultado);
        return $rows;
    }

    private function Calculo(){
        $resta = $this->Resultados()['cantidad'] - $this->Total;
        return $resta;
    }

    public function ModificarCuadreCaja(){
        $conexion = new Conexion();
        $calculo = $this->Calculo();
        $idtotal = $this->idtotal;
        $conexion->EstablecerConexion()->query("UPDATE totales SET cantidad = '$calculo', estado = 'Cuadrado OK' WHERE idtotal = '$idtotal'");
    }
}
