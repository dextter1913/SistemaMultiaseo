<?php
session_start();
if (isset($_SESSION['usuario'])) {

    require_once '../estructura/superior.php';
?>
    <div class="container">
    <center><h1><i>Cambio de contraseña</i></h1></center>
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 border">
                <form action="../PuertaTrasera/ProcesoCambiarContraseña.php" method="post">
                    <label for="contraseña">Nueva contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Ingresar" class="form-control" required="required">
                    <label for="ConfirmacionContraseña">Confirme la nueva contraseña</label>
                    <input type="password" name="ConfirmacionContraseña" id="ConfirmacionContraseña" placeholder="Ingresar" class="form-control" required="required"><br>
                    <input type="submit" value="Cambiar" class="btn btn-outline-dark">
                </form>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4"></div>
        </div>
    </div>
<?php
if (isset($_SESSION['Mensaje'])) {
    print $_SESSION['Mensaje'];
    unset($_SESSION['Mensaje']);
}
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>