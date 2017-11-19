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
                                <i class="uk-icon-hover uk-icon-large uk-icon-camera"></i><input type="file" id="articulo">
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
