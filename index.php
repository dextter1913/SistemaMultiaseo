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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="p-3 mb-2 bg-dark text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <b>
                            Contacto <br>
                        </b>
                        Medellin:
                        4-9823456 <br>

                        Bogota:
                        1-7654980 <br>

                        Cali:
                        2-6754323 <br>
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
                    <div class="col-6 col-sm-4 col-md-3">
                        <b>Nuestra compañia</b><br>
                        TecnoFreaky S.A<br>
                        las mejores soluciones web <br>
                        Disposicion e Innovacion <br>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <b>Servicio</b><br>
                        Garantia <br>
                        acompañamiento <br>
                        ventas en TecnoFreaky.com <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-3"><i>Cristian Aguirre Developer</i></div>
        </div>
    </div>
</footer>
</html>