<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <div class="col-4 col-md-4"></div>
                            <div class="col-4 col-md-4">
                                <h3><b><i>Registrar Productos</i></b></h3>
                            </div>
                            <div class="col-4 col-md-4"></div>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="shadow p-3 mb-5 bg-body rounded">
                                <form action="../PuertaTrasera/ProcesoIngresarProducto.php" method="post">
                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-3">
                                            <label for="nombreN">Nombre producto</label>
                                            <input type="text" name="nombre" id="nombreN" class="form-control" placeholder="Ingrese Producto">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3">
                                            <label for="precio">Precio Producto</label>
                                            <input type="number" name="precio" id="precio" class="form-control" placeholder="valor">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3">
                                            <label for="precioVenta">Precio Venta</label>
                                            <input type="number" name="precioVenta" id="precioVenta" class="form-control" placeholder="valor">
                                        </div>
                                        <div class="col-12 col-md-2 col-lg-2">
                                            <label for="categoria">Categoria</label>
                                            <select id="categoria" class="form-select" name="categoria">
                                                <?php
                                                require_once '../clases/MostrarCategorias.php';
                                                require_once '../clases/Conexion.php';
                                                $MostrarCategoria = new MostrarCategorias();
                                                $conexion = new Conexion();
                                                $resultado = mysqli_query($conexion->EstablecerConexion(), $MostrarCategoria->Consulta());
                                                while ($rows = mysqli_fetch_array($resultado)) :
                                                ?>
                                                    <option><?= $rows['nomCategoria']; ?></option>
                                                <?php
                                                endwhile;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3">
                                            <label for="usuario1">Usuario:</label>
                                            <input type="text" name="usuario" id="usuario1" class="form-control" placeholder="Ingrese su usuario">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">

                                            <label for="DescripcionP">Descripcion</label>
                                            <textarea name="DescripcionP" id="DescripcionP" cols="30" rows="3" class="form-control" placeholder="Ingrese Caracteristicas del producto"></textarea>
                                        </div>
                                        <div class="col-12 col-md-2 col-lg-3">
                                            <label for="Stock">Stock y/o Cantidad</label>
                                            <input type="number" name="Stock" id="Stock" class="form-control" placeholder="Cantidad">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3"><br /><input type="submit" value="Registrar" class="btn btn-outline-success btn-lg" name="btningresarproducto"></div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
            <?php
            if (isset($_SESSION['prueba'])) {
                echo $_SESSION['prueba'];
                session_unset($_SESSION['prueba']);
            }
            ?>
        </div>
    </div>
<?php
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>