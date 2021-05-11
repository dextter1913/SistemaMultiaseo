<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
    require_once '../clases/Conexion.php';
    require_once '../clases/ConsultarZonas.php';
?>
    <div class="container">
        <div class="row shadow p-3 mb-5 bg-body rounded">
            <center>
                <h1><i>Ingresar y consultar zonas</i></h1>
            </center>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <form action="../PuertaTrasera/ProcesoIngresarZona.php" method="post">
                    <label for="nombrezona" title="Nombre de nueva zona">Nombre Zona</label>
                    <input type="text" name="nombrezona" id="nombrezona" class="form-control" placeholder="Nombre de nueva zona"> <br />
                    <button type="submit" name="btnagregarzona" class="btn btn-outline-secondary btn-lg">Agregar Zona</button>
                </form>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 table-responsive">
                <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <th>
                                <center>Numero de zona</center>
                            </th>
                            <th>
                                <center>Nombre de la zona</center>
                            </th>
                            <th>
                                <center>Seleccionar</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $consultarxonas = new ConsultarZonas();
                        $conexion = new Conexion();
                        $resultado = mysqli_query($conexion->EstablecerConexion(), $consultarxonas->MostrarZonas());
                        while ($row = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <td>
                                    <center><?= $row['idzona']; ?></center>
                                </td>
                                <td>
                                    <center><?= $row['nombrezona']; ?></center>
                                </td>
                                <td>
                                    <center><a href="ModificarZonas/?id=<?= $row['idzona']; ?>"><button class="btn btn-outline-warning" title="Modificar Zona"><i class="fas fa-pencil-alt"></i></button></a><a href="../PuertaTrasera/ProcesoEliminarZona.php?id=<?= $row['idzona']; ?>"><button class="btn btn-outline-danger" title="Eliminar Zona"><i class="fas fa-trash-alt"></i></button></a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <form action="" method="post"></form>
            </div>
        </div>
    </div>

<?php require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>