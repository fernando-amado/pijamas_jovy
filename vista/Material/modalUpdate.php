<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
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
              <div class="one-half last">
              <input type="text" id="cantidadu" name="cantidadu" required=""><span class="barra"></span>
              <label>Cantidad material </label>
              </div>
              <div class="one-half ">
              <input type="text" id="tipou" name="tipou" required="" ><span class="barra"></span>
              <label>Tipo</label>
              </div>
              <div class="one-half last">
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
      
        
      </div>
    </div>
  </div>
</div>
