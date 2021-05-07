<?php 
require_once '../estructura/superior.php';
require_once '../clases/AbrirZonas.php';
?>
<div class="container-fluid">
    <form action="zonas.php" method="post">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
                <label for="nombrezona" title="Nombre de nueva zona">Nombre Zona</label>
                <input type="text" name="nombrezona" id="nombrezona" class="form-control" placeholder="Nombre de nueva zona"> <br />
                <button type="submit" name="btnagregarzona" class="btn btn-outline-secondary btn-lg">Agregar Zona</button>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
        </div>
    </form>
    <?php

    if (isset($_POST['btnagregarzona'])) {
        $AbrirZonas = new AbrirZonas($_POST['nombrezona']);
        $AbrirZonas->insertarzona();
    }
    ?>
</div>

<?php require_once '../estructura/inferior.php'; ?>