<?php require_once '../estructura/superior.php'; ?>

<form action="consulta.php" method="post">
    <div class="container-fluid">
                <center><h1><i>Busqueda de Productos</i></h1></center>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
                <label for="producto" title="Busqueda de Productos">Producto</label>
                <input type="text" name="producto" id="producto" class="form-control" placeholder="Criterio de busqueda">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4"><button type="submit" class="btn btn-outline-danger btn-lg">Buscar</button></div>
            </div>
        </div>
    </div>
</form>

<?php require_once '../estructura/inferior.php'; ?>