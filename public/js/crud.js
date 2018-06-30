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
    this.quantity = ko.observable(data.cantidad);
    this.scale = ko.observable(data.escala);
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
    //prevenir confusion de KO y Jquery
    var self = this;

    self.getTools = function(){
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
    };
    self.getTools();
    //Lista de todos las herramientas
    self.tools = ko.observableArray([]);
    //Todas las condiciones posibles (usadas para designar el CSS)
    self.conditions = ko.observableArray(['Operativo','En Reparación','Dañado']);
    //Todas las catergorias (usadas para designar el CSS)
    self.categories = ko.observableArray(['Oficina','Mueble','Quimico']);
    //Todas las escalas disponibles
    self.scales_group = ko.observableArray(['Unidades','Kgrs','Grs']);
    //Borra un utensilio
    self.delete = function(index){
        UIkit.modal.confirm("¿Estás seguro de que deseas borrarlo?", function(){
            $.post(getBaseUrl()+getController()+"borrar", {data: ko.toJSON({ tool: self.paginated()[index] }) 
            });
            self.tools.remove( self.paginated()[index] );
            UIkit.notify(" <i class='uk-icon-check'></i> Borrado con éxito", "success");
        });
    }
    //Sumar a la cantidad en el editar 
    self.sumQuan =  function(index){
        self.paginated()[index].quantity(Number(self.paginated()[index].quantity()) + 1);
    };
    //Restar a la cantidad en el editar  
    self.subQuan = function(index){
        self.paginated()[index].quantity(Number(self.paginated()[index].quantity()) - 1);
    };

    self.getImages = function(){
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
    };

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
    self.deleteImg = function(index){
        UIkit.modal.confirm("¿Estas seguro de que deseas borrar la imagen?", function(){
            $.post(getBaseUrl()+"gallery/delete", {data: ko.toJSON({ img: self.gallery()[index] }) 
            });
            self.gallery.remove( self.gallery()[index]);
            UIkit.notify(" <i class='uk-icon-check'></i> Imagen Borrada con éxito", "success");
            UIkit.notify(" <i class='uk-icon-info-circle'></i>  Recarga la pagina para que la imagenes borradas desaparezcan", "primary");
        });
    };
    self.changeImg = ko.observable();

    //Campos para añadir la herramienta
    self.addName = ko.observable("");
    self.addCode = ko.observable("");
    self.addCondition = ko.observable();
    self.addCategory = ko.observable();
    self.addQuantity = ko.observable("1");
    self.addScale = ko.observable();
    self.addImage = ko.observable();
    self.addOption = ko.observable(false);

    // agrega las herramientas a la base de datos con AJAX
    self.SubmitAdd = function(){
        // chequea los primeros datos nombre y codigo
        var check_name = /([a-z]|[A-Z]| ){2,30}/;
        var check_code = /([0-9]|-){1,999999999999999}/;
        if(self.addName() === ""){
            $("#add_name").addClass("uk-form-danger");
            $("#add_name").attr("title","¡No olvides ponerle nombre!");
            return false;
        }
        //encapsula los datos de la herramienta en un objeto
        addTool = {
            nombre: self.addName(),
            codigo: self.addCode(),
            condicion: self.addCondition(),
            categoria: self.addCategory(),
            cantidad: self.addQuantity(),
            escala: self.addScale(),
            img: self.addImage()
        };
        //manda un AJAX post para agregar los datos
        $.post(getBaseUrl()+getController()+"agregar", addTool, function(data, status){
            if(status == "success"){
                UIkit.notify(" <i class='uk-icon-check'></i> Añadido con éxito", "success");
                self.resetSubmit();
            }else{ UIkit.notify(" <i class='uk-icon-times'></i> Ha habido un error", "danger");
                self.resetSubmit();
            }
        });
            self.getTools();
    };
    //reinicia el formulario
    self.resetSubmit = function(){
        self.addName("");
        self.addCode("");
        self.addCondition("Operativo");
        self.addCategory("Oficina");
        self.addImage(null);
    };

    $('#img_gallery').on({
        'hide.uk.modal': function(){
            self.addOption(false);
            self.changeImg(false);
        },
        'show.uk.modal': function(){
            self.getImages();
        }
    });

    // paginacion
    // -Variables
    self.pageNumber = ko.observable(0);
    self.perPage = 13;
    // Total de paginas
    self.totalPages = ko.computed(function(){
        var total = Math.ceil(self.tools().length / self.perPage);
        return total - 1;
    });
    //Ordenar por codigo
    self.orderbyCode = function(){
        return self.tools.sort( function(l,r){
            return l.code() == r.code() ? 0 : ( l.code() < r.code() ? -1 : 1 )
        });
    }
    // Ordenar por condicion
    self.orderbyCondition = function(){
        return self.tools.sort( function(l,r){
            return l.current_condition() == r.current_condition() ? 0 : ( l.current_condition() < r.current_condition() ? -1 : 1 )
        });
    }
    // Ordernar por categoria
    self.orderbyCategory = function(){
        return self.tools.sort( function(l,r){
            return l.current_category() == r.current_category() ? 0 : ( l.current_category() < r.current_category() ? -1 : 1 )
        });
    }
    //busqueda
    self.Query = ko.observable('');
    self.paginated = ko.computed(function(){
        // Si no esta buscando muestra solo las herramientas paginadas
        if( self.Query() != '' ){
            var q = self.Query();
            return self.tools().filter(function(i){
                return i.name().toLowerCase().indexOf(q) >= 0;
            });
        }
        var primero = self.pageNumber() * self.perPage;
        return self.tools.slice(primero, primero+ self.perPage);
    });

    // Adivina si tiene atras de la paginacion
    this.hasPrevious = ko.computed(function(){
        return self.pageNumber() !== 0;
    });
    // Adivina si tiene siguiente de la paginacion
    this.hasNext = ko.computed(function(){
        return self.pageNumber() !== self.totalPages();
    });
    // Atras de la paginacion
    this.next = function(){
        if(self.pageNumber() < self.totalPages()){
            self.pageNumber( self.pageNumber() + 1 );
        }
    }
    // siguiente de la paginacion
    this.previous = function(){
        if(self.pageNumber() != 0){
            self.pageNumber( self.pageNumber() - 1 );
        }
    }
    // guardar los datos el objeto en la base de datos
    self.save = function(index){
        $.post(getBaseUrl()+getController()+"editar", {data: ko.toJSON({ tool: self.paginated()[index] }) 
        });
        UIkit.notify("<i class='uk-icon-check'></i> Guardado con éxito", "success");
    }
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

        UIkit.modal("#img_gallery").hide();

        UIkit.notify(" <i class='uk-icon-check'></i> La imagen se ha subido con éxito", 'success');
    }
    
};

var select = UIkit.uploadSelect($("#upload-select"), settings),
    drop   = UIkit.uploadDrop($("#upload-drop"), settings);
});
