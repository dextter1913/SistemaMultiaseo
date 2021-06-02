<?php 
    require_once '../clases/ActualizarCliente.php';
    $ActualizarCl = new ActualizarCliente($_GET['idCl'],$_POST['nombre'],$_POST['apellido'],$_POST['nombrenegocio'],$_POST['ciudad'],$_POST['direccion'],$_POST['barrio'],$_POST['correo'],$_POST['telefono'],$_POST['zona']);
    $ActualizarCl->ActualizarCliente();

    session_start();
    $_SESSION['Mensaje'] = "Datos Actualizados Correctamente";
    header('Location:../clientes/ActualizacionDatosCliente?idCl='.$_GET['idCl']);
?>