<div id="inventario" class="uk-container uk-margin-top uk-margin-large-left">
    <div id="main">
        <br>
        <div class="uk-text-center uk-form">
        <h1 class="uk-text-bold"> <?= $header ?> </h1>
            <div class="uk-form-icon">
                <i class="uk-icon-search"></i>
                <input class="uk-form-blank" type="text" placeholder="Buscar..." data-bind="value: Query, valueUpdate: 'keyup'">
            </div>
        </div>
        <div class="uk-overflow-container">
            <h2 class="uk-text-center" ><i>Inventario</i></h2>
            <div class="uk-container uk-grid"> 
               <?php if($area == $current || $area == 0): ?>
               <div class="uk-width-6-10">
                    <button class="uk-button uk-button-success" data-uk-toggle="{ target:'#add', animation:'uk-animation-slide-left, uk-animation-slide-right' }"> 
                        <i class="uk-icon-plus"></i> Agregar
                    </button>
                </div>
                <?php endif; ?>
                <div class="uk-width-4-10">
                    Ordenar por:
                    <button class="uk-button" data-bind="click: orderbyCode"> <i class="uk-icon-arrows-v"></i> Codigo </button>
                    <button class="uk-button" data-bind="click: orderbyCondition"> <i class="uk-icon-arrows-v"></i> Condición </button>
                    <button class="uk-button" data-bind="click: orderbyCategory"> <i class="uk-icon-arrows-v"></i> Categoría </button>
                </div>            
            </div>      
<br>
<!-- Panel para agregar los datos-->
<div class="uk-hidden uk-panel uk-panel-box uk-panel-box-success uk-text-center" id="add">
    <h3 class="uk-panel-title"><i class="uk-icon-plus"></i> Agregar Elemento <i class="uk-icon-plus"></i></h3>
    <div class="uk-container uk-overflow-container">
        <form class="uk-form" data-bind="submit: SubmitAdd">
        <table class="uk-table">
            <thead>
                <tr>
                    <th class="uk-text-center">Imagen</th>
                    <th class="uk-text-center">Nombre</th>
                    <th class="uk-text-center">Codigo</th>
                    <th class="uk-text-center">Condición</th>
                    <th class="uk-text-center">Categoría</th>
                    <th class="uk-text-center">Cantidad</th>
                    <th class="uk-text-center">Escala</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Imagen de la galeria-->
                    <td class="uk-text-center">
                        <a href="#img_gallery" data-uk-modal data-bind="visible: !addImage(), click: addOption">
                            <i class="uk-icon-hover uk-icon-large uk-icon-camera"></i>
                        </a>
                        <i class="uk-icon-hover uk-icon-large uk-icon-check uk-text-success" data-bind="visible: addImage"></i>
                        <a class="uk-button" href="#img_gallery" data-uk-modal data-bind="visible: addImage, click: addOption"> Escoger Otra</a>
                    </td>
                    <!-- nombre -->
                    <td class="uk-text-center">
                        <input type="text" placeholder="Nombre" id="add_name" name="nombre" data-bind="value: addName" data-uk-tooltip>
                    </td>
                    <!-- codigo -->
                    <td class="uk-text-center">
                       <input id="add_code" type="text" placeholder="Codigo" name="codigo" data-bind="value: addCode">
                    </td>
                    <!-- condicion -->
                    <td class="uk-text-center">
                        <select id="add_condition" name="condicion" data-bind="options: conditions, value: addCondition">
                        </select>
                    </td>
                    <!-- categoria -->
                    <td class="uk-text-center">
                        <select id="add_category" name="categoria" data-bind="options: categories, value: addCategory">
                        </select>
                    </td>
                    <!-- cantidad -->
                    <td class="uk-text-center">
                        <input type="number" min="1" placeholder="Cantidad" id="add_quantity" name="cantidad" data-bind="value: addQuantity" class="uk-form-width-mini">
                    </td>
                    <!-- Escala -->
                    <td class="uk-text-center">
                        <select id="add_scale" name="escala" data-bind="options: scales_group, value: addScale" class="uk-form-width-mini">
                        </select>
                    </td>
                    <!-- Enviar -->
                    <td class="uk-text-center">
                        <button class="uk-button uk-button-success" type="submit"><i class="uk-icon-send"></i> Enviar </button>
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
</div>
<!-- Panel Principal inventario-->
<div class="uk-panel uk-panel-box uk-panel-box-primary uk-text-center" data-bind="visible: tools().length == 0">
    <div class="uk-panel-badge uk-badge"> Nota</div>
    <h2 class="uk-panel-title">¡No hay nada! </h2>
    <p> Agregar elementos con el boton "agregar", qué está arriba de este mensaje </p>
