
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
              <label>Nombre del cliente</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Apellidos del cliente</label>
              <input type="text" id="apellido" name="apellido" class="form-control form-control-sm" required="">
              <label>Documento</label>
              <input type="text" id="documento" name="documento" class="form-control form-control-sm">
              <label>Telefono</label>
              <input type="text" id="telefono" name="telefono" class="form-control form-control-sm">
              <label>Correo electronico</label>
              <input type="text" id="correo" name="correo" class="form-control form-control-sm">
              <label>Direccion</label>
              <input type="text" id="direccion" name="direccion" class="form-control form-control-sm">
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
