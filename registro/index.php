<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../clases/ingresarProductos.php';
    require_once '../clases/InsertarCliente.php';
    require_once '../estructura/formularioInsert.php';
?>
<?php //estableciendo conexion y insertando los datos
    if (isset($_POST['btningresar'])) {

        $ingresarCliente = new InsertarCliente($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['nombrenegocio'], $_POST['ciudad'], $_POST['direccion'], $_POST['barrio'], $_POST['correo'], $_POST['telefono'], $_POST['fechanac'], $_POST['zona'], $_POST['usuario']);
        $ingresarCliente->Insertar();
    }

?>
<?php
    if (isset($_POST['btnregistrar'])) {
        $IngresProductos = new IngresarProductos($_POST['nombre'], $_POST['precio'], $_POST['precioVenta'], $_POST['categoria'], $_POST['DescripcionP'], $_POST['Stock'], $_POST['usuario']); //enviando los datos por metodo post en el parametro del objeto 
        $IngresProductos->InsertarProducto();
    }
    //if (isset($_SESSION['Mensaje'])) {
    //    print $_SESSION['Mensaje'];
    //    unset($_SESSION['Mensaje']);
    //}
?>
<?php
    require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>