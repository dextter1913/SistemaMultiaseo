<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
?>
    <div class="container-fluid">
        <div class="row">
            <center>
                <h1><i>Consultar y Modificar Clientes</i></h1>
            </center>
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 table-responsive">
                <div class="container">
                    <div class="row shadow p-3 mb-5 bg-body rounded border">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <center>Doc</center>
                                    </th>
                                    <th>
                                        <center>Nombre</center>
                                    </th>
                                    <th>
                                        <center>Apellido</center>
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
                                <tr>
                                    <td>
                                        <center></center>
                                    </td>
                                    <td>
                                        <center></center>
                                    </td>
                                    <td>
                                        <center></center>
                                    </td>
                                    <td>
                                        <center></center>
                                    </td>
                                    <td>
                                        <center></center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-7 col-lg-7">
                <div class="container">
                    <div class="row border">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <h5><i>Documento</i></h5>
                            <h5><i>Nombre</i></h5>
                            <h5><i>Apellido</i></h5>
                            <h5><i>Negocio</i></h5>
                            <h5><i>Ciudad</i></h5>
                            <h5><i>Direccion</i></h5>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <h5><i>Barrio</i></h5>
                            <h5><i>Correo</i></h5>
                            <h5><i>Telefono</i></h5>
                            <h5><i>Fecha</i></h5>
                            <h5><i>Cod Zona</i></h5>
                            <h5><i>Usuario</i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>