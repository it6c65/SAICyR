<div class="uk-container uk-margin-top uk-margin-large-left">
    <div id="main">
<br>
       <div class="uk-text-center">
           <h1> <?= $title ?> </h1>
        </div>
<br>
<br>
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
               <td class="uk-text-center"> <em class= "uk-text-large" data-bind="text: name"></em> </td>
               <td class="uk-text-center"> <span class="uk-text-muted" data-bind="text: realname"></span> </td>
               <td class="uk-text-center"> <span class="uk-text-warning uk-text-bold" data-bind="text: type"></span> </td>
               <td class="uk-text-center"> <span class="uk-text-primary uk-text-bold" data-bind="text:  $parent.areas()[area]"></span> </td>
               <td class="uk-text-center">
                    <button class="uk-button uk-button-primary" style="background-color:rgb(40,70,110);" data-bind="visible: !is_admin(), click: function(){ $parent.become_admin( $index() ) }"> <i class="uk-icon-user-secret"></i> Volverlo administrador</button>
                    <button class="uk-button uk-button-primary"  data-bind="visible: is_admin, click: function(){ $parent.become_user( $index() ) }"> <i class="uk-icon-user"></i> Volverlo usuario</button>
                    <button class="uk-button uk-button-danger" data-bind="click: function(){ $parent.delete_user($index()) }"> <i class="uk-icon-user-times"></i> Borrar Usuario</button>
                </td>
           </tr>
       </tbody>
   </table>
    </div>
</div>
