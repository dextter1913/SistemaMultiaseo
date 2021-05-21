<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
    require_once '../clases/Conexion.php';
    require_once '../clases/ConsultarZonas.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-10 col-md-10">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <div class="col-4 col-md-4"></div>
                                <div class="col-4 col-md-4">
                                    <h3><b><i>Registrar Cientes Nuevos</i></b></h3>
                                </div>
                                <div class="col-4 col-md-4"></div>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="shadow p-3 mb-5 bg-body rounded">
                                    <form action="../Ingresar-Clientes/" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-2">
                                                <label for="id">Documento</label>
                                                <input type="text" name="id" id="id" class="form-control" placeholder="Documento" required="required">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                                <label for="nombre">Nombre</label>
                                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                                <label for="apellido">Apellido</label>
                                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                                <label for="nombrenegocio">Nombre Negocio</label>
                                                <input type="text" name="nombrenegocio" id="nombrenegocio" class="form-control" placeholder="Nombre Negocio" required="required">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-12 col-md-3">
                                                <label for="inputState">Ciudad</label>
                                                <select id="inputState" class="form-select" name="ciudad" required="required">
                                                    <option selected>Seleccionar</option>
                                                    <option>Bello Antioquia</option>
                                                    <option>Envigado Antioquia</option>
                                                    <option>Itagüí Antioquia</option>
                                                    <option>Medellín Antioquia</option>
                                                    <option>Rionegro Antioquia</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label for="direccion">Direccion</label>
                                                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" required="required">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                                <label for="barrio">Barrio</label>
                                                <input type="text" name="barrio" id="barrio" placeholder="Ingrese el Barrio" class="form-control" required="required">
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label for="correo">Correo</label>
                                                <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" required="required">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                                <label for="telefono">Telefono</label>
                                                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required="required">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                                <label for="fechanac">Fecha Nacimiento</label>
                                                <input type="date" name="fechanac" id="fechanac" class="form-control" required="required">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                                <label for="usuario">Usuario</label>
                                                <input type="text" name="usuario" id="usuario" class="form-control" value="<?= $_SESSION['usuario']; ?>" required="required" disabled="disabled">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                                <label for="inputStatezona">zona</label>
                                                <select id="inputStatezona" class="form-select" name="zona" required="required">
                                                    <?php
                                                            $conexion = new Conexion();
                                                            $consulta = new ConsultarZonas();
                                                            $resultados = mysqli_query($conexion->EstablecerConexion(),$consulta->MostrarZonas());
                                                            while ($rows = mysqli_fetch_array($resultados)) :   
                                                    ?>
                                                    <option><?= $rows['idzona'].' '.$rows['nombrezona']; ?></option>
                                                    <?php 
                                                    endwhile; 
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-1 col-lg-1">
                                                <input type="submit" value="Registrar" class="btn btn-outline-success btn-lg" name="btningresarcliente">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1 col-md-1">
        </div>
        <?php //estableciendo conexion y insertando los datos
        if (isset($_POST['btningresarcliente'])) {
            require_once '../clases/InsertarCliente.php';
            $ingresarCliente = new InsertarCliente($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['nombrenegocio'], $_POST['ciudad'], $_POST['direccion'], $_POST['barrio'], $_POST['correo'], $_POST['telefono'], $_POST['fechanac'], $_POST['zona'], $_SESSION['usuario']);
            $ingresarCliente->Insertar();
        }
        ?>
    </div>
<?php
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>