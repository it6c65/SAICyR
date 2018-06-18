<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center uk-flex-middle">
        <?= form_open('login/cambiar_clave', array("class" => "uk-form uk-form-horizontal uk-text-center") ) ?>
            <div class="uk-form-row">
                <h2> Escribe la nueva contraseña</h2>
                <hr>
                <?= validation_errors('<div class="uk-alert uk-alert-danger" data-uk-alert> 
                <a class="uk-alert-close uk-close"></a>', "</div>"); ?>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label uk-text-bold" for=""> Contraseña: </label>
                <div class="uk-form-controls">
                <input type="password" id="pass" name="password" class="uk-form-width-medium" placeholder="Pregunta Secreta" data-uk-tooltip="{pos: 'right'}" title="Mínimo 8 cáracteres">
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label uk-text-bold" for=""> Repite contraseña: </label>
                <div class="uk-form-controls">
                    <input type="password" id="rpass" name="repeat_password" class="uk-form-width-medium" placeholder="Respuesta Secreta" data-uk-tooltip="{pos: 'right'}" title="Repita la contraseña que ha colocado arriba">
                </div>
            </div>
            <div class="uk-form-row"><button class="uk-button uk-button-success"> <i class="uk-icon-save"></i> Guardar</button></div>
        </form>
    </div>
</div>
