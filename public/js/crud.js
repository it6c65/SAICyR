function crudViewModel(){
    var self = this;
    self.tool = ko.observableArray([
        { name: 'Silla', code: "12.85.43.43.55.44", current_condition: "Regular", current_category: 'Oficina' },
        { name: 'Martillo', code: "12.85.43.43.65.44", current_condition: 'Malo', current_category: 'Mueble' }
    ]);
    self.conditions = ko.observableArray(['Regular','Malo','Bueno']);
    self.categories = ko.observableArray(['Oficina','Mueble','Quimico']);
    self.edit = ko.observable(false);
    self.edit_view = function(value){
        self.edit(value);
    }
}

ko.applyBindings(new crudViewModel());
