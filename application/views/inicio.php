<div class="uk-container uk-margin-top uk-margin-large-left">
    <div id="main">
<br>
       <div class="uk-text-center">
            <h1> Inicio</h1>
        </div>
        <ul class="uk-tab uk-tab-grid uk-tab-center" data-uk-tab="{connect : '#ryd'}">
            <?php if($admin == "Director"): ?>
            <li class="uk-width-1-2"><a href=""> <i class="uk-icon-history"></i> Registro</a></li>
            <?php endif; ?>
            <li class="uk-active uk-width-1-2"><a href=""> <i class="uk-icon-newspaper-o"></i> Documentación</a> </li>
            <!-- <li class="uk-width-1-3"><a href=""> Algo más</a></li> -->
        </ul>
        <ul id="ryd" class="uk-switcher uk-margin">
        <?php if($admin == "Director"): ?>
        <div id="logs">
            <li>
<br>
                <div class="uk-text-center uk-form">
                    <div class="uk-form-icon">
                        <i class="uk-icon-search"></i>
                        <input class="search uk-form-blank" type="text" placeholder="Buscar...">
                    </div>
<br>
                <div class="uk-button-group">
Ordenar por:
                    <button class="uk-button uk-button-primary uk-button-small sort" data-sort="id"> <i class="uk-icon-arrows-v"></i> Numero</button>
                    <button class="uk-button uk-button-primary uk-button-small sort" data-sort="usuario"> <i class="uk-icon-arrows-v"></i> Usuario</button>
                    <button class="uk-button uk-button-primary uk-button-small sort" data-sort="accion"> <i class="uk-icon-arrows-v"></i> Acción</button>
                    <button class="uk-button uk-button-primary uk-button-small sort" data-sort="hora"> <i class="uk-icon-arrows-v"></i> Hora</button>
                    <button class="uk-button uk-button-primary uk-button-small sort" data-sort="fecha"> <i class="uk-icon-arrows-v"></i> Fecha</button>
                    <button class="uk-button uk-button-primary uk-button-small sort" data-sort="area"> <i class="uk-icon-arrows-v"></i> Área</button>
                </div>
                </div>
<br>
                <button id="borrar_registro" class="uk-button uk-button-danger uk-width-1-1"> <i class="uk-icon-fire"></i> Eliminar registro</button>
            <div class="uk-overflow-container">
                <?= $this->table->generate() ?>
            </div>

            </li>
          </div>
          <?php endif; ?>
            <li>
            <br>
            <br>
            <div class="uk-panel uk-panel-box uk-text-center">
                <div class="uk-panel-badge uk-badge uk-badge-warning">Aviso</div>
                <h3 class="uk-panel-title"> Licencia del Proyecto</h3>
                <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><?= img("public/img/big_license.png"); ?> </a>
            </div>
            <br>
            <br>
            <br>
            <br>
            </li>
        </ul>
    </div>
</div>
