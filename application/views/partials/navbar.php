<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column">
<nav class="uk-navbar uk-navbar-attached">
    <a href="#mobile" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <a href="#mobile" class="uk-navbar-toggle uk-visible-medium" data-uk-offcanvas></a>
    <div class="uk-navbar-content uk-visible-small">
        <?= img("public/img/logon.svg", FALSE, array("class" => "uk-margin-large-left")); ?>
    </div>
    <div class="uk-navbar-center uk-navbar-content uk-visible-medium">
        <?= img("public/img/logon.svg", FALSE, array("alt" => "logo", "width" => "100", "height" => "60")); ?>
       <ul class="uk-navbar-nav">
             <li class="uk-hidden-small"><a href="#"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp; Usuario</a></li>
        </ul>
        &nbsp;
        &nbsp;
        <button class="uk-button uk-button-danger uk-hidden-small"> <i class="uk-icon-power-off"></i> Cerrar sesión</button>
    </div>
    <ul class="uk-navbar-nav uk-hidden-small uk-hidden-medium">
    <?= img("public/img/logon.svg", FALSE, array("class" => "uk-navbar-brand")); ?>
        <li class="uk-active"> <a href=""> <i class="uk-icon-small uk-icon-home"></i> Inicio</a></li>
        <li><a href=""> <i class="uk-icon-diamond"></i> Obras </a></li>
        <li><a href=""> <i class="uk-icon-small uk-icon-flask"></i> Laboratorio de CyR</a></li>
        <li><a href=""> <i class="uk-icon-small uk-icon-puzzle-piece"> </i> Taller de CyR</a></li>
        <li class="uk-parent" data-uk-dropdown>
            <a href="#"> <i class="uk-icon-university"></i> Institución <i class="uk-icon-caret-down"></i> </a>

            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">
                <ul class="uk-nav uk-nav-navbar">
                    <li><a href=""> <i class="uk-icon-fax"></i> Oficina de Dirección</a></li>
                    <li><a href=""> <i class="uk-icon-cubes"></i> Salón Principal</a></li>
                    <li><a href=""> <i class="uk-icon-film"></i> Sala de Arte</a></li>
                    <li><a href=""> <i class="uk-icon-child"></i> Taller de Escultura</a></li>
                    <li><a href=""> <i class="uk-icon-building"></i> Depósito</a></li>
                </ul>
            </div>
        </li>
        <li><a href=""> <i class="uk-icon-users"></i> Administrar usuarios</a></li>
    </ul>

        <div class="uk-navbar-flip uk-navbar-content uk-hidden-medium">
            <ul class="uk-navbar-nav">
                <li class="uk-hidden-small"><a href="#"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp; Usuario</a></li>
                <li class="uk-parent uk-visible-small" data-uk-dropdown="{mode:'click'}">
                    <a href="#"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp; Usuario</a>
                    <div class="uk-dropdown uk-dropdown-navbar">
                        <ul class="uk-nav uk-nav-navbar">
                            <li><a href=""> <i class="uk-icon-cog"></i> Configurar Usuario </a></li>
                            <li><a href=""> <i class="uk-icon-power-off"></i> Cerrar Sesión </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <button class="uk-button uk-button-danger uk-hidden-small"> <i class="uk-icon-power-off"></i> Cerrar sesión</button>
        </div>
    </div>
</nav>

<div id="mobile" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
            <li class="uk-active"> <a href=""> <i class="uk-icon-small uk-icon-home"></i> Inicio</a></li>
            <li><a href=""> <i class="uk-icon-diamond"></i> Obras </a></li>
            <li><a href=""> <i class="uk-icon-small uk-icon-flask"></i> Laboratorio de CyR</a></li>
            <li><a href=""> <i class="uk-icon-small uk-icon-puzzle-piece"> </i> Taller de CyR</a></li>
            <li class="uk-parent">
                <a href="#"> <i class="uk-icon-university"></i> Institución</a>
                    <ul class="uk-nav-sub">
                        <li><a href=""> <i class="uk-icon-fax"></i> Oficina de Dirección</a></li>
                        <li><a href=""> <i class="uk-icon-cubes"></i> Salón Principal</a></li>
                        <li><a href=""> <i class="uk-icon-film"></i> Sala de Arte</a></li>
                        <li><a href=""> <i class="uk-icon-child"></i> Taller de Escultura</a></li>
                        <li><a href=""> <i class="uk-icon-building"></i> Depósito</a></li>
                    </ul>
            </li>
            <li><a href=""> <i class="uk-icon-users"></i> Administrar usuarios</a></li>
        </ul>
    </div>
</div>



    </div>
</div>
