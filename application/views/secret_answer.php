<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center uk-flex-middle">
        <?= form_open('login/pregunta_secreta', array("class" => "uk-form uk-text-center") ) ?>
            <div class="uk-form-row">
                <h2> Escribe la respuesta secreta</h2>
                <hr>
                <?= validation_errors('<div class="uk-alert uk-alert-danger" data-uk-alert> 
                <a class="uk-alert-close uk-close"></a>', "</div>"); ?>
            </div>
            <div class="uk-form-row">
            <h3 class="uk-text-bold">¿ <?= $pregunta ?> ?</h3>
            </div>
            <div class="uk-form-row">
                <div class="uk-form-password">
                    <input type="text" id="answer" name="answer_secret" class="uk-form-width-large" placeholder="Respuesta Secreta" >
                </div>
            </div>
            <div class="uk-form-row">
            <button class="uk-button uk-button-success"> <i class="uk-icon-check"></i> Comprobar</button>
            </div>
        </form>
    </div>
</div>
