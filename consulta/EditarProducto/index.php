<?php
require_once '../../clases/ConsultarProducto.php';
$MostrarProductos = new ConsultarProducto($_GET['id']);
$conexion = new Conexion();
$consulta = mysqli_query($conexion->EstablecerConexion(), $MostrarProductos->QuerySeleccionarProducto());
$rows = mysqli_fetch_assoc($consulta);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <form action="../../PuertaTrasera/ProcesoActualizarInformacionProducto.php" method="post">
            
            </form>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
    </div>
</div>