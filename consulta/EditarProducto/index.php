<?php
session_start();
if (isset($_SESSION['usuario'])) {
require_once '../../estructura/menu2.php';
require_once '../../clases/ConsultarProducto.php';
require_once '../../clases/Conexion.php';
$MostrarProductos = new ConsultarProducto($_GET['id']);
$conexion = new Conexion();
$consulta = mysqli_query($conexion->EstablecerConexion(), $MostrarProductos->QuerySeleccionarProducto());
$rows = mysqli_fetch_assoc($consulta);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 border shadow p-3 mb-5 bg-body rounded">
        <center><h1><i>Modificar Productos</i></h1></center>
            <form action="../../PuertaTrasera\ProcesoActualizarProducto.php?id=<?= $_GET['id'] ?>" method="post">
            <label for="NombreProducto">Nombre Producto</label>
            <input type="text" name="NombreProducto" id="NombreProducto" class="form-control" value="<?= $rows['nomProd'] ?>">
            <label for="Costo">Costo</label>
            <input type="text" name="Costo" id="Costo" class="form-control" value="<?= $rows['precioProd'] ?>">
            <label for="PrecioVenta">Precio Venta</label>
            <input type="text" name="PrecioVenta" id="PrecioVenta" class="form-control" value="<?= $rows['precioVenta'] ?>">
            <label for="DescripcionProducto">Descripcion</label>
            <textarea name="DescripcionProducto" id="DescripcionProducto" class="form-control"><?= $rows['descripcionProd'] ?></textarea><br>
            <input type="submit" value="Guardar" class="btn btn-outline-success btn-sm">
            </form>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
    </div>
</div>

<?php 
    require_once '../../estructura/inferiorsubcarpetas.php';
} else {
    header('Location:../');
} ?>