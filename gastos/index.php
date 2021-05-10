<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
    require_once '../clases/Conexion.php';
    require_once '../clases/ConsultarTotales.php';
?>
    <div class="container-fluid">
        <center>
            <h1><i>Gastos</i></h1>
        </center>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
                <form action="gastos.php" method="post">
                    <label for="fijos">Gastos Fijos</label>
                    <input type="number" name="fijos" id="fijos" placeholder="Ingrese Gastos fijos" title="Gastos fijos" class="form-control"></br>
                    <label for="variables">Gastos Variables</label>
                    <input type="number" name="variables" id="variables" placeholder="Ingrese Gastos Variables" title="Gastos Variables" class="form-control">
                    </br>
                    <center><button class="btn btn-outline-secondary btn-lg"><i class="fas fa-cash-register"></i></button></center>
                </form>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 table-responsive">
                <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
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
                        $conexion = new Conexion();
                        $consultartotal = new ConsultarTotales();
                        $resultado = mysqli_query($conexion->EstablecerConexion(), $consultartotal->Consulta());
                        while ($rows = mysqli_fetch_array($resultado)) :
                        ?>
                            <tr>
                                <td>
                                    <center><?= $rows['cantidad']; ?></center>
                                </td>
                                <td>
                                    <center><?= $rows['estado']; ?></center>
                                </td>
                                <td>
                                    <center><?= $rows['fechatotal']; ?></center>
                                </td>
                                <td><center>
                                    <form action="../PuertaTrasera/ProcesoEliminarTotalSinCuadre.php?idTotal=<?= $rows['idtotal']; ?>" method="post"><?php //Enviando Datos por metodo Get el id del total para eliminar el total en la clase EliminarTotal, usando el ProcesoEliminarTotalSinCuadre?>
                                    <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </center></td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>

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