</div>
<div id="loading_main" class="uk-text-center"><i class="uk-icon-spinner uk-icon-large uk-icon-spin"></i></div>
          <table class="uk-table uk-table-hover">
                <thead data-bind="visible: tools().length > 0">
                    <tr>
                        <th class="uk-text-center">Imagen</th>
                        <th class="uk-text-center">Nombre</th>
                        <th class="uk-text-center">Cantidad</th>
                        <th class="uk-text-center">Escala</th>
                        <th class="uk-text-center">Codigo</th>
                        <th class="uk-text-center">Condición</th>
                        <th class="uk-text-center">Categoría</th>
                        <th class="uk-text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody data-bind="foreach: paginated">
                    <tr>
                        <td class="uk-text-center">
                            <figure class="uk-overlay">
                                <img alt="item_img" data-bind="attr: { src: img, width: '100', height: '100' },visible: img">
                                <figcaption class="uk-overlay-panel uk-overlay-background uk-text-center" data-bind="visible: editing">
                                    <a href="#img_gallery" class="uk-button uk-button-primary uk-button-mini" data-uk-modal data-bind="click: function() { $parent.changeImg($index()) } "><i class="uk-icon-clone"></i> Cambiar</a>
                                    <button class="uk-button uk-button-danger uk-button-mini" data-bind="click: function() { img(null) }"><i class="uk-icon-remove"></i> Quitar</button>
                                </figcaption>
                            </figure>
                            <a href="#img_gallery" data-uk-modal data-bind="visible: !img(), click: function() { $parent.changeImg($index()); editing(true) }">
                                <i class="uk-icon-hover uk-icon-large uk-icon-camera"></i>
                            </a>
                       </td>
                        <td class="uk-text-center uk-text-bold uk-text-large"> <p data-bind="text: name, visible: !editing()"></p>
                            <input type="text" id="nombre" data-bind="value: name, visible: editing" class="uk-form-width-small">
                        </td>
                        <td class="uk-text-center">
                            <p data-bind="text: quantity, visible: !editing()"></p>
                            <div id="editando_cantidades" data-bind="visible: editing">
                                <button class="uk-button uk-button-success uk-button-mini" data-bind="click: function(){ $parent.sumQuan($index()) }"><span class="uk-icon-plus"></span></button>
                                <input id="cantidad" type="text" data-bind="value:quantity" class="uk-form-width-mini">
                                <button class="uk-button uk-button-danger uk-button-mini" data-bind="click: function(){ $parent.subQuan($index()) }" ><span class="uk-icon-minus"></span></button>
                            </div>
                        </td>
                        <td class="uk-text-center">
                            <p data-bind="text: scale, visible: !editing()"></p>
                            <select id="escala" name="Escala" data-bind="options: $parent.scales_group, visible: editing, value: scale" class="uk-form-width-mini"></select>
                        </td>
                        <td class="uk-text-center"> <p data-bind="text: code, visible: !editing()"></p> 
                            <p data-bind="ifnot: code, visible: !editing()"> No tiene código</p>
                            <input id="codigo" type="text" data-bind="value: code, visible: editing" class="uk-form-width-small">
                        </td>
                        <td class="uk-text-center"> <div data-bind="text: current_condition, visible: !editing(), css: { 'uk-badge': current_condition, 'uk-badge-danger': current_condition() == 'Dañado', 'uk-badge-success': current_condition() == 'Operativo' }"></div>
                        <select id="condicion" name="Condicion" data-bind="options: $parent.conditions, value: current_condition, visible: editing">
                        </select>
                        </td>
                        <td class="uk-text-center"> <div data-bind="text: current_category, visible: !editing(), css: { 'uk-text-primary': current_category() == 'Oficina', 'uk-text-warning': current_category() == 'Mueble', 'uk-text-success': current_category() == 'Quimico' }"></div>
                        <select id="categoria" name="Categoria" data-bind="options: $parent.categories, value: current_category, visible: editing">
                        </select>
                        </td>
                        <?php if($area == $current || $area == 0): ?>
                        <!-- Botones de accion-->
                        <td class="uk-text-center"> 
                            <button class="uk-button uk-button-primary" style="background-color:rgb(40,70,110);" data-bind="visible: editing, click: function() { $parent.save($index()); editing(false); }"><i class="uk-icon-save"></i> Guardar </button>
                            <button class="uk-button uk-button-primary" data-bind="click: function() { editing(true) }, visible: !editing()"><i class="uk-icon-edit"></i> Editar </button>
                            <button class="uk-button uk-button-danger"  data-bind="visible: !editing(), click: function() { $parent.delete($index()) }"><i class="uk-icon-trash"></i> Borrar </button>
                            <button class="uk-button uk-button-danger"  data-bind="click: function() { editing(false) }, visible: editing"><i class="uk-icon-ban"></i> Cancelar </button>
                        </td>
                        <?php else: ?>
                        <td class="uk-text-center">
                            <div class="uk-text-bold uk-text-danger"><i class="uk-icon-ban"></i> No es tu area asignada</div>
                        </td>
                        <?php endif; ?>
                    </tr>
                </tbody>
            </table>
        <ul class="uk-pagination" data-bind="visible: tools().length > 0">
            <li class="uk-pagination-previous"><a href="" data-bind="visible: hasPrevious, click: previous"><i class="uk-icon-angle-double-left"></i> Anterior</a></li>
            <li class="uk-active"><span data-bind="text: pageNumber() + 1"></span></li>
            <li class="uk-pagination-next"> <a href="" data-bind="visible: hasNext, click: next">Siguiente <i class="uk-icon-angle-double-right"></i></a></li>
        </ul>
