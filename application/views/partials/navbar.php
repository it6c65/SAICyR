<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column">
<nav class="uk-navbar uk-navbar-attached">
    <ul class="uk-navbar-nav">
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

    <div class="uk-navbar-flip uk-navbar-content">
        <ul class="uk-navbar-nav">
            <li><a href="#"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp; Usuario</a></li>
        </ul>
        <button class="uk-button uk-button-danger"> <i class="uk-icon-power-off"></i> Cerrar sesión</button>
    </div>
</nav>
