<div id="inventario" class="uk-container uk-margin-top uk-margin-large-left">
    <div id="main">
        <br>
        <div class="uk-text-center uk-form">
            <h1 class="uk-text-bold"> Taller de Restauración</h1>
            <div class="uk-form-icon">
                <i class="uk-icon-search"></i>
                <input class="search uk-form-blank" type="text" placeholder="Buscar...">
            </div>
        </div>
        <div class="uk-overflow-container">
            <h2 class="uk-text-center" ><i>Inventario</i></h2>
            <div class="uk-container uk-grid">
               <div class="uk-width-6-10">
                    <button class="uk-button uk-button-success" data-uk-toggle="{ target:'#add', animation:'uk-animation-slide-left, uk-animation-slide-right' }"> 
                        <i class="uk-icon-plus"></i> Agregar
                    </button>
                </div>
                <div class="uk-width-4-10">
                    Ordenar por:
                    <button class="uk-button"> <i class="uk-icon-arrows-v"></i> Codigo </button>
                    <button class="uk-button"> <i class="uk-icon-arrows-v"></i> Condición </button>
                    <button class="uk-button"> <i class="uk-icon-arrows-v"></i> Categoría </button>
                </div>            
            </div>      
<br>
<div class="uk-hidden uk-panel uk-panel-box uk-panel-box-success uk-text-center" id="add">
    <h3 class="uk-panel-title"><i class="uk-icon-plus"></i> Agregar Elemento <i class="uk-icon-plus"></i></h3>
    <div class="uk-container uk-grid">
        <div class="uk-width-1-2 uk-vertical-align">
               <div class="uk-vertical-align-middle">
                    <div class="uk-form-file">
                         <i class="uk-icon-hover uk-icon-large uk-icon-camera" id="add_icon_img"></i><input type="file" id="add_item">
                        <br>
                        <img id="img_item" src="#" class="uk-hidden uk-margin-top">
                    </div>
                    <br>
                    <button class="uk-button uk-button-danger uk-hidden uk-margin-top" id="add_exit_img"> 
                    <i class="uk-icon-ban"></i> Cancelar 
                    </button>
                </div>
        </div>
        <?= form_open("taller/agregar", array("class" => "uk-form uk-form-stacked uk-width-1-2")); ?>
        <div class="uk-grid">
            <div class="uk-form-row uk-width-1-1">
                <label for="add_name" class="uk-form-label"> Nombre del Elemento </label>
                <input type="text" placeholder="Nombre" id="add_name" class="uk-width-1-1" name="nombre">
            </div> 
           <div class="uk-form-row uk-width-1-1">
               <label class="uk-form-label" for="add_code">Codigo del Elemento</label>
               <input id="add_code" type="text" placeholder="Codigo" class="uk-width-1-1" name="codigo">
           </div>
            <div class="uk-form-row uk-width-1-2">
                <label class="uk-form-label" for="add_condition">Condición</label>
                <select id="add_condition" name="condicion">
                    <option value="1">Regular</option>
                    <option value="2">Malo</option>
                    <option value="3">Bueno</option>
                </select>
            </div>
            <div class="uk-form-row uk-width-1-2">
                <label class="uk-form-label" for="add_category"> Categoría</label>
                <select id="add_category" name="categoria">
                    <option value="Suministros de Oficina">Oficina</option>
                    <option value="Muebles">Mueble</option>
                    <option value="Quimicos">Químicos</option>
                </select>
            </div>
            <div class="uk-form-row uk-width-1-1">
                <button class="uk-button uk-button-success" type="submit"><i class="uk-icon-send"></i> Enviar </button>
            </div>
        </div>
        </form>
    </div>
