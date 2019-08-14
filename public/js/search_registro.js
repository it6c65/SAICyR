// funcion para obtener el url de Codeigniter
function getBaseUrl(){
    var local = window.location;
    var base_url = local.protocol + "//" + local.host + "/";
    return base_url;
}

// funcion de busqueda en el registro
var options = {
  valueNames: [ 'id','fecha','hora','usuario','accion','area' ]
};

var userList = new List('logs', options);

// borrar registro
$("#borrar_registro").click(function(){
    UIkit.modal.confirm("¿Estas seguro?", function(){
        $.get( getBaseUrl()+"inicio/borrar_registro", { signal: 1 });
        UIkit.notify("Se ha borrado el registro con éxito" , "success");
        UIkit.notify("Necesitará recargar la pagina para ver los cambios" , "info");
    });
});
