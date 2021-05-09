<?php
if (isset($_POST['btniniciarsesion'])) {
    //$_user = $_POST['usuario'];
    //$_pass = $_POST['contraseña'];
    //session_start();
    //$_SESSION['usuario'] = $_user;
    //include("../conexiones/abrir.php");
    //$consulta = "SELECT * FROM usuarios WHERE user = '$_user' AND pass = '$_pass'";
    //$resultado = mysqli_query($conexion, $consulta);
    //$filas = mysqli_num_rows($resultado);
    require_once '../clases/validacionlogin.php';
    $resultado = new validacionlogin($_POST['usuario'], $_POST['contraseña']);
    if ($resultado->GuardandoConsultaValidarUsuario()) {
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location:../principal/app.php");
    } else {
        echo "Datos incorrectos";
        header("Location:../../index.php");
    }
}
?>




