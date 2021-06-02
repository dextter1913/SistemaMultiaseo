<?php
session_start();
require_once '../clases/InsertarLog.php';
$deslogear = new InsertarLog($_SESSION['usuario']);
$deslogear->IngresarRastroDesLogeo();
session_destroy();
header('Location:../');
