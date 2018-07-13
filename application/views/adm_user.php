<div class="uk-container uk-margin-top uk-margin-large-left">
    <div id="main">
<br>
       <div class="uk-text-center">
           <h1> <?= $title ?> </h1>
        </div>
<br>
<br>
        <div class="uk-overflow-container">
       <table class="uk-table uk-table-hover">
           <thead data-bind="visible: !users().length == 0">
               <tr>
                   <th class="uk-text-center">Nombre de usuario</th>
                   <th class="uk-text-center">Nombre Real</th>
                   <th class="uk-text-center">Tipo</th>
                   <th class="uk-text-center">Area designada</th>
                   <th class="uk-text-center">Acciones</th>
               </tr>
           </thead>
        <div class="uk-panel uk-panel-box uk-text-center" data-bind="visible: users().length == 0">
            <div class="uk-panel-badge uk-badge uk-badge-warning"> Aviso</div>
            <h2 class="uk-panel-title">¡No hay ningun otro usuario registrado! </h2>
        </div>
       <tbody data-bind="foreach: users">
           <tr>
               <td class="uk-text-center"> <em class= "uk-text-large" data-bind="text: name, visible: !editing()"></em>
                    <input type="text" data-bind="value: name, visible: editing">
                 </td>
               <td class="uk-text-center"> <span class="uk-text-muted" data-bind="text: realname, visible: !editing()">
                </span>
                <input type="text" data-bind="value: realname, visible: editing">
                 </td>
               <td class="uk-text-center"> <span class="uk-text-warning uk-text-bold" data-bind="text: type"></span> </td>
               <td class="uk-text-center"> <span class="uk-text-primary uk-text-bold" data-bind="text:  $parent.zone()[area].nombre(), visible: !editing()"></span>
                <select data-bind="options: $parent.zone(), value: area, optionsText: 'nombre', optionsValue: 'id', visible: editing, disable: is_admin()">
                </select>
 </td>
               <td class="uk-text-center">
                    <button class="uk-button uk-button-primary" data-bind="click: function(){ editing(true) }, visible: !editing()"> <i class="uk-icon-edit"></i> Editar</button>
                    <button class="uk-button uk-button-success" data-bind="visible:editing, click: function(){ editing(false) }"><i class="uk-icon-arrow-left"></i> Atrás </button>
                    <button class="uk-button uk-button-primary" style="background-color:rgb(40,70,110);" data-bind="visible: editing(), click: function(){ $parent.save($index()) }"> <i class="uk-icon-save"></i> Guardar</button>
                    <button class="uk-button uk-button-danger" data-bind="click: function(){ $parent.delete_user($index()) }, visible: !is_admin()"> <i class="uk-icon-user-times"></i> Borrar Usuario</button>
                </td>
           </tr>
       </tbody>
   </table>
        </div>
    </div>
</div>
