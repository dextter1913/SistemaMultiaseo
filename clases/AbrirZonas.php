<?php 
require_once '../clases/Conexion.php';
    class AbrirZonas  
    {
        
        private $nombrezona;

        public function __construct($nombrezona) {
            $this->nombrezona = $nombrezona;
        }

        public function insertarzona(){
            $conexion = new Conexion();
            $nombrezona = $this->nombrezona;
            $conexion->EstablecerConexion()->query("INSERT INTO zonas(nombrezona) VALUES('$nombrezona')");
            echo "<center>zona agregada correctamente</center>";
            $consultazona = mysqli_query($conexion->EstablecerConexion(), "SELECT idzona FROM zonas ORDER by idzona DESC LIMIT 1");
            $resultado = mysqli_fetch_array($consultazona);
            echo '<center>Numero de zona <b>'.$resultado['idzona'].'</b></center>';
            

        }
    }
    
?>