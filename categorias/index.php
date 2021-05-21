<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php';
    require_once '../clases/Conexion.php';
    require_once '../clases/MostrarCategorias.php';
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
                            <th>
                                <center>
                                    Acciones
                                </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conexion = new Conexion();
                        $MostrarCategorias = new MostrarCategorias();
                        $resultado = mysqli_query($conexion->EstablecerConexion(), $MostrarCategorias->Consulta());
                        while ($rows = mysqli_fetch_array($resultado)) :
                        ?>
                            <tr>
                                <td>
                                    <center><?= $rows['nomCategoria']; ?></center>
                                </td>
                                <td>
                                    <center>
                                        <a href="../PuertaTrasera/ProcesoEliminarCategoria.php?nomcategoria=<?= $rows['nomCategoria']; ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                    </center>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-sm-5 col-md-5 col-lg-5 shadow p-3 mb-5 bg-body rounded">
                <form action="../PuertaTrasera/ProcesoInsertarCategoria.php" method="post">
                    <label for="nomcategoria">Nombre Categorias</label><br /><br />
                    <input type="text" name="nomcategoria" id="nomcategoria" class="form-control" placeholder="Ingrese Nombre" required="required"><br />
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