<?php
session_start();
if (isset($_SESSION['usuario'])) {

require_once '../estructura/superior.php';
require_once '../estructura/slider.php';
?>
<?php
require_once '../estructura/inferior.php';


}else {
    header('Location:../');
}
?>