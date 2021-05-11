<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
?>
    <center>
        <h1><i>Ingresar Facturas de Compras</i></h1>
    </center>
    <div class="container-fluid">
        <div class="row shadow-lg p-3 mb-5 bg-body rounded">
            <div class="col-12 col-sm-2 col-md-2 col-lg-2">
                <center>
                    <button type="button" class="btn btn-outline-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus"></i>
                    </button>
                    <?php require_once '../estructura/Modalingresarcompras.php'; ?>
                </center>
            </div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 table-responsive">
                <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr>
                            <th>
                                <center>Prefijo</center>
                            </th>
                            <th>
                                <center>Numero de Factura</center>
                            </th>
                            <th>
                                <center>Cantidad Unitaria</center>
                            </th>
                            <th>
                                <center>Valor Unitario</center>
                            </th>
                            <th>
                                <center>Descripcion</center>
                            </th>
                            <th>
                                <center>Total</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><center></center></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php
    ////fecha de factura, numero de factura, descripcion, cantidad, valor unitario, y total,
    ?>

<?php
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>