<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../../estructura/menu2.php';
    require_once '../../clases/Conexion.php';
    require_once '../../clases/ConsultarProducto.php';
?>
    <div class="container-fluid">
    <center><h1><i>Actualizar Stock</i></h1></center>
        <div class="row">
            <div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    ID Producto
                                </center>
                            </th>
                            <th>
                                <center>
                                    Nombre Producto
                                </center>
                            </th>
                            <th>
                                <center>
                                    Precio Producto
                                </center>
                            </th>
                            <th>
                                <center>
                                    Precio Venta
                                </center>
                            </th>
                            <th>
                                <center>
                                    Categoria
                                </center>
                            </th>
                            <th>
                                <center>
                                    Descripcion
                                </center>
                            </th>
                            <th>
                                <center>
                                    Stock
                                </center>
                            </th>
                            <th>
                                <center>
                                    Usuario
                                </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $MostrarProductos = new ConsultarProducto(null);
                        $conexion = new Conexion();
                        $consulta = mysqli_query($conexion->EstablecerConexion(), $MostrarProductos->QuerySeleccionarProducto());
                        while ($rows = mysqli_fetch_array($consulta)) :


                        ?>
                            <tr>
                                <th>
                                    <center>
                                        <?= $rows['idProd']; ?>
                                    </center>
                                </th>
                                <td>
                                    <center>
                                        <?= $rows['nomProd']; ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?= $rows['precioProd']; ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?= $rows['precioVenta']; ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?= $rows['nomCategoria']; ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?= $rows['descripcionProd']; ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?= $rows['Stock']; ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?= $rows['user']; ?>
                                    </center>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <form action="../../PuertaTrasera/" method="post">

                            <tr>
                                <td>
                                    <center>
                                        <label for="id">Ingrese el ID</label>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <input type="number" name="id" id="id" class="form-control" placeholder="Ingrese Id" required="required">
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <label for="Stock">Ingrese el Nuevo Stock</label>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <input type="number" name="Stock" id="Stock" class="form-control" placeholder="Nuevo Stock" required="required">
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <button type="submit" class="btn btn-outline-success btn-lg"><i class="fas fa-location-arrow"></i></button>
                                    </center>
                                </td>
                            </tr>
                        </form>
                    </tfoot>
                </table>
            </div>
            <div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
        </div>
    </div>




<?php
    require_once '../../estructura/inferior.php';
} else {
    header('Location:../');
} ?>