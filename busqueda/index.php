<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../clases/BuscarCliente.php';
    include("../estructura/superior.php");
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12"></div>
            <div class="col-12 col-md-12">
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">
                                        <center> Documento</center>
                                    </th>
                                    <th scope="col">
                                        <center> Nombre</center>
                                    </th>
                                    <th scope="col">
                                        <center> Apellido</center>
                                    </th>
                                    <th scope="col">
                                        <center> Nombre Negocio</center>
                                    </th>
                                    <th scope="col">
                                        <center> Ciudad</center>
                                    </th>
                                    <th scope="col">
                                        <center> Direccion</center>
                                    </th>
                                    <th scope="col">
                                        <center>Barrio</center>
                                    </th>
                                    <th scope="col">
                                        <center> Telefono</center>
                                    </th>
                                    <th scope="col">
                                        <center> Acciones</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../clases/Conexion.php';
                                $busqueda = new BuscarCliente($_POST['id']);
                                $conexion = new Conexion();
                                $resultado = mysqli_query($conexion->EstablecerConexion(), $busqueda->ConsultaTabla());
                                while ($row = mysqli_fetch_array($resultado)) :
                                ?>
                                    <tr>
                                        <td>
                                            <center><?php echo $row['idCl']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $row['nombreCl']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $row['apellidoCl']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $row['nombrenegocio']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $row['ciudadCl']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $row['direccionCl']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $row['barrio']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $row['telefonoCl']; ?></center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                $NumeroFactura = $busqueda->ConsultaIngresarFactura()['Nfactura']; //consultando numero de factura con el objeto BuscarCliente Busca el ultimo ID de factura generado
                                                ?>
                                                <form action="../PuertaTrasera/ProcesoInsertarFactura.php?id=<?php echo $row['idCl']; ?>&idfactura=<?php echo $NumeroFactura; ?>" method="post"><?php //Enviando id cliente y numero de factura por metodo get a procedimiento insertaar factura
                                                                                                                                                                                                ?>
                                                    <button type="submit" class="btn btn-outline-warning" name="btnIngresarFactura"><i class="fas fa-shopping-cart"></i></button>
                                                </form>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12"></div>
        </div>
    </div>
<?php
    include("../estructura/inferior.php");
} else {
    header('Location:../');
}
?>