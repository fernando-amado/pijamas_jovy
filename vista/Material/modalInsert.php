
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
<<<<<<< HEAD
    
      </div>
      
          <form class="form4" id="frminsert" onsubmit="return insertarDatos()" method="post">
          <div class="title">
          
         <h1 >Registro Material</h1><br><br><br>
         
         </div> 
            <br> <div class="one-half "> 
              <input type="text" id="nombre" name="nombre" required=""><span class="barra"></span>
              <label>Nombre del material</label>
              </div>
              <div class="one-half ">
              <input type="text" id="cantidad" name="cantidad" required=""><span class="barra"></span>
              <label>Cantidad material </label>
              </div>
              <div class="one-half ">
              <input type="text" id="tipo" name="tipo" required="" ><span class="barra"></span>
              <label>Tipo</label>
              </div>
              <div class="one-half ">
              <input type="text" id="color" name="color" required=""><span class="barra"></span>
              <label>Color</label>
              </div>
              <div class="one-half">
              <textarea id="descripcion" name="descripcion" placeholder="Descripcion del Material"></textarea>
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
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatos()" method="post">
              <label>Nombre del material</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Cantidad material </label>
              <input type="text" id="cantidad" name="cantidad" class="form-control form-control-sm" required="">
              <label>Tipo</label>
              <input type="text" id="tipo" name="tipo" class="form-control form-control-sm">
              <label>Color</label>
              <input type="text" id="color" name="color" class="form-control form-control-sm">
              <label>Descripcion</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Guardar" class="btn btn-info">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
>>>>>>> e8e14cc318fce5f81eef4c0067baf12bee4ef076

      </div>
    </div>
  </div>
</div>
