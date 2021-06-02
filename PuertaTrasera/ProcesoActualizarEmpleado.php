<?php 
session_start();
require_once '../clases/ActualizarEmpleado.php';
$Actualizar = new ActualizarEmpleado($_SESSION['usuario'],$_POST['idEmpleado'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion'],$_POST['email'],$_POST['fechanac']);
$Actualizar->ActualizarDatos();
header('Location:../actualizar-informacion/');
?>