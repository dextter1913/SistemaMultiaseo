<?php
if (session_start()) {
require_once '../estructura/superior.php';
require_once '../clases/ConsultarProducto.php';
require_once '../clases/Conexion.php';
?>

<form action="consulta.php" method="post">
    <div class="container-fluid">
        <center>
            <h1><i>Busqueda de Productos</i></h1>
        </center>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
                <label for="producto" title="Busqueda de Productos">Producto</label>
                <input type="text" name="producto" id="producto" class="form-control" placeholder="Criterio de busqueda">
                </br>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4"><button type="submit" class="btn btn-outline-danger btn-lg" name="btnBuscarProductos">Buscar</button></div>
            </div>
        </div>
    </div>
</form>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-4 col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-4 col-md-10 col-lg-10 table-responsive">
            <?php
            if (isset($_POST['btnBuscarProductos'])) {
                $consulta = new ConsultarProducto($_POST['producto']);
                $conexion = new Conexion();
                $total = mysqli_query($conexion->EstablecerConexion(), $consulta->QuerySeleccionarProducto())
            ?>
                <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <th>
                                <center>ID</center>
                            </th>
                            <th>
                                <center>Nombre</center>
                            </th>
                            <th>
                                <center>Precio</center>
                            </th>
                            <th>
                                <center>Categoria</center>
                            </th>
                            <th>
                                <center>Descripcion</center>
                            </th>
                            <th>
                                <center>Cantidad Disponibles</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($resultado = mysqli_fetch_array($total)) {
                        ?>
                            <tr>
                                <td>
                                    <center><?php echo $resultado['idProd']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $resultado['nomProd']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $resultado['precioVenta']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $resultado['nomCategoria']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $resultado['descripcionProd']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $resultado['Stock']; ?></center>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>
        <div class="col-12 col-sm-4 col-md-1 col-lg-1"></div>
    </div>
</div>

<?php 
require_once '../estructura/inferior.php'; 
} else {
    header('Location:../index.php');
}?>