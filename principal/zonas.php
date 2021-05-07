<?php
require_once '../estructura/superior.php';
require_once '../clases/AbrirZonas.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
            <form action="zonas.php" method="post">
                <label for="nombrezona" title="Nombre de nueva zona">Nombre Zona</label>
                <input type="text" name="nombrezona" id="nombrezona" class="form-control" placeholder="Nombre de nueva zona"> <br />
                <button type="submit" name="btnagregarzona" class="btn btn-outline-secondary btn-lg">Agregar Zona</button>
            </form>
        </div>
        <div class="col-12 col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            <center>Numero de zona</center>
                        </th>
                        <th>
                            <center>Nombre de la zona</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php

    if (isset($_POST['btnagregarzona'])) {
        $AbrirZonas = new AbrirZonas($_POST['nombrezona']);
        $AbrirZonas->insertarzona();
    }
    ?>
</div>

<?php require_once '../estructura/inferior.php'; ?>