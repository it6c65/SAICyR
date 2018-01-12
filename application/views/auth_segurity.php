<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center uk-flex-middle">
        <div class="uk-alert uk-alert-warning uk-alert-large uk-text-center">
            <h2>¡Aviso de Seguridad!</h2>
            <p> Para mantener su cuenta segura, necesitamos que configuré una pregunta de seguridad en caso de extravío de contraseña u olvido</p>
        </div>
            <?= form_open('login/seguridad_registro', array("class" => "uk-form uk-form-horizontal uk-text-center") ) ?>
                <div class="uk-form-row">
                    <h2> Escribe la pregunta secreta</h2>
                    <hr>
                    <?= validation_errors('<div class="uk-alert uk-alert-danger" data-uk-alert> 
                    <a class="uk-alert-close uk-close"></a>', "</div>"); ?>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Pregunta Secreta: </label>
                    <div class="uk-form-controls">
                    ¿<input type="text" id="question" name="question_secret" class="uk-form-width-medium" placeholder="Pregunta Secreta" data-uk-tooltip="{pos: 'right'}" title="Escribe la pregunta secreta. Máximo 140 carácteres" value="<?= set_value('question_secret'); ?>">?
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Respuesta Secreta: </label>
                    <div class="uk-form-controls">
                        <div class="uk-form-password">
                            <input type="password" id="answer" name="answer_secret" class="uk-form-width-medium" placeholder="Respuesta Secreta" data-uk-tooltip="{pos: 'right'}" title="Dale clic a mostrar para visualizar la respuesta antes de enviar.  Máximo 140 carácteres">
                            <a class="uk-form-password-toggle" href="" data-uk-form-password="{lblShow:'Mostrar',lblHide:'Ocultar'}">Mostrar</a>
                        </div>
                    </div>
                </div>
                <div class="uk-form-row"><button class="uk-button uk-button-success"> <i class="uk-icon-save"></i> Guardar</button></div>
            </form>
    </div>
</div>
