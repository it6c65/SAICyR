// funcion para obtener el url de Codeigniter
function getBaseUrl(){
    var local = window.location;
    var base_url = local.protocol + "//" + local.host + "/";
    return base_url;
}

function olvide_clave(){
    UIkit.modal.prompt("Coloque su nombre de Usuario:", '', function(user){
        if( user == '' ){
            UIkit.notify("No puede dejar vacío el campo de usuario", "warning" );
            return false;
        }
        $.post( getBaseUrl()+"login/cambiar_clave", { name: user }, function(data){
            if(data == "existe"){
                window.location= getBaseUrl()+"login/pregunta_secreta";
            }else{
                UIkit.notify("El usuario que ha colocado no existe","danger");
            }
        });

    });
}