<br>
        </div>
    </div>
</div>
 <!--  Modal  de Galería -->
<div id="img_gallery" class="uk-modal">
    <div class="uk-modal-dialog uk-modal-dialog-large">
        <a class="uk-modal-close uk-close"></a>
        <div class="uk-modal-header uk-text-center"> 
            <h1> Galería de Imágenes</h1>
            <div id="loading_gallery" class="uk-text-center"><i class="uk-icon-spinner uk-icon-large uk-icon-spin"></i></div>
        </div>
        <div class="uk-overflow-container"> 
            <div class="uk-align-center" >
                <ul class="uk-thumbnav uk-grid-width-1-6 uk-flex uk-flex-middle" data-bind="foreach: gallery">
                    <li data-bind="css: { 'uk-active': isSelected}">
                        <a href="#" data-bind="event: { mouseover: $parent.imgSelected, mouseout: $parent.Unselected }"><img data-bind="attr: { src: url, width: '200', height: '200' }, visible: !isSelected()">
                        <figure class="uk-overlay" data-bind="visible: isSelected">
                            <img data-bind="attr: { src: url, width: '200', height: '200' }">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-text-center">
                                <div class="uk-button-group">
                                    <button class="uk-button uk-button-success uk-button-small" data-bind="click: function() { $parent.addImage($parent.gallery()[$index()].id) }, visible: $parent.addOption "> <i class="uk-icon-photo"></i> Añadir </button>
                                    <button class="uk-button uk-button-primary uk-button-small" data-bind="click: function() { $parent.paginated()[$parent.changeImg()].img($parent.gallery()[$index()].url()); UIkit.modal('#img_gallery').hide(); }, visible: !$parent.addOption()"> <i class="uk-icon-clone"></i> Cambiar </button>
                                    <button class="uk-button uk-button-danger uk-button-small" data-bind="click: function() { $parent.deleteImg($index()) }"> <i class="uk-icon-trash"></i> Borrar </button>
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


