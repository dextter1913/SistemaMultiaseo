<?php 
class ConsultaFacturas  
{
    private $criterio;

    public function __construct($criterio) {
        $this->criterio = $criterio;
    }

    public function consulta(){
        $criterio = $this->criterio;
        $consulta = "SELECT idventa, nomProd, nomCategoria, cantidad, totalV, Estadoventa, nombreCl, apellidoCl, Nfactura, fechaFactura FROM venta 
        INNER JOIN productos ON productos.idProd = venta.producto 
        INNER JOIN cliente ON cliente.idCl = venta.cliente 
        INNER JOIN facturaVentas ON facturaVentas.Nfactura = venta.Factura
        WHERE Factura = '$criterio'";
        return $consulta;
    }
}


?>