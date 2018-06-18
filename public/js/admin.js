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
    this.area = data.area_id;
}

function userViewModel(){
    var self = this;

    self.getUsers = function(){
        $.getJSON( getBaseUrl()+"admuser/"+"lista", function(data){
            var mappedUsers = $.map(data, function(item){
                return new user(item);
            });
            self.users(mappedUsers);
            self.users.remove( mappedUsers[0] );
        });
    }
    self.getUsers();
    self.users = ko.observableArray([]);

    self.delete_user =  function(index){
        UIkit.modal.confirm("¿Estás seguro de que deseas borrarlo?", function(){
            $.post(getBaseUrl()+"admuser/"+"borrar", {data: ko.toJSON({ user: self.users()[index] }) 
            });
            self.users.remove( self.users()[index] );
        });
    }
    self.become_user = function(index){
        $.post(getBaseUrl()+"admuser/"+"become_user", {data: ko.toJSON({ user: self.users()[index] }) 
        });
        self.getUsers();
    }
    self.become_admin = function(index){
        $.post(getBaseUrl()+"admuser/"+"become_admin", {data: ko.toJSON({ user: self.users()[index] }) 
        });
        self.getUsers();
    }

}

//Aplica la Vista-Modelo
ko.applyBindings(new userViewModel());


