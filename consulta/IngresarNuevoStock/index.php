<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../../estructura/menu2.php';
?>





<?php 
    require_once '../../estructura/inferior.php';
} else {
    header('Location:../');
} ?>