function tool( name, code, ccondition, ccategory ){
    this.name = ko.observable(name);
    this.code = ko.observable(code);
    this.current_condition = ko.observable(ccondition);
    this.current_category = ko.observable(ccategory);
    this.editing = ko.observable(false);
};

function crudViewModel(){
    var self = this;
    self.tools = ko.observableArray([
        new tool('Silla', "12.85.43.43.55.44", "Regular", 'Oficina'),
        new tool( 'Martillo', "12.85.43.43.65.44", 'Malo', 'Mueble'),
        new tool( 'Agua', "42.85.43.43.65.44", 'Bueno', 'Quimico')
    ]);
    self.conditions = ko.observableArray(['Regular','Malo','Bueno']);
    self.categories = ko.observableArray(['Oficina','Mueble','Quimico']);
    self.delete = function( tool ){
        self.tools.remove(tool);
    }
}

ko.applyBindings(new crudViewModel());
