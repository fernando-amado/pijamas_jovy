<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
            <input type="text" id="Id_producto" name="Id_producto" hidden="">
              <br><label>Nombre del producto</label>
              <input type="text" id="productou" name="productou" class="form-control form-control-sm" required="">
              <label>Precio del producto</label>
              <input type="text" id="preciou" name="preciou" class="form-control form-control-sm" required="">
              <label>Cantidad de articulos</label>
              <input type="text" id="cantidadu" name="cantidadu" class="form-control form-control-sm">
              <label>Tallas</label>
              <input type="text" id="tallau" name="tallau" class="form-control form-control-sm">
              <label>Orden Trabajo</label>
              <input type="text" id="ordentrabajou" name="ordentrabajou" class="form-control form-control-sm">
              <label>Pedido</label>
              <input type="text" id="pedidou" name="pedidou" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-info">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
