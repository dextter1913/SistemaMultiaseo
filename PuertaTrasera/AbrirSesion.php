<?php
require_once '../clases/validacionlogin.php';
$resultado = new validacionlogin($_POST['usuario'], $_POST['contraseña']);
if ($resultado->GuardandoConsultaValidarUsuario()) {
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    header("Location:../app");//Validaciones adicionales al momento de ingresar datos erroneos
} elseif ($_POST['usuario'] == "" && $_POST['contraseña'] == "" || $_POST['usuario'] == " " || $_POST['contraseña'] == " ") {
    session_start();
    $_SESSION['Error'] = "<center><p class=\"text-primary\">Ingrese todos los Datos</p></center>";
    header("Location:../");
} elseif ($_POST['contraseña'] == "" || $_POST['contraseña'] == " ") {
    session_start();
    $_SESSION['Error'] = "<center><p class=\"text-info\">Ingrese su contraseña</p></center>";
    header("Location:../");
} elseif ($_POST['usuario'] == "" || $_POST['usuario'] == " ") {
    session_start();
    $_SESSION['Error'] = "<center><p class=\"text-info\">Ingrese su usuario</p></center>";
    header("Location:../");
} else {
    session_start();
    $_SESSION['Error'] = "<center><p class=\"text-danger\"><b>Datos incorrectos</b></p></center>";
    header("Location:../");
}
?>