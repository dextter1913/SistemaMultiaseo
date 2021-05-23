<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Inicie Sesion ::.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">

    <link rel="apple-touch-icon" sizes="57x57" href="imagenes/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imagenes/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imagenes/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imagenes/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imagenes/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imagenes/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imagenes/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imagenes/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imagenes/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="imagenes/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagenes/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imagenes/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagenes/favicon-16x16.png">
    <link rel="manifest" href="imagenes/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <?php
    include("estructura/login.php");
    session_start();
    if (isset($_SESSION['Error'])) {
        echo $_SESSION['Error'];
    }
    if (isset($_SESSION['usuario'])) {
        header('Location:app/');
    }
    ?>
    <br><br>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="p-3 mb-2 bg-dark text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <b>
                            Contacto <br>
                        </b>
                        Celular: <br />
                        +57 3166857000 <br />
                        +57 3135779037 <br />
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="row">
                            <b>
                                <center>Redes Sociales</center>
                            </b><br><br>
                            <div class="col-6 col-sm-4 col-md-2">
                                <h2><samp class="fab fa-twitter-square"><a href="#"></a></samp></h2>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2">
                                <h2><samp class="fab fa-facebook-square"><a href="#"></a></samp></h2>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2">
                                <h2><samp class="fab fa-telegram"><a href="#"></a></samp></h2>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2">
                                <h2><samp class="fab fa-github"><a href="#"></a></samp></h2>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2">
                                <h2><samp class="fab fa-whatsapp"><a href="#"></a></samp></h2>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2">
                                <h2><samp class="fab fa-discord"><a href="#"></a></samp></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2">
                        <b>Nuestra compañia</b><br>
                        TecnoFreaky S.A<br>
                        las mejores soluciones web <br>
                        Disposicion e Innovacion <br>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2">
                        <b>Servicio</b><br>
                        Garantia <br>
                        acompañamiento <br>
                        ventas en TecnoFreaky.com <br>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2">
                        <b>
                            Email: <br />
                        </b>
                        dextter1913@gmail.com <br />
                        clau32usa@gmail.com <br />
                        soporte@tecnofreaky.com.co <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3">
                <form action="../PuertaTrasera/CerrarSesion.php" method="post">
                    <button class="btn btn-outline-danger btn-sm" name="btncerrarsesion"><i class="fas fa-power-off"></i></button>
                </form>
            </div>
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-3"><i>Cristian Aguirre Developer</i></div>
        </div>
    </div>
</footer>

</html>