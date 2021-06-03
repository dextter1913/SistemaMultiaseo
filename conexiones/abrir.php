<?php
$host = "atlazdb.cvcpedzqpzzg.us-east-2.rds.amazonaws.com";
$user = "admin";
$pass = "Clau32290398";
$db = "Demo";
$tbcliente = "cliente";
$tbempleado = "empleados";
$tbusuarios = "usuarios";
$tbproductos = "productos";
$conexion = new mysqli($host, $user, $pass, $db);
error_reporting(0);

if ($conexion->connect_errno) {
    echo "lo sentimos, no se pudo completar, en breve lo solucionaremos";
}
