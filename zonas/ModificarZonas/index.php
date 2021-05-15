<?php 
session_start();
if (isset($_SESSION['usuario'])) {
require_once '../../estructura/menu2.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
            <form action="../../PuertaTrasera/ProcesoModificarZonas.php?id=<?php echo $_GET['id']; ?>" method="post"><?php //Recibiendo desde metodo get el id de el formulario zonas.php?>
                <label for="NombreZona" title="Modificar Nombre de a zona">Ingrese el nuevo nombre de la zona</label>
                <input type="text" name="NombreZona" id="NombreZona" class="form-control" placeholder="Nombre Zona">
                <br> <input type="submit" value="Modificar" class="btn btn-outline-primary" name="btnModificarZona">
            </form>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
</div>
<?php require_once '../../estructura/inferior.php'; 
}else {
    header('Location:../../');
}
?>