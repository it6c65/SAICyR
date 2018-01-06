<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center uk-flex-middle">
        <form class="uk-form" action="">
            <div class="uk-form-row uk-text-center">
                <?= img("public/img/logon.svg", FALSE, array("alt" => "logo","width" => "400","height" => "500")); ?>
                <h2 class="uk-text-bold">Inicio de Sesión</h2>
            </div>
            <div class="uk-form-row uk-text-center">
                <div class="uk-form-icon">
                <div class="uk-icon-user"></div>
                <input type="text" placeholder="Usuario">
                </div>
            </div>  
            <div class="uk-form-row uk-text-center">
                <div class="uk-form-icon">
                    <i class="uk-icon-key"></i>
                    <input type="password" placeholder="Clave">
                </div>
            </div>
            <div class="uk-form-row uk-text-center">
                <button class="uk-button" type="submit"> <i class="uk-icon-sign-in"></i> Entrar </button>
            </div>
            <div class="uk-form-row uk-text-center">
                <div class="uk-button-group">
                    <a class="uk-button uk-button-danger" href="#restore" data-uk-modal> <i class="uk-icon-support"></i> Olvidé la contraseña </a>
                    <a class="uk-button uk-button-primary" href="#register" data-uk-modal> <i class="uk-icon-user-plus"></i> Registrarse</a>
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
<h2> Pregunta Secreta</h2>
        <div class="uk-modal-footer">
        </div>
    </div>
</div>

<div class="uk-modal" id="register">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div>
            <div class="uk-text-center">
                <h1> Registro de Usuario </h1>
            </div>
            <form class="uk-form uk-form-horizontal uk-text-center" action="">
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Nombre de Usuario: </label>
                    <div class="uk-form-controls">
                        <input type="text" placeholder="Nombre de usuario" class="uk-form-width-medium" data-uk-tooltip="{pos: 'right'}" title="Usado para loguearse en el sistema">
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Nombre Real: </label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-form-width-medium" placeholder="Nombre real" data-uk-tooltip="{pos: 'right'}" title="El nombre del usuario que se logueará">
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label uk-text-bold" for=""> Contraseña: </label>
                    <div class="uk-form-controls">
                        <input type="password" class="uk-form-width-medium" placeholder="Contraseña" data-uk-tooltip="{pos: 'right'}" title="Mínimo de 8 caráteres">
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label" for=""> Area designada: </label>
                    <div class="uk-form-controls">
                        <select id="" name="">
                            <option value="">Hola</option>
                            <option value="">Hola2</option>
                        </select>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label class="uk-form-label" for=""> Tipo: </label>
                    <div class="uk-form-controls">
                        <input type="radio" name="tipo" value="Encargado"> Encargado
                        &nbsp;
                        &nbsp;
                        <input type="radio" name="tipo" value="Oficina"> Oficina
                    </div>
                </div>
                <div class="uk-form-row uk-text-center">
                    <button class="uk-button"><i class="uk-icon-send"></i> Enviar </button>
                </div>
            </form>
        </div>
    </div>
</div>
