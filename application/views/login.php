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
               <!-- <input type="text" placeholder="Usuario" class="uk-form-large uk-form-width-large"> -->
                <input type="text" placeholder="Usuario">
                </div>
            </div>  
            <div class="uk-form-row uk-text-center">
                <div class="uk-form-icon">
                    <i class="uk-icon-key"></i>
                    <!-- <input type="password" placeholder="Clave" class="uk-form-large uk-form-width-large"> -->
                    <input type="password" placeholder="Clave">
                </div>
            </div>
            <div class="uk-form-row uk-text-center">
                <button class="uk-button" type="submit"> <i class="uk-icon-sign-in"></i> Entrar </button>
            </div>
            <div class="uk-form-row uk-text-center">
                <div class="uk-button-group">
                    <button class="uk-button uk-button-danger"> <i class="uk-icon-support"></i> Olvidé la contraseña </button>
                    <button class="uk-button uk-button-primary"> <i class="uk-icon-user-plus"></i> Registrarse</button>
                </div>    
            </div> 
        </form>
    </div>
</div>
