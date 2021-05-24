<?php
session_start();
if (isset($_SESSION['usuario'])) {
    include("../../estructura/menu2.php");
?>
    <div class="container">
        <center>
            <h1><i>Actualizacion de datos cliente</i></h1>
        </center>
        <?php
        require_once '../../clases/BuscarCliente.php';
        require_once '../../clases/Conexion.php';
        $busqueda = new BuscarCliente($_GET['idCl']);
        $conexion = new Conexion();
        $resultado = mysqli_query($conexion->EstablecerConexion(), $busqueda->ConsultarClienteAActualizar());
        while ($row = mysqli_fetch_array($resultado)) :
        ?>
            <form action="../../PuertaTrasera/ProcesoActualizarCliente.php?idCl=<?= $row['idCl']; ?>" method="post">
                <div class="row border">
                    <div class="col-12 col-6 col-md-4 col-lg-4">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $row['nombreCl']; ?>">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" value="<?= $row['apellidoCl']; ?>">
                        <label for="nombrenegocio">Nombre Negocio:</label>
                        <input type="text" name="nombrenegocio" id="nombrenegocio" class="form-control" value="<?= $row['nombrenegocio']; ?>">
                    </div>
                    <div class="col-12 col-6 col-md-4 col-lg-4">
                        <label for="ciudad">Ciudad:</label>
                        <input type="text" name="ciudad" id="ciudad" class="form-control" value="<?= $row['ciudadCl']; ?>">
                        <label for="direccion">Direccion:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" value="<?= $row['direccionCl']; ?>">
                        <label for="barrio">Barrio:</label>
                        <input type="text" name="barrio" id="barrio" class="form-control" value="<?= $row['barrio']; ?>">
                    </div>
                    <div class="col-12 col-6 col-md-4 col-lg-4">
                        <label for="correo">Correo:</label>
                        <input type="text" name="correo" id="correo" class="form-control" value="<?= $row['correoCl']; ?>">
                        <label for="telefono">Telefono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="<?= $row['telefonoCl']; ?>">
                        <label for="zona">ID Zona:</label>
                        <input type="text" name="zona" id="zona" class="form-control" value="<?= $row['idzona']; ?>"><br>
                        <input type="submit" value="Actualizar" class="btn btn-outline-dark">
                    </div>
                </div>
            </form>
        <?php endwhile; 
        if (isset($_SESSION['Mensaje'])) {
            echo $_SESSION['Mensaje'];
            unset($_SESSION['Mensaje']);
        }
        ?>
        
    </div>

<?php
    include("../../estructura/inferior.php");
} else {
    header('Location:../../');
}
?>