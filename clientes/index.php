<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../clases/Conexion.php';
    require_once '../clases/ConsultarClientes.php';
    require_once '../estructura/superior.php';
?>
    <div class="container-fluid">
        <div class="row">
            <center>
                <h1><i>Consultar y Modificar Clientes</i></h1>
            </center>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 table-responsive shadow p-3 mb-5 bg-body rounded border">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="./?pg=5&nomCl=<?= $_GET['nomCl']; ?>">5</a></li>
                            <li class="page-item"><a class="page-link" href="./?pg=25&nomCl=<?= $_GET['nomCl']; ?>">25</a></li>
                            <li class="page-item"><a class="page-link" href="./?pg=50&nomCl=<?= $_GET['nomCl']; ?>">50</a></li>
                            <li class="page-item"><a class="page-link" href="./?pg=100&nomCl=<?= $_GET['nomCl']; ?>">100</a></li>
                            <li class="page-item"><a class="page-link" href="./?pg=500&nomCl=<?= $_GET['nomCl']; ?>">500</a></li>
                            <li class="page-item"><a class="page-link" href="./?pg=5000&nomCl=<?= $_GET['nomCl']; ?>">todos</a></li>
                        </ul>
                    </nav>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <center>Ver</center>
                                </th>
                                <th>
                                    <center>Nombre</center>
                                </th>
                                <th>
                                    <center>Negocio</center>
                                </th>
                                <th>
                                    <center>Accion</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conexion = new Conexion();
                            $consulta = new ConsultarClientes($_GET['pg'], $_GET['nomCl']);
                            $resultado = mysqli_query($conexion->EstablecerConexion(), $consulta->consultacliente());
                            while ($row = mysqli_fetch_array($resultado)) :
                            ?>
                                <tr>
                                    <td>
                                        <center><a href="../PuertaTrasera/ProcesoMostrarCliente.php?idCl=<?= $row['idCl']; ?>"><button class="btn btn-outline-primary btn-sm"><i class="far fa-eye"></i></button></a></center>
                                    </td>
                                    <td>
                                        <center><?= $row['nombreCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $row['nombrenegocio']; ?></center>
                                    </td>
                                    <td>
                                        <center><a href="ActualizacionDatosCliente/?idCl=<?= $row['idCl']; ?>"><button class="btn btn-outline-dark btn-sm"><i class="far fa-edit"></i></button></a><a href="../PuertaTrasera/ProcesoEliminarCliente.php?idCl=<?= $row['idCl']; ?>"><button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></button></a></center>
                                    </td>
                                </tr>
                            <?php
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="row border">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="text-start">
                            <i>Documento:</i>
                            <b class="text-danger">
                                <i><?= $_GET['doc'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Nombre:</i>
                            <b class="text-danger">
                                <i><?= $_GET['nombre'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Apellido:</i>
                            <b class="text-danger">
                                <i><?= $_GET['apellido'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Negocio:</i>
                            <b>
                                <i class="text-danger"><?= $_GET['negocio'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Ciudad:</i>
                            <b>
                                <i class="text-danger"><?= $_GET['ciudad'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Direccion:</i>
                            <b>
                                <i class="text-danger"><?= $_GET['direccion'] ?></i>
                            </b>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="text-start">
                            <i>Barrio:</i>
                            <b>
                                <i class="text-danger"><?= $_GET['barrio'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Correo</i>
                            <b>
                                <i class="text-danger"><?= $_GET['correo'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Telefono</i>
                            <b>
                                <i class="text-danger"><?= $_GET['telefono'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Fecha</i>
                            <b>
                                <i class="text-danger"><?= $_GET['fecha'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Cod Zona</i>
                            <b>
                                <i class="text-danger"><?= $_GET['zona'] ?></i>
                            </b>
                        </p>
                        <p class="text-start">
                            <i>Usuario</i>
                            <b>
                                <i class="text-primary"><?= $_GET['user'] ?></i>
                            </b>
                        </p>
                    </div>
                </div><br />
                <form action="../PuertaTrasera/ProcesoBuscarClientePorNombre.php" method="post">
                    <div class="row border">
                        <div class="col-12 col-6 col-sm-5 col-md-5 col-lg-5">
                            <label for="doc">Ingrese Nombre</label>
                        </div>
                        <div class="col-12 col-6 col-sm-5 col-md-5 col-lg-5">
                            <input type="text" name="doc" id="doc" class="form-control" placeholder="Ingrese Nombre">
                        </div>
                        <div class="col-12 col-sm-2 col-md-2 col-lg-2"><button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>