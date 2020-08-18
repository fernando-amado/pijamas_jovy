<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
<<<<<<< HEAD
    
      </div>
      
          <form class="form4" id="frminsertu" onsubmit="return actualizarDatos()" method="post">
          <div class="title">
          
         <h1>Modificar Material</h1><br><br><br>
         
         </div> 
            <input type="text" id="Id_material" name="Id_material" hidden="">
              <br><div class="one-half "> 
              <input type="text" id="nombreu" name="nombreu" required=""><span class="barra"></span>
              <label>Nombre del material</label>
              </div>
              <div class="one-half ">
              <input type="text" id="cantidadu" name="cantidadu" required=""><span class="barra"></span>
              <label>Cantidad material </label>
              </div>
              <div class="one-half ">
              <input type="text" id="tipou" name="tipou" required="" ><span class="barra"></span>
              <label>Tipo</label>
              </div>
              <div class="one-half ">
              <input type="text" id="coloru" name="coloru" required=""><span class="barra"></span>
              <label>Color</label>
              </div>
              <div class="one-half">
              <textarea id="descripcionu" name="descripcionu" placeholder="Descripcion del Material"></textarea>
              </div>
              
              <input type="reset" class="reset" value="Reset">
               <input type="submit" value="Guardar" class="boton1">
               <div class="close">
               <button type="button"  class="btn btn-primary" data-dismiss="modal">X</button>
               </div>
          </form>
      </div>
      
=======
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
            <input type="text" id="Id_material" name="Id_material" hidden="">
              <br><label>Nombre del material</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
              <label>Cantidad del material</label>
              <input type="text" id="cantidadu" name="cantidadu" class="form-control form-control-sm" required="">
              <label>Tipo material</label>
              <input type="text" id="tipou" name="tipou" class="form-control form-control-sm">
              <label>Color</label>
              <input type="text" id="coloru" name="coloru" class="form-control form-control-sm">
              <label>Descripcion</label>
              <input type="text" id="descripcionu" name="descripcionu" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-info">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076
        
      </div>
    </div>
  </div>
</div>
