// funcion para obtener el url de Codeigniter
function getBaseUrl(){
    var local = window.location;
    var base_url = local.protocol + "//" + local.host + "/";
    return base_url;
}

function user(data){
    this.id = data.id;
    this.name = data.username;
    this.realname = data.realname;
    if( data.tipo == "Director" ){
        this.is_admin = ko.observable(true);
    }else{
        this.is_admin = ko.observable(false);
    }
    this.type = data.tipo;
    this.area = data.area_id - 1;
    this.editing = ko.observable(false);
}

function userViewModel(){
    var self = this;

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
    self.users = ko.observableArray([]);
    /* ID areas: */
    /*     1 - taller */
    /*     2 - laboratorio */
    /*     3 - oficina */
    /*     4 - salon principal */
    /*     5 - sala de arte */
    /*     6 - taller de escultura */
    /*     7 - deposito */
    self.areas = ko.observableArray(["Taller","Laboratorio", "Oficina", "Salón Principal","Sala de Arte", "Taller de Escultura", "Depósito","Todas"]);

    self.delete_user =  function(index){
        UIkit.modal.confirm("¿Estás seguro de que deseas borrarlo?", function(){
            $.post(getBaseUrl()+"admuser/"+"borrar", {data: ko.toJSON({ user: self.users()[index] }) 
            });
            self.users.remove( self.users()[index] );
        });
    }
    self.save = function(index){
        $.post(getBaseUrl()+"admuser/"+"editar", {data: ko.toJSON({ user: self.users()[index] }) 
        });
        self.getUsers();
    }

}

//Aplica la Vista-Modelo
ko.applyBindings(new userViewModel());


