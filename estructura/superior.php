<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Atlaz ::.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">
</head>

<body>
    <div class="container-fluid">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../app"><span class="fab fa-battle-net"><i> Atlaz</i></span>
                        <?php
                        echo $_SESSION['usuario'];
                        ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ingresar
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="../registro">Clientes y Productos</a></li>
                                    <li><a class="dropdown-item" href="../zonas/">Zonas</a></li>
                                    <li><a class="dropdown-item" href="../categorias/">Categorias</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ventas">Ventas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../buscar-factura/">Buscar Factura</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Consultar
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="../consulta/">Productos</a></li>
                                    <li><a class="dropdown-item" href="#">Clientes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gastos
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="../gastos/">Variables y Fijos</a></li>
                                    <li><a class="dropdown-item" href="../compras/">Compras</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Cuenta
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="#">Actualizar Informacion</a></li>
                                    <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form action="../busqueda/" method="GET" class="d-flex">
                            <input class="form-control me-2" name="id" type="search" placeholder="Ingrese ID" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit" name="btnbuscarr"><i class="fas fa-search"></i> </button>
                        </form>
                    </div>
                </div>
        </div>
        </nav>
    </div>