<?php 
session_start();
if ($_POST['contraseña'] === $_POST['ConfirmacionContraseña']) {
    require_once '../clases/CambiarPass.php';
    $cambiarpass = new CambiarPass($_SESSION['usuario'],$_POST['contraseña']);
    $cambiarpass->CambiarContraseña();
    $_SESSION['Mensaje'] = "Cambio Exitoso";
    header('Location:../cambiar-contraseña/');
}else {

    $_SESSION['Mensaje'] = "Las contraseñas no coinciden";
    header('Location:../cambiar-contraseña/');
}
?>