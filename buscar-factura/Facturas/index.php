<?php
session_start();
if (isset($_SESSION['usuario'])) {
    include("../../estructura/menu2.php");
    include("../../conexiones/abrir.php");
?>
    <?php
    $criterio = $_GET['criterio'];
    require_once '../../conexiones/ConsultaFacturas.php';
    ?>
    <form action="../../PuertaTrasera/ProcesoFacturando.php?criterio=<?php echo $criterio; ?>" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 col-md-1"></div>
                <div class="col-10 col-md-10">
                    <center>
                        <h1><i>Factura</i></h1>
                    </center>
                    <div class="shadow-lg p-1 mb-1 bg-body rounded">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>
                                            <center>ID Venta</center>
                                        </th>
                                        <th>
                                            <center>Producto</center>
                                        </th>
                                        <th>
                                            <center>Tipo</center>
                                        </th>
                                        <th>
                                            <center>Cantidad Unidad</center>
                                        </th>
                                        <th>
                                            <center>Total</center>
                                        </th>
                                        <th>
                                            <center>Fecha Factura</center>
                                        </th>
                                        <th>
                                            <center>Numero de Factura</center>
                                        </th>
                                        <th>
                                            <center>Estado Actual</center>
                                        </th>
                                        <th>
                                            <center>Seleccionar</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($rows = mysqli_fetch_array($registros)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $rows['idventa']; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $rows['nomProd']; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $rows['nomCategoria']; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $rows['cantidad']; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $rows['totalV']; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $rows['fechaFactura']; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $rows['Nfactura']; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $rows['Estadoventa']; ?></center>
                                            </td>
                                            <td>
                                                <center><input type="checkbox" name="IdVenta[]" value="<?php echo $rows['idventa']; ?>" type="checkbox" class="btn-check" id="btn-check">
                                                    <label class="btn btn-outline-success btn-sm" for="btn-check"><i class="far fa-check-circle"></i></label>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php
                                        $total = $total + $rows['totalV'];
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $total; ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <select id="categoria" class="form-select" name="EstadoVenta">
                                                <option selected>Pendiente</option>
                                                <option>Pagado</option>
                                                <option>Devuelto</option>
                                                <option>Anulado</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="Precio" title="Nuevo Precio" placeholder="Ingrese Nuevo Precio" class="form-control">
                                        </td>
                                        <td><button type="submit" class="btn btn-outline-primary btn-lg" name="btnModificarEstadoVenta"><i class="far fa-save"></i></button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="col-1 col-md-1"></div>
                </div>
            </div>
        </div>
    </form>
    <center>
        <a href="./Colilla/?criterio=<?= $criterio; ?>&Factura= <?= $rows['fechaFactura']; ?>" target="_blank"><button class="btn btn-outline-danger btn-sm"><i class="far fa-file-pdf"></i></button></a>
    </center>
<?php
    if (isset($_SESSION['Mensaje'])) {
        print $_SESSION['Mensaje'];
        unset($_SESSION['Mensaje']);
    }

    include("../../conexiones/cerrar.php");
    require_once '../../estructura/inferiorsubcarpetas.php';
} else {
    header('Location:../../');
}
?>