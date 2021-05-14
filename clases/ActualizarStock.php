<?php 
require_once 'Conexion.php';
class ActualizarStock  
{
    private $id;
    private $Stock;

    public function __construct($id,$Stock) {
        $this->id = $id;
        $this->Stock = $Stock;
    }

    private function Consulta(){
        $id = $this->id;
        $consulta = "SELECT * from productos WHERE idProd = '$id'";
        return $consulta;
    }

    private function GuardandoResultadoConsulta(){
        $conexion = new Conexion();
        $resultado = mysqli_query($conexion->EstablecerConexion(),$this->Consulta());
        $StockActual = mysqli_fetch_array($resultado);
        return  $StockActual;
    }

    private function SumaNuevoStock(){
        $suma = $this->GuardandoResultadoConsulta()['Stock'] + $this->Stock;
        return $suma;
    }

    public function InsertarNuevoStock(){
        $id = $this->id;
        $NuevoStock = $this->SumaNuevoStock();
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("UPDATE productos SET Stock = '$NuevoStock' WHERE idProd = '$id'");
    }


}


?>