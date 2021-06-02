<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
    require_once '../clases/Conexion.php';
    require_once '../clases/ConsultarTotales.php';
    require_once '../clases/CuadreCaja.php';
    $conexion = new Conexion();
    $consultartotal = new ConsultarTotales();
?>
    <div class="container-fluid">
        <center>
            <h1><i>Gastos</i></h1>
        </center>
        <?php
        if (isset($_SESSION['Mensaje'])) {
            print $_SESSION['Mensaje'];
            unset($_SESSION['Mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
                <center>
                    <h6><i>Gastos que se requieren descontar</i></h6>
                </center>
                <form action="../PuertaTrasera/ProcesoCambioEstadoTotales.php" method="post">
                    <label for="fijos">Gastos Fijos</label>
                    <input type="number" name="fijos" id="fijos" placeholder="Ingrese Gastos fijos" title="Gastos fijos" class="form-control" required="required"></br>
                    <label for="variables">Gastos Variables</label>
                    <input type="number" name="variables" id="variables" placeholder="Ingrese Gastos Variables" title="Gastos Variables" class="form-control" required="required">
                    </br>
                    <center><button class="btn btn-outline-secondary btn-lg"><i class="fas fa-cash-register"></i></button></center>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 table-responsive">
                <center>
                    <h6><i>Totales sin cuadrar</i></h6>
                </center>
                <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <th>
                                <center>Seleccion</center>
                            </th>
                            <th>
                                <center>Cantidad</center>
                            </th>
                            <th>
                                <center>Estado</center>
                            </th>
                            <th>
                                <center>Total</center>
                            </th>
                            <th>
                                <center>Acciones</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion->EstablecerConexion(), $consultartotal->ConsultaSinCuadre());
                        while ($rows = mysqli_fetch_array($resultado)) :
                        ?>
                            <tr>
                                <td>
                                    <center><input type="checkbox" name="idtotal[]" value="<?= $rows['idtotal']; ?>" class="btn-check-input">
                                    </center>
                                    </form>
                                </td>
                                <td>
                                    <center><?= number_format($rows['cantidad']); ?></center>
                                </td>
                                <td>
                                    <center><?= $rows['estado']; ?></center>
                                </td>
                                <td>
                                    <center><?= $rows['fechatotal']; ?></center>
                                </td>
                                <td>
                                    <center>
                                        <a href="../PuertaTrasera/ProcesoEliminarTotalSinCuadre.php?idTotal=<?= $rows['idtotal']; ?>" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </a><?php //Enviando Datos por metodo Get el id del total para eliminar el total en la clase EliminarTotal, usando el ProcesoEliminarTotalSinCuadre                                                                                                           
                                            ?>
                                    </center>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
                    <center>
                        <h6><i>Totales Cuadrados</i></h6>
                    </center>
                    <thead>
                        <tr>
                            <th>
                                <center>ID</center>
                            </th>
                            <th>
                                <center>Cantidad</center>
                            </th>
                            <th>
                                <center>Estado</center>
                            </th>
                            <th>
                                <center>Total</center>
                            </th>
                            <th>
                                <center>Acciones</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion->EstablecerConexion(), $consultartotal->ConsultaConCuadre());
                        while ($rows = mysqli_fetch_array($resultado)) :
                        ?>
                            <tr>
                                <td>
                                    <center><?= $rows['idtotal']; ?></center>
                                </td>
                                <td>
                                    <center><?= number_format($rows['cantidad']); ?></center>
                                </td>
                                <td>
                                    <center><?= $rows['estado']; ?></center>
                                </td>
                                <td>
                                    <center><?= $rows['fechatotal']; ?></center>
                                </td>
                                <td>
                                    <center>
                                        <a href="../PuertaTrasera/ProcesoEliminarTotalConCuadre.php?idTotal=<?= $rows['idtotal']; ?>" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </a><?php //Enviando Datos por metodo Get el id del total para eliminar el total en la clase EliminarTotal, usando el ProcesoEliminarTotalSinCuadre
                                            ?>
                                    </center>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <?php
            $fijos = $_POST['fijos'];
            $variables = $_POST['variables'];
            ?>
        </div>
    </div>


<?php require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>