<?php 
require_once 'Conexion.php';
    class BuscarCliente
    {
        private $_id;//atributo que recibe el id 

        public function __construct($_id) {
            $this->_id = $_id; //llevando el id del cliente

        }
        public function ConsultaTabla(){ // Metodo que consulta el query
            $consulta = "SELECT * FROM cliente WHERE idCl = '$this->_id' OR nombreCl like '%$this->_id%'";
            return $consulta;
        }

        public function ConsultaIngresarFactura(){//Metodo para consultar Factura usando query
            $conexion = new Conexion();
            $ConsultaFactura = "SELECT * FROM facturaVentas ORDER by Nfactura DESC LIMIT 1;";//Consulta para consultar Factura 
            $resultadoFactura = mysqli_query($conexion->EstablecerConexion(), $ConsultaFactura);//Ejecucion y guardado del query en la variable Facturacion
            $FacturacionQuery = mysqli_fetch_array($resultadoFactura);
            return $FacturacionQuery;

        }

    }
    



?>