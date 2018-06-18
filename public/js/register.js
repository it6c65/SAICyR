function validar_usuario(){
    var modal = UIkit.modal("#question_secret");
    var area = "#area";
    var clave = "#password";
    var nombre_real = "#realname";
    var nombre_usuario = "#username";

    if( $(nombre_usuario).val() == "" ){
        modal.hide();
        $(nombre_usuario).addClass("uk-form-danger");
        $(nombre_usuario).attr("title", "El nombre de usuario no puede estar vacío");
        return false;
    }
    if( $(nombre_real).val() == "" ){
        modal.hide();
        $(nombre_real).addClass("uk-form-danger");
        $(nombre_real).attr("title", "El nombre real no puede estar vacío");
        return false;
    }
    if( $(clave).val() == "" ){
        modal.hide();
        $(clave).addClass("uk-form-danger");
        $(clave).attr("title", "La contraseña no puede estar vacía");
        return false;
    }
    if( $(area).val() == 0){
        modal.hide();
        $(area).addClass("uk-form-danger");
        $(area).attr("title", "Debes seleccionar un area");
        return false;
    }
};
