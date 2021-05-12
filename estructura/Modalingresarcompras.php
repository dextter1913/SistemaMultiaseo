<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="../PuertaTrasera/ProcesoIngresarCompras.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Ingresar Compras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                <label for="Prefijo">Prefijo</label>
                                <input type="text" name="Prefijo" id="Prefijo" class="form-control" placeholder="Az"><br/>
                                <label for="Cantidad">Cantidad</label>
                                <input type="number" name="Cantidad" id="Cantidad" placeholder="Cantidad" class="form-control">
                                <label for="FechaCompra">Fecha Compra</label>
                                <input type="date" name="FechaCompra" id="FechaCompra" class="form-control"><br/><br/>
                                <label for="idtotal">ID del total Cuadrado</label>
                                <input type="number" name="idtotal" id="idtotal" class="form-control" placeholder="1-9">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                <label for="NumeroFactura">Numero Factura</label>
                                <input type="number" name="NumeroFactura" id="NumeroFactura" class="form-control" placeholder="Ingrese Numero"><br/>
                                <label for="ValorUnitario">Valor Unitario</label>
                                <input type="number" name="ValorUnitario" id="ValorUnitario" class="form-control" placeholder="Valor"><br/>
                                <label for="Total">Total</label>
                                <input type="number" name="Total" id="Total" class="form-control" placeholder="Total">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <label for="Descripcion">Descripcion</label>
                                <textarea name="Descripcion" id="Descripcion" cols="30" rows="10" class="form-control" placeholder="Ingrese la descripcion"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-success" name="btninsertarfactura">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>