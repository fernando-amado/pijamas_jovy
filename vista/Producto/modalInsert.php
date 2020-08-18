
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   
      </div>
      
          <form class="form2" id="frminsert" onsubmit="return insertarDatos()" method="post">
          <div class="title">
          
         <h1>Registro Producto</h1><br><br><br>
         
         </div>  
              <br><div class="one-half ">    
              <input type="text" id="producto" name="producto"  required=""><span class="barra"></span>
              <label>Nombre del producto</label>
              </div> 
              <div class="one-half last ">
              <input type="num" id="precio" name="precio"  required=""><span class="barra"></span>
              <label>Precio del producto</label>
              </div>
              <div class="one-half ">
              <input type="num" id="cantidad" name="cantidad" required="" ><span class="barra"></span>
              <label>Cantidad de articulos</label>
              </div>
              <div class="one-half last ">
              <input type="text" id="talla" name="talla" required=""><span class="barra"></span>
              <label>Tallas</label>
              </div>
              <div class="one-half ">
              <input type="text" id="ordentrabajo" name="ordentrabajo" required=""><span class="barra"></span>
              <label>Orden Trabajo</label>
              </div>
              <div class="one-half last">
              <input type="text" id="pedido" name="pedido" required=""><span class="barra"></span>
              <label>Pedido</label>
              </div>
              <input type="reset" class="reset2" value="Reset">
               <input type="submit" value="Guardar" class="boton3">
               <div class="close">
               <button type="button"  class="btn btn-primary" data-dismiss="modal">X</button>
               </div>
          </form>
      </div>
    </div>
  </div>
</div>
