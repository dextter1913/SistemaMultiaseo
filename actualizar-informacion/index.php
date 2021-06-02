<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
    require_once '../clases/ConsultarEmpleado.php';
    $Consultar = new ConsultarEmpleado($_SESSION['usuario']);

?>

    <center><strong><?= $_SESSION['usuario']; ?></center></strong>
    <div class="container">
        <form action="../PuertaTrasera/ProcesoActualizarEmpleado.php" method="post">
            <div class="row shadow p-3 mb-5 bg-body rounded">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <label for="idEmpleado" title="Ingrese el ID">Identidad Empleado</label>
                    <input type="text" name="idEmpleado" id="idEmpleado" value="<?= $Consultar->MostrandoDatosGuardados()['idEmp']; ?>" class="form-control">
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <label for="nombre" title="Nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?= $Consultar->MostrandoDatosGuardados()['nombreEmp']; ?>"  class="form-control">
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <label for="apellido" title="Apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="<?= $Consultar->MostrandoDatosGuardados()['apellidoEmp']; ?>" class="form-control">
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <label for="telefono" title="Telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" value="<?= $Consultar->MostrandoDatosGuardados()['telefonoEmp']; ?>" class="form-control">
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <label for="direccion" title="Direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" value="<?= $Consultar->MostrandoDatosGuardados()['direccionEmp']; ?>" class="form-control">
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $Consultar->MostrandoDatosGuardados()['correoEmp']; ?>">              
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <label for="fechanac" title="Fecha Nacimiento">Fecha Nacimiento</label>
                    <input type="date" name="fechanac" id="fechanac" class="form-control"><br/>
                    <input type="submit" value="Guardar" class="btn btn-outline-success btn-lg">
                </div>
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