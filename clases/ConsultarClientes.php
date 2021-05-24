<?php 
class ConsultarClientes  
{
    private $paginacion;
    private $nomCl;

    public function __construct($paginacion,$nomCl) {
        $this->paginacion = $paginacion;
        $this->nomCl = $nomCl;
    }

    public function consultacliente(){
        $paginacion = $this->paginacion;
        $nomCl = $this->nomCl;
        $consulta = "SELECT * FROM cliente WHERE nombreCl like '$nomCl%' OR nombrenegocio like '$nomCl%' ORDER BY fechanacCl DESC LIMIT $paginacion";
        return $consulta;
    }
}


?>