<?php
session_start();
if (isset($_SESSION['usuario'])) {
include("../../estructura/menu2.php");
//require_once '../../conexiones/abrir.php';
require_once '../../clases/ConsultarProducto.php';
require_once '../../clases/Conexion.php';

?>
<div class="container-fluid">
    <div class="row">
        <center>
            <h1><i>Ingresar Venta</i></h1>
        </center>
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <form action="../ingresar-venta/?id=<?php echo $_GET['id']; ?>&idfactura=<?php echo $_GET['idfactura']; ?>" method="post">
                    <label for="NombreProducto">Ingrese Nombre del Producto:</label>
                    <input type="text" name="nombreproducto" id="NombreProducto" class="form-control" placeholder="Buscar"><br>
                    <input type="submit" value="Buscar" class="btn btn-outline-primary" name="btnBuscarProductoV">
                </form>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nombre</th>
                                <th>precio</th>
                                <th>categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['btnBuscarProductoV'])) {
                                $consulta = new ConsultarProducto($_POST['nombreproducto']);
                                $conexion = new Conexion();
                                $total = mysqli_query($conexion->EstablecerConexion(), $consulta->QuerySeleccionarProducto());
                                while ($resultado = mysqli_fetch_array($total)) {
                            ?>
                                    <tr>
                                        <td><?php echo $resultado['idProd']; ?></td>
                                        <td><?php echo $resultado['nomProd']; ?></td>
                                        <td><?php echo $resultado['precioVenta']; ?></td>
                                        <td><?php echo $resultado['nomCategoria']; ?></td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <form action="../ingresar-venta/?id=<?php echo $_GET['id']; ?>&idfactura=<?php echo $_GET['idfactura']; ?>" method="post">
                    <?php require_once '../../estructura/ModalIngresarVenta.php'; //formulario ingresar venta
                    ?>
                    <input type="submit" value="Ingresar Venta" class="btn btn-outline-primary" name="btningresarVenta">
                </form>
            </div>
            <?php


            //insertar ventas en la factura 
            if (isset($_POST['btningresarVenta'])) {
                require_once '../../clases/ConsultarValorVentaProducto.php'; //Clase que consulta el valor del producto a vender
                $ValorVenta = new ConsultarValorVentaProducto($_POST['idprod']); //Creando el objeto
                $_Total = $ValorVenta->ValorVentaProducto()['precioVenta'] * $_POST['CantidadUnidad']; //haciendo calculo por la cantidad de unidades
                require_once '../../clases/IngresarVentas.php'; //importando clase IngresarVenta
                $IngresarVenta = new IngresarVentas($_POST['fechaventa'], $_POST['CantidadUnidad'], $_Total, $_POST['EstadoVenta'], $_GET['id'], $_POST['idprod'], $_GET['idfactura']); // enviando parametros por metodo post al objeto insertar venta
                $IngresarVenta->InsertandoVenta(); //llamando el objeto insertar venta

                
                //Modificando el Stock
                require_once '../../clases/ModificarStock.php';
                $ModificarStock = new ModificarStock($_POST['idprod'],$_POST['CantidadUnidad']);
                $ModificarStock->MetodoModificarStock();
            ?>
                <form action="../../buscar-factura/Facturas?criterio=<?php echo $_GET['idfactura']; ?>" method="post">
                    <button type="submit" class="btn btn-outline-danger"><i class="fas fa-wallet"></i></button>
                </form>
            <?php
            }
            ?>
        </div>
        <div class="col-md-1 col-lg-1"></div>
    </div>
</div>
<?php
    require_once '../../estructura/inferiorsubcarpetas.php';
}else {
    header('Location:../../');
}
?>