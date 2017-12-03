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
                    <button class="uk-button"> <i class="uk-icon-arrows-v"></i> condicion </button>
                    <button class="uk-button"> <i class="uk-icon-arrows-v"></i> categoria </button>
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
        <form class="uk-form uk-form-stacked uk-width-1-2" action="">
        <div class="uk-grid">
            <div class="uk-form-row uk-width-1-1">
                <label for="add_name" class="uk-form-label"> Nombre del Elemento </label>
                <input type="text" placeholder="Nombre" id="add_name" class="uk-width-1-1">
            </div> 
           <div class="uk-form-row uk-width-1-1">
               <label class="uk-form-label" for="add_code">Codigo del Elemento</label>
               <input id="add_code" type="text" placeholder="Codigo" class="uk-width-1-1">
           </div>
            <div class="uk-form-row uk-width-1-2">
                <label class="uk-form-label" for="add_condition">Condición</label>
                <select id="add_condition" name="">
                    <option value="1">Regular</option>
                    <option value="2">Malo</option>
                    <option value="3">Bueno</option>
                </select>
            </div>
            <div class="uk-form-row uk-width-1-2">
                <label class="uk-form-label" for="add_category"> Categoría</label>
                <select id="add_category" name="">
                    <option value="Suministros de Oficina">Oficina</option>
                    <option value="Muebles">Mueble</option>
                    <option value="Quimicos">Químicos</option>
                </select>
            </div>
            <div class="uk-form-row uk-width-1-1">
                <button class="uk-button uk-button-success"><i class="uk-icon-send"></i> Enviar </button>
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
                <tbody class="list">
                    <tr>
                        <td class="uk-text-center">
                            <div class="uk-form-file">
                                <i class="uk-icon-hover uk-icon-large uk-icon-camera" id="icon_img"></i><input type="file" id="articulo">
                                <br>
                                <img id="img_articulo" src="#" class="uk-hidden uk-margin-top">
                            </div>
                            <br>
                            <button class="uk-button uk-button-danger uk-hidden uk-margin-top" id="exit_img"> 
                            <i class="uk-icon-ban"></i> Cancelar 
                            </button>
                        </td>
                        <td class="uk-text-center uk-text-bold uk-text-large"> <p id="nombre_actual">Silla</p>
                            <input type="hidden" id="nombre">
                        </td>
                        <td class="uk-text-center"> <p id="codigo_actual">12.85.43.43.55.43</p> 
                            <input id="codigo" type="hidden">
                        </td>
                        <td class="uk-text-center"> <div class="uk-badge" id="condicion_actual">Regular</div>
                        <select id="condicion" name="Condicion" class="uk-hidden">
                            <option value="1"> Regular </option>
                            <option value="2"> Malo </option>
                            <option value="3"> Bueno </option>
                        </select>
                        </td>
                        <td class="uk-text-center"> <div class="uk-text-primary" id="categoria_actual">Oficina</div>
                        <select id="categoria" name="Categoria" class="uk-hidden">
                            <option value="Suministros de Oficina"> Oficina </option>
                            <option value="Muebles"> Mueble </option>
                            <option value="Quimicos"> Químicos </option>
                        </select>
                        </td>
                        <td class="uk-text-center"> 
                            <button class="uk-button uk-button-primary uk-hidden" id="save" style="background-color:rgb(40,70,110);"><i class="uk-icon-save"></i> Guardar </button>
                            <button class="uk-button uk-button-primary" id="edit"><i class="uk-icon-edit"></i> Editar </button>
                            <button class="uk-button uk-button-danger" id="delete"><i class="uk-icon-trash"></i> Borrar </button>
                            <button class="uk-button uk-button-danger uk-hidden" id="back"><i class="uk-icon-ban"></i> Cancelar </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
