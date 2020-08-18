
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
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
      

      </div>
    </div>
  </div>
</div>