</div>
          <table class="uk-table uk-table-hover">
                <thead>
                    <tr>
                        <th class="uk-text-center">Imagen</th>
                        <th class="uk-text-center">Nombre</th>
                        <th class="uk-text-center">Codigo</th>
                        <th class="uk-text-center">Condición</th>
                        <th class="uk-text-center">Categoría</th>
                        <th class="uk-text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="list" data-bind="foreach: tools">
                    <tr>
                        <td class="uk-text-center">
                            <figure class="uk-overlay uk-overlay-hover" data-bind="visible: img">
                                <img alt="item_img" data-bind="attr: { src: img, width: '150', height: '200' }">
                                <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-slide-top uk-text-center">
                                    <a href="#img_gallery" class="uk-button uk-button-primary" data-uk-modal><i class="uk-icon-clone"></i> Cambiar</a>
                                </figcaption>
                            </figure>
                            <a href="#img_gallery" data-uk-modal data-bind="visible: !img()">
                                <i class="uk-icon-hover uk-icon-large uk-icon-camera"></i>
                            </a>
                       </td>
                        <td class="uk-text-center uk-text-bold uk-text-large"> <p data-bind="text: name, visible: !editing()"></p>
                            <input type="text" id="nombre" data-bind="value: name, visible: editing">
                        </td>
                        <td class="uk-text-center"> <p id="codigo_actual" data-bind="text: code, visible: !editing()"></p> 
                            <input id="codigo" type="text" data-bind="value: code, visible: editing">
                        </td>
                        <td class="uk-text-center"> <div id="condicion_actual" data-bind="text: current_condition, visible: !editing(), css: { 'uk-badge': current_condition, 'uk-badge-danger': current_condition() == 'Malo', 'uk-badge-success': current_condition() == 'Bueno' }"></div>
                        <select id="condicion" name="Condicion" data-bind="options: $parent.conditions, value: current_condition, visible: editing">
                        </select>
                        </td>
                        <td class="uk-text-center"> <div id="categoria_actual" data-bind="text: current_category, visible: !editing(), css: { 'uk-text-primary': current_category() == 'Oficina', 'uk-text-warning': current_category() == 'Mueble', 'uk-text-success': current_category() == 'Quimico' }"></div>
                        <select id="categoria" name="Categoria" data-bind="options: $parent.categories, value: current_category, visible: editing">
                        </select>
                        </td>
                        <td class="uk-text-center"> 
                            <button class="uk-button uk-button-primary" id="save" style="background-color:rgb(40,70,110);" data-bind="visible: editing"><i class="uk-icon-save"></i> Guardar </button>
                            <button class="uk-button uk-button-primary" id="edit" data-bind="click: function() { editing(true) }, visible: !editing()"><i class="uk-icon-edit"></i> Editar </button>
                            <button class="uk-button uk-button-danger" id="delete" data-bind="visible: !editing(), click: $parent.delete "><i class="uk-icon-trash"></i> Borrar </button>
                            <button class="uk-button uk-button-danger" id="back" data-bind="click: function() { editing(false) }, visible: editing"><i class="uk-icon-ban"></i> Cancelar </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 <!--  Modal  de Galería -->
<div id="img_gallery" class="uk-modal">
    <div class="uk-modal-dialog uk-modal-dialog-large">
        <a class="uk-modal-close uk-close"></a>
        <div class="uk-modal-header uk-text-center"> 
            <h1> Galería de Imágenes</h1>
        </div>
        <div class="uk-overflow-container"> 
            <div class="uk-grid uk-align-center" >
                <ul class="uk-thumbnav uk-width-1-12" data-bind="foreach: gallery">
                    <li data-bind="css: { 'uk-active': isSelected}">
                        <a href="#" data-bind="event: { mouseover: $parent.imgSelected, mouseout: $parent.Unselected }"><img data-bind="attr: { src: url, width: '200', height: '200' }, visible: !isSelected()">
                        <figure class="uk-overlay" data-bind="visible: isSelected">
                            <img data-bind="attr: { src: url, width: '200', height: '200' }">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-text-center">
                                <div class="uk-button-group">
                                    <button class="uk-button uk-button-success uk-button-small" data-bind="click: $parent.setImage  "> <i class="uk-icon-photo"></i> Seleccionar </button>
                                    <button class="uk-button uk-button-danger uk-button-small" data-bind="click: $parent.deleteImg"> <i class="uk-icon-trash"></i> Borrar </button>
                                </div>
                            </figcaption>
                        </figure>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<br>
<br>
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-placeholder uk-text-center uk-width-1-1" id="upload-drop">
                <h1><i class="uk-icon-cloud-upload"></i></h1>
                <p> Puedes arrastrar la imagen a subir o <a class="uk-form-file">Seleccionarla manualmente <input id="upload-select" type="file">
 </a> </p>
            </div>
            <div id="progressbar" class="uk-progress uk-progress-warning uk-progress-mini uk-width-1-1 uk-hidden">
                <div class="uk-progress-bar" style="width:0%"></div>
            </div>
        </div>
    </div>
</div>


