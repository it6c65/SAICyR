// funcion para obtener el url de Codeigniter
function getBaseUrl(){
    var local = window.location;
    var base_url = local.protocol + "//" + local.host + "/";
    return base_url;
}

// datos modificables del usuario
function user(data){
    this.id = data.id;
    this.name = data.username;
    this.realname = data.realname;
    // verifica si es admin para no se pueda borrar
    // ni cambiar de area
    if( data.tipo == "Director" ){
        this.is_admin = ko.observable(true);
    }else{
        this.is_admin = ko.observable(false);
    }
    this.type = data.tipo;
    this.area = data.area_id;
    this.editing = ko.observable(false);
}

function userViewModel(){
    var self = this;
    // solicita los usuarios al servidor
    self.getUsers = function(){
        $.getJSON( getBaseUrl()+"admuser/"+"lista", function(data){
            var mappedUsers = $.map(data, function(item){
                return new user(item);
            });
            self.users(mappedUsers);
            // self.users.remove( mappedUsers[0] );
        });
    }
    self.getUsers();
    // Guarda todos los usuarios en un Arreglo
    self.users = ko.observableArray([]);
    /* ID areas: */
    /*     0 - Todas (solo de seguridad) */
    /*     1 - taller */
    /*     2 - laboratorio */
    /*     3 - oficina */
    /*     4 - salon principal */
    /*     5 - sala de arte */
    /*     6 - taller de escultura */
    /*     7 - deposito */
    self.zone = ko.observableArray([
        { nombre: ko.observable("Todas"), id: 0 },
        { nombre: ko.observable("Taller"), id: 1 },
        { nombre: ko.observable("Laboratorio"), id: 2 },
        { nombre: ko.observable("Oficina"), id: 3 },
        { nombre: ko.observable("Salón Principal"), id: 4 },
        { nombre: ko.observable("Sala de Arte"), id: 5  },
        { nombre: ko.observable("Taller de Escultura"), id: 6 },
        { nombre: ko.observable("Depósito"), id: 7 }
    ]);

    self.delete_user =  function(index){
        UIkit.modal.confirm("¿Estás seguro de que deseas borrarlo?", function(){
            $.post(getBaseUrl()+"admuser/"+"borrar", {data: ko.toJSON({ user: self.users()[index] }) 
            });
            self.users.remove( self.users()[index] );
            UIkit.notify(" <i class='uk-icon-check'></i> Borrado con éxito", "success");
        });
    }
    self.save = function(index){
        $.post(getBaseUrl()+"admuser/"+"editar", {data: ko.toJSON({ user: self.users()[index] }) 
        });
        self.getUsers();
        UIkit.notify(" <i class='uk-icon-check'></i> Guardado con éxito", "success");
    }

}

//Aplica la Vista-Modelo
ko.applyBindings(new userViewModel());


