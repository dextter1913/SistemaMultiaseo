<?php require_once '../estructura/superior.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
            <form action="zonas.php" method="post">
                <label for="nombrezona" title="Nombre de nueva zona">Nombre Zona</label>
                <input type="text" name="nombrezona" id="nombrezona" class="form-control" placeholder="Nombre de nueva zona"> <br/>
                <button type="submit" class="btn btn-outline-secondary btn-lg">Agregar Zona</button>
            </form>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
</div>

<?php require_once '../estructura/inferior.php' ?>