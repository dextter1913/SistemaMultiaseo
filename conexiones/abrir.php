<?php
$host = "bgzdh6zz0h3xrgh672kg-mysql.services.clever-cloud.com";
$user = "u5sumbtoonzzwft7";
$pass = "qDL3tpVESjCR0GrABpWU";
$db = "bgzdh6zz0h3xrgh672kg";
$tbcliente = "cliente";
$tbempleado = "empleados";
$tbusuarios = "usuarios";
$tbproductos = "productos";
$conexion = new mysqli($host, $user, $pass, $db);
error_reporting(0);

if ($conexion->connect_errno) {
    echo "lo sentimos, no se pudo completar, en breve lo solucionaremos";
}
