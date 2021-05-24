<?php 
    require_once '../clases/Conexion.php';
    require_once '../clases/BuscarCliente.php';

    $conexion = new Conexion();
    $buscarCl = new BuscarCliente($_GET['idCl']);
    $resultados = mysqli_query($conexion->EstablecerConexion(),$buscarCl->ConsultaTabla());
    $row = mysqli_fetch_array($resultados);
    header('Location:../clientes/?pg=5&nomCl='.$row['nombreCl'].'&doc='.$row['idCl'].'&nombre='.$row['nombreCl'].'&apellido='.$row['apellidoCl'].'&negocio='.$row['nombrenegocio'].'&ciudad='.$row['ciudadCl'].'&direccion='.$row['direccionCl'].'&barrio='.$row['barrio'].'&correo='.$row['correoCl'].'&telefono='.$row['telefonoCl'].'&fecha='.$row['fechanacCl'].'&zona='.$row['idzona'].'&user='.$row['user']);

?>