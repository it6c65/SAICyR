<div class="uk-container uk-margin-top uk-margin-large-left">
    <div id="main">
<br>
       <div class="uk-text-center">
       <h1> Usuario Actual: <?= $user ?> </h1>
        </div>
        <?= form_open("/usuario_actual", array("class" => "uk-form uk-form-stacked uk-text-center")) ?>
        <form class="uk-form uk-form-stacked uk-text-center" action="">
            <fieldset>
                <legend>Cambiar pregunta secreta</legend>
            </fieldset>
                    <?= validation_errors('<div class="uk-alert uk-alert-danger" data-uk-alert> 
                    <a class="uk-alert-close uk-close"></a>', "</div>"); ?>
            <div class="uk-form-row">
                <label class="uk-form-label uk-text-bold" for=""> Pregunta Secreta: </label>
                <div class="uk-form-controls">
                ¿<input type="text" id="question" name="question_secret" class="uk-form-width-large" placeholder="Pregunta Secreta" data-uk-tooltip="{pos: 'right'}" title="Escribe la pregunta secreta. Máximo 140 carácteres" value="<?= set_value('question_secret'); ?>">?
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label uk-text-bold" for=""> Respuesta Secreta: </label>
                <div class="uk-form-controls">
                    <div class="uk-form-password">
                        <input type="password" id="answer" name="answer_secret" class="uk-form-width-large" placeholder="Respuesta Secreta" data-uk-tooltip="{pos: 'right'}" title="Dale clic a mostrar para visualizar la respuesta antes de enviar.  Máximo 140 carácteres">
                        <a class="uk-form-password-toggle" href="" data-uk-form-password="{lblShow:'Mostrar',lblHide:'Ocultar'}">Mostrar</a>
                    </div>
                </div>
            </div>
        <div class="uk-form-row"><button class="uk-button uk-button-primary" style="background-color: rgb(40,70,110)" type="submit"> <i class="uk-icon-save"></i> Guardar</button></div>
    </form>
</div>
</div>
