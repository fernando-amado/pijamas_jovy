
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>Nombre del producto</label>
              <input type="text" id="producto" name="producto" class="form-control form-control-sm" required="">
              <label>Precio del producto</label>
              <input type="text" id="precio" name="precio" class="form-control form-control-sm" required="">
              <label>Cantidad de articulos</label>
              <input type="text" id="cantidad" name="cantidad" class="form-control form-control-sm">
              <label>Tallas</label>
              <input type="text" id="talla" name="talla" class="form-control form-control-sm">
              <label>Orden Trabajo</label>
              <input type="text" id="ordentrabajo" name="ordentrabajo" class="form-control form-control-sm">
              <label>Pedido</label>
              <input type="text" id="pedido" name="pedido" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Guardar" class="btn btn-info">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
