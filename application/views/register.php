<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center uk-flex-middle">
            <?= form_open('login/registro', array("class" => "uk-form uk-form-horizontal uk-text-center", "onsubmit" => "return validar_usuario()") ) ?>
                <div class="uk-form-row uk-text-center">
                    <?= img("public/img/logon.png", FALSE, array("alt" => "logo","width" => "200","height" => "200")); ?>
        <hr>
                    <h2 class="uk-text-bold">Registro de Usuario</h2>
                    <?= validation_errors('<div class="uk-alert uk-alert-danger" data-uk-alert> 
                    <a class="uk-alert-close uk-close"></a>', "</div>"); ?>
                    </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Nombre de Usuario: </label>
                    <div class="uk-form-controls">
                    <input type="text" id="username" name="username" placeholder="Nombre de usuario" class="uk-form-width-medium" data-uk-tooltip="{pos: 'right'}" title="Usado para loguearse en el sistema" value="<?= set_value('username'); ?>">
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Nombre Real: </label>
                    <div class="uk-form-controls">
                    <input type="text" id="realname" name="realname" class="uk-form-width-medium" placeholder="Nombre real" data-uk-tooltip="{pos: 'right'}" title="El nombre del usuario que se logueará" value="<?= set_value('realname'); ?>">
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Contraseña: </label>
                    <div class="uk-form-controls">
                        <div class="uk-form-password">
                            <input type="password" id="password" name="password" class="uk-form-width-medium" placeholder="Contraseña" data-uk-tooltip="{pos: 'right'}" title="Mínimo de 8 caráteres">
                            <a class="uk-form-password-toggle" href="" data-uk-form-password="{lblShow:'Mostrar',lblHide:'Ocultar'}">Mostrar</a>
                        </div>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Area designada: </label>
                    <div class="uk-form-controls">
                        <select id="area" name="area" data-uk-tooltip="{pos: 'right'}" title="Selecciona un area">
                            <option value="0">Selecciona una area...</option>
                            <option value="1">Taller</option>
                            <option value="2">Laboratorio</option>
                            <option value="3">Oficina</option>
                            <option value="4">Salón Principal</option>
                            <option value="5">Sala de Arte</option>
                            <option value="6">Taller de Escultura</option>
                            <option value="7">Depósito</option>
                        </select>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Tipo: </label>
                    <div class="uk-form-controls">
                        <input type="radio" name="tipo" value="Encargado"> Encargado
                    </div>
                </div>
                <div class="uk-form-row uk-text-center">
                <a class="uk-button" href="<?= base_url("login") ?>"> <i class="uk-icon-arrow-left"></i> Atrás</a>
                <a class="uk-button" href="#question_secret" data-uk-modal><i class="uk-icon-send"></i> Enviar </a>
                    <div id="question_secret" class="uk-modal">
                        <div class="uk-modal-dialog">
                            <a class="uk-modal-close uk-close" href=""></a>
                            <div class="uk-modal-header uk-modal-warning">
                            <h1>Aviso de Seguridad</h1>
                            <p> Para mantener su cuenta segura, necesitamos que configuré una pregunta de seguridad en caso de extravío de contraseña u olvido</p>
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
                            <div class="uk-form-row">
                                <button class="uk-button" type="submit"><i class="uk-icon-send"></i> Enviar </button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>

