$("#loading_main").hide();
$("#loading_gallery").hide();

// funcion para obtener el url de Codeigniter
function getBaseUrl(){
    var local = window.location;
    var base_url = local.protocol + "//" + local.host + "/";
    return base_url;
}

// funcion para obtener el url del Controlador en Codeigniter
function getController(){
    var local = window.location;
    var url_controller = local.pathname.split('/')[1] + "/";
    return url_controller;
}

// Objeto de las herramientas (de todos los utensilios)
function tool(data){
    this.id = data.id;
    this.name = ko.observable(data.nombre);
    this.code = ko.observable(data.codigo);
    this.current_condition = ko.observable(data.condicion);
    this.current_category = ko.observable(data.categoria);
    this.editing = ko.observable(false);
    if( data.url == "null" ){
        this.img = ko.observable(null);
    }else{
        this.img = ko.observable(data.url);
    }
};

//objetos de la galeria
function gallery_item(data){
    var self = this;
    self.isSelected = ko.observable(false);
    self.url = ko.observable(data.url);
    self.id = data.id
};

//funcion del CRUD (y toda la estructura logica del CRUD)
function crudViewModel(){
    $.getJSON( getBaseUrl()+getController()+"utilidades", function(data){
        $("#loading_main").ajaxStart(function(){
            $(this).show();
        });
        var mappedTools = $.map(data, function(item){
            return new tool(item);
        });
        self.tools(mappedTools);
        $("#loading_main").ajaxStop(function(){
            $(this).hide();
        });
    });
    //prevenir confusion de KO y Jquery
    var self = this;
    //Lista de todos las herramientas
    self.tools = ko.observableArray([]);
    //Todas las condiciones posibles (usadas para designar el CSS)
    self.conditions = ko.observableArray(['Regular','Malo','Bueno']);
    //Todas las catergorias (usadas para designar el CSS)
    self.categories = ko.observableArray(['Oficina','Mueble','Quimico']);
    //Borra un utensilio
    self.delete = function( tool ){
        UIkit.modal.confirm("¿Estás seguro de que deseas borrarlo?", function(){
            self.tools.remove(tool);
        });
    }

    // lista de imagenes de la galeria
    self.gallery = ko.observableArray([]);

    //Hover de las imagenes de la galeria
    self.imgSelected = function(data){
        data.isSelected(true);
    };
    //Unhover de las imagenes de la galeria
    self.Unselected = function(data){
        data.isSelected(false);
    };
    //Elimina una imagen de la galeria
    self.deleteImg = function(image){
        self.gallery.remove(image);
    };
    self.changeImg = ko.observable();

    self.addName = ko.observable("");
    self.addCode = ko.observable("");
    self.addCondition = ko.observable();
    self.addCategory = ko.observable();
    self.addImage = ko.observable();
    self.addOption = ko.observable(false);

    // agrega la) herramientas a la base de datos con AJAX
    self.SubmitAdd = function(){
        if(self.addName() === ""){
            $("#add_name").addClass("uk-form-danger");
            $("#add_name").attr("title","¡No olvides ponerle nombre!");
            return false;
        }
        self.tools.push(new tool(self.addName(),self.addCode(),self.addCondition(),self.addCategory(),self.addImage()));
        addTool = {
            nombre: self.addName(),
            codigo: self.addCode(),
            condicion: self.addCondition(),
            categoria: self.addCategory(),
            img: self.addImage()
        };
        $.post(getBaseUrl()+getController()+"agregar", addTool);
        self.addName("");
        self.addCode("");
        self.addCondition("Regular");
        self.addCategory("Oficina");
        self.addImage(null);
    };

    $('#img_gallery').on({
        'hide.uk.modal': function(){
            self.addOption(false);
            self.changeImg(false);
        },
        'show.uk.modal': function(){
            $.getJSON(getBaseUrl()+"gallery", function(data){
                $("#loading_gallery").ajaxStart(function(){
                    $(this).show();
                });
                var mappedImages = $.map(data, function(item){ 
                    return new gallery_item(item);
                });
                self.gallery(mappedImages);
                self.gallery.remove( mappedImages[0] );
                $("#loading_main").ajaxStop(function(){
                    $(this).hide();
                });
            });
        }
    });
}


//Aplica la Vista-Modelo
ko.applyBindings(new crudViewModel());


// funcion para la subida de archivos
$(function(){

    var progressbar = $("#progressbar"),
        bar         = progressbar.find('.uk-progress-bar'),
        settings    = {

        action: getBaseUrl()+'gallery/upload', // enlace de subida

        allow : '*.(jpg|jpeg|gif|png)', // formatos permitidos

            filelimit: 1,  //limite de archivos para subir

            type: 'json', //tipo de respuesta esperada

            param: 'image', // nombre del form de la subida de archivos

    loadstart: function() {
        bar.css("width", "0%").text("0%");
        progressbar.removeClass("uk-hidden");
    },

    progress: function(percent) {
        percent = Math.ceil(percent);
        bar.css("width", percent+"%").text(percent+"%");
    },

    allcomplete: function(response) {

        bar.css("width", "100%").text("100%");

        setTimeout(function(){
            progressbar.addClass("uk-hidden");
        }, 250);

        UIkit.notify("La imagen se ha subido con éxito", 'success')
    }
    
};

var select = UIkit.uploadSelect($("#upload-select"), settings),
    drop   = UIkit.uploadDrop($("#upload-drop"), settings);
});
