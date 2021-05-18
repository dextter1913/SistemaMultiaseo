<?php
require_once '../clases/CuadreCaja.php';
if (empty($_POST['idtotal'])) {
    session_start();
    $_SESSION['Mensaje'] = '<center>Por favor seleccione el Total sin cuadre</center>';
    header('Location:../gastos/');
} else {
    foreach ($_POST['idtotal'] as $idtotal) {
        $cuadrecaja = new CuadreCaja($idtotal, $_POST['fijos'], $_POST['variables']);
        $cuadrecaja->TotalAModificar();
        header('Location:../gastos/');
    }
}

//if (isset($_POST['fijos']) == '' || isset($_POST['fijos']) == ' ') {
//    if (empty($_POST['idtotal'])) {
//        session_start();
//        $_SESSION['Mensaje'] = '<center>Por favor seleccione el Total sin cuadre</center>';
//        header('Location:../gastos/');
//    } else {
//        foreach ($_POST['idtotal'] as $idtotal) {
//            $cuadrecaja = new CuadreCaja($idtotal, 0, $_POST['variables']);
//            $cuadrecaja->TotalAModificar();
//            header('Location:../gastos/');
//        }
//    }
//} elseif (isset($_POST['variables']) == '' || isset($_POST['variables']) == ' ') {
//    if (empty($_POST['idtotal'])) {
//        session_start();
//        $_SESSION['Mensaje'] = '<center>Por favor seleccione el Total sin cuadre</center>';
//        header('Location:../gastos/');
//    } else {
//        foreach ($_POST['idtotal'] as $idtotal) {
//            $cuadrecaja = new CuadreCaja($idtotal, $_POST['fijos'], 0);
//            $cuadrecaja->TotalAModificar();
//            header('Location:../gastos/');
//        }
//    }
//} else {
//    if (empty($_POST['idtotal'])) {
//        session_start();
//        $_SESSION['Mensaje'] = '<center>Por favor seleccione el Total sin cuadre</center>';
//        header('Location:../gastos/');
//    } else {
//        foreach ($_POST['idtotal'] as $idtotal) {
//            $cuadrecaja = new CuadreCaja($idtotal, $_POST['fijos'], $_POST['variables']);
//            $cuadrecaja->TotalAModificar();
//            header('Location:../gastos/');
//        }
//    }
//}
//