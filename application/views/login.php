<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center uk-flex-middle">
        <?= form_open('login', array("class" => "uk-form") ) ?>
            <div class="uk-form-row uk-text-center">
                <?= img("public/img/logon.png", FALSE, array("alt" => "logo","width" => "400","height" => "500")); ?>
                <?= validation_errors('<div class="uk-alert uk-alert-danger" data-uk-alert> 
                <a class="uk-alert-close uk-close"></a>', "</div>"); ?>
                <h2 class="uk-text-bold">Inicio de Sesión</h2>
            </div>
            <div class="uk-form-row uk-text-center">
                <div class="uk-form-icon">
                <div class="uk-icon-user"></div>
                <input type="text" placeholder="Usuario" name="usuario">
                </div>
            </div>  
            <div class="uk-form-row uk-text-center">
                <div class="uk-form-icon">
                    <i class="uk-icon-key"></i>
                    <input type="password" placeholder="Clave" name="clave">
                </div>
            </div>
            <div class="uk-form-row uk-text-center">
                <button class="uk-button" type="submit"> <i class="uk-icon-sign-in"></i> Entrar </button>
            </div>
            <div class="uk-form-row uk-text-center">
                <div class="uk-button-group">
                    <a class="uk-button uk-button-danger" href="#" onclick="olvide_clave()"> <i class="uk-icon-support"></i> Olvidé la contraseña </a>
                    <a class="uk-button uk-button-primary" href="<?= base_url("login/registro") ?>"> <i class="uk-icon-user-plus"></i> Registrarse</a>
                </div>    
            </div> 
        </form>
    </div>
</div>

<div class="uk-modal" id="restore">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="uk-modal-header uk-text-center">
                <h1> Recuperación de cuenta</h1>
        </div>
        <div class="uk-modal-caption">
        <form class="uk-form" action="">
            <div class="uk-form-row"><input type="text"></div>
        </form>
        </div>
    </div>
</div>
