<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
?>
    <div class="container-fluid">
        <center>
            <h1><i>Consultar y Agregar Categorias</i></h1>
        </center>
        <div class="row">
            <div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-12 col-sm-5 col-md-5 col-lg-5 table-responsive shadow p-3 mb-5 bg-body rounded">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    Categorias
                                </center>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-12 col-sm-5 col-md-5 col-lg-5 shadow p-3 mb-5 bg-body rounded">
                <form action="" method="post">
                    <label for="nomcategoria">Nombre Categorias</label><br/><br/>
                    <input type="text" name="nomcategoria" id="nomcategoria" class="form-control" placeholder="Ingrese Nombre" required="required"><br/>
                    <input type="submit" value="Agregar Categoria" class="btn btn-outline-success">
                </form>
            </div>
            <div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
        </div>
    </div>
<?php
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>