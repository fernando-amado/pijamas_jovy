$(document).ready(function(){
    var funcion='';
    var id_usuario = $('#id_usuario'). val();
    buscar_usuario(id_usuario);
    
    function buscar_usuario(dato){
        funcion='buscar_usuario';
        $.post('..url/controlador/UsuarioController.php',{dato,funcion},(response)=>{
            console.log(response);
            let nombre='';
            let apellidos='';
            let edad='';
            let documento='';
            let tipo='';
            let telefono='';
            let direccion='';
            let correo='';
            let sexo='';
            let adicional='';
            const usuario = JSON.parse(response);
            nombre+=`${usuario.nombre}`;
            apellido+=`${usuario.apellidos}`;
            edad+=`${usuario.edad}`;
            documento+=`${usuario.documento}`;
            tipo+=`${usuario.tipo}`;
            direccion+=`${usuario.direccion}`;
            correo+=`${usuario.correo}`;
            sexo+=`${usuario.sexo}`;
            adicional+=`${usuario.adicional}`;
            $('#nombre_us').html(nombre);
            
            
            

        })
    }
})