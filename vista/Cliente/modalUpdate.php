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
            <input type="text" id="Id_cliente" name="Id_cliente" hidden="">
              <br><label>Nombre del cliente</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
              <label>Apellidos del cliente</label>
              <input type="text" id="apellidou" name="apellidouu" class="form-control form-control-sm" required="">
              <label>Documento</label>
              <input type="text" id="documentou" name="documento" class="form-control form-control-sm">
              <label>Telefono</label>
              <input type="text" id="telefonou" name="telefonou" class="form-control form-control-sm">
              <label>Correo electronico</label>
              <input type="text" id="correou" name="correou" class="form-control form-control-sm">
              <label>Direccion</label>
              <input type="text" id="direccionu" name="direccionu" class="form-control form-control-sm">
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
