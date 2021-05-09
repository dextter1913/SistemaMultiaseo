<?php
session_start();
if (isset($_SESSION['usuario'])) {
    require_once '../estructura/superior.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 shadow p-3 mb-5 bg-body rounded">
                <form action="gastos.php" method="post">
                    <label for="fijos">Gastos Fijos</label>
                    <input type="number" name="fijos" id="fijos" placeholder="Ingrese Gastos fijos" title="Gastos fijos" class="form-control"></br>
                    <label for="variables">Gastos Variables</label>
                    <input type="number" name="variables" id="variables" placeholder="Ingrese Gastos Variables" title="Gastos Variables" class="form-control">
                    </br>
                    <center><button class="btn btn-outline-secondary btn-lg"><i class="fas fa-cash-register"></i></button></center>
                </form>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4"></div>
        </div>
    </div>


<?php require_once '../estructura/inferior.php';
} else {
    header('Location:../');
}
?>