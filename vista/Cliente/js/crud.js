function mostrar(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}

function obtenerDatos(id){
    $.ajax({
		type:"POST",
		data:"Id_cliente=" + id,
		url:"procesos/obtenerDatos.php",
		success:function(r){
			r=jQuery.parseJSON(r);

			$('#Id_cliente').val(r['Id_cliente']);
			$('#nombreu').val(r['Nombres_cliente']);
			$('#apellidou ').val(r['Apellidos_cliente']);
			$('#documentou').val(r['Documento_cliente']);
			$('#telefonou').val(r['Telefono_cliente']);
			$('#correou').val(r['Correo_cliente']);
			$('#direccionu').val(r['Direccion_cliente']);
		
		}
	});
}

function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertu').serialize(),
		success:function(r){

			console.log(r);
			if(r==1){
				mostrar();
				swal("¡Actualizado con exito!",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
			
		}
	});

	return false;
}


function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
		    $.ajax({
		    	type:"POST",
		    	url:"procesos/eliminarDatos.php",
		    	data:`Id_cliente=${id}`,
		    	success:function(r){
		    		if(r==1){
		    			mostrar();
		    			swal("¡Eliminado con exito!", ":D" ,"info");
		    		}else{
		    			swal("¡Error!",":(","error");
		    		}
		    	}
		    });	
		} 
	});
}

function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){

			console.log(r);
			if(r==1){
				$('#frminsert')[0].reset();//limpiar formulario
				mostrar();
				swal("¡Agregado con exito!",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
			
		}
	});

	return false;
}