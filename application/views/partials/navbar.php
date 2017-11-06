<div class="uk-container uk-container-center">
    <div class="uk-position-cover uk-flex uk-flex-column">
<!-- Barra de Navegación -->
<nav class="uk-navbar uk-navbar-attached">
    <!-- Boton para Pantalla Pequeña -->
    <a href="#mobile" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <!-- Boton para Pantalla Mediana -->
    <a href="#mobile" class="uk-navbar-toggle uk-visible-medium" data-uk-offcanvas></a>
    <!-- Logo centrado para pantalla pequeña -->
    <div class="uk-navbar-content uk-visible-small">
        <?= img("public/img/logon.svg", FALSE, array("class" => "uk-margin-large-left")); ?>
    </div>
    <!-- Logo centrado para pantalla mediana con botones centrados -->
    <div class="uk-navbar-center uk-navbar-content uk-visible-medium">
        <?= img("public/img/logon.svg", FALSE, array("alt" => "logo", "width" => "100", "height" => "60")); ?>
       <ul class="uk-navbar-nav">
             <li class="uk-hidden-small"><a href="#"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp; Usuario</a></li>
        </ul>
        &nbsp;
        &nbsp;
        <button class="uk-button uk-button-danger uk-hidden-small"> <i class="uk-icon-power-off"></i> Cerrar sesión</button>
    </div>
    <!-- Barra de Navegación pantalla Grande -->
    <ul class="uk-navbar-nav uk-hidden-small uk-hidden-medium">
    <?= img("public/img/logon.svg", FALSE, array("class" => "uk-navbar-brand")); ?>
        <?php if($title == "Inventario"): ?>
            <li class="uk-active"> <a href="<?= base_url("inventario") ?>"> <i class="uk-icon-small uk-icon-home"></i> Inicio</a></li>
        <?php else: ?>
            <li> <a href="<?= base_url("inventario") ?>"> <i class="uk-icon-small uk-icon-home"></i> Inicio</a></li>
        <?php endif; ?>
        <?php if($title == "Obras"): ?>
            <li class="uk-active"><a href="<?= base_url("obras") ?>"> <i class="uk-icon-diamond"></i> Obras </a></li>
        <?php else: ?>
            <li><a href="<?= base_url("obras") ?>"> <i class="uk-icon-diamond"></i> Obras </a></li>
        <?php endif; ?>
        <?php if($title == "Laboratorio"): ?>
            <li class="uk-active"><a href="<?= base_url("laboratorio") ?>"> <i class="uk-icon-small uk-icon-flask"></i> Laboratorio de CyR</a></li>
        <?php else: ?>
            <li><a href="<?= base_url("laboratorio") ?>"> <i class="uk-icon-small uk-icon-flask"></i> Laboratorio de CyR</a></li>
        <?php endif; ?>
        <?php if($title == "Taller"): ?>
            <li class="uk-active"><a href="<?= base_url("taller") ?>"> <i class="uk-icon-small uk-icon-puzzle-piece"> </i> Taller de CyR</a></li>
        <?php else: ?>
            <li><a href="<?= base_url("taller") ?>"> <i class="uk-icon-small uk-icon-puzzle-piece"> </i> Taller de CyR</a></li>
        <?php endif; ?>

    <!-- Dropdown para la Barra Nav. Grande -->
            <?php if($title == "Dirección"): ?>
            <li class="uk-active uk-parent" data-uk-dropdown>
            <?php elseif($title == "Salón Principal"): ?>
            <li class="uk-active uk-parent" data-uk-dropdown>
            <?php elseif($title == "Sala de Arte"): ?>
            <li class="uk-active uk-parent" data-uk-dropdown>
            <?php elseif($title == "Taller de Escultura"): ?>
            <li class="uk-active uk-parent" data-uk-dropdown>
            <?php elseif($title == "Depósito"): ?>
            <li class="uk-active uk-parent" data-uk-dropdown>
            <?php else: ?>
            <li class="uk-parent" data-uk-dropdown>
            <?php endif; ?>

                <a href="#"> <i class="uk-icon-university"></i> Institución <i class="uk-icon-caret-down"></i> </a>
            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">
                <ul class="uk-nav uk-nav-navbar">
                    <li><a href="<?= base_url("direccion") ?>"> <i class="uk-icon-fax"></i> Oficina de Dirección</a></li>
                    <li><a href="<?= base_url("salon") ?>"> <i class="uk-icon-cubes"></i> Salón Principal</a></li>
                    <li><a href="<?= base_url("arte") ?>"> <i class="uk-icon-film"></i> Sala de Arte</a></li>
                    <li><a href="<?= base_url("escultura") ?>"> <i class="uk-icon-child"></i> Taller de Escultura</a></li>
                    <li><a href="<?= base_url("deposito") ?>"> <i class="uk-icon-building"></i> Depósito</a></li>
                </ul>
            </div>
        </li>
        <li><a href="<?= base_url("adus") ?>"> <i class="uk-icon-users"></i> Administrar usuarios</a></li>
    </ul>

    <!-- Lado derecho del Barra Nav. Grande -->
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
</nav>

<!-- Barra de Navegacion Responsive -->
<div id="mobile" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
        <?php if($title == "Inventario"): ?>
            <li class="uk-active"> <a href="<?= base_url("inventario") ?>"> <i class="uk-icon-small uk-icon-home"></i> Inicio</a></li>
        <?php else: ?>
            <li> <a href="<?= base_url("inventario") ?>"> <i class="uk-icon-small uk-icon-home"></i> Inicio</a></li>
        <?php endif; ?>
        <?php if($title == "Obras"): ?>
            <li class="uk-active"><a href="<?= base_url("obras") ?>"> <i class="uk-icon-diamond"></i> Obras </a></li>
        <?php else: ?>
            <li><a href="<?= base_url("obras") ?>"> <i class="uk-icon-diamond"></i> Obras </a></li>
        <?php endif; ?>
        <?php if($title == "Laboratorio"): ?>
            <li class="uk-active"><a href="<?= base_url("laboratorio") ?>"> <i class="uk-icon-small uk-icon-flask"></i> Laboratorio de CyR</a></li>
        <?php else: ?>
            <li><a href="<?= base_url("laboratorio") ?>"> <i class="uk-icon-small uk-icon-flask"></i> Laboratorio de CyR</a></li>
        <?php endif; ?>
        <?php if($title == "Taller"): ?>
            <li class="uk-active"><a href="<?= base_url("taller") ?>"> <i class="uk-icon-small uk-icon-puzzle-piece"> </i> Taller de CyR</a></li>
        <?php else: ?>
            <li><a href="<?= base_url("taller") ?>"> <i class="uk-icon-small uk-icon-puzzle-piece"> </i> Taller de CyR</a></li>
        <?php endif; ?>
        <?php if($title == "Dirección"): ?>
            <li class="uk-active uk-parent">
        <?php elseif($title == "Salón Principal"): ?>
            <li class="uk-active uk-parent">
        <?php elseif($title == "Sala de Arte"): ?>
            <li class="uk-active uk-parent">
        <?php elseif($title == "Taller de Escultura"): ?>
            <li class="uk-active uk-parent">
        <?php elseif($title == "Depósito"): ?>
            <li class="uk-active uk-parent">
        <?php else: ?>
            <li class="uk-parent">
        <?php endif; ?>
                <a href="#"> <i class="uk-icon-university"></i> Institución</a>
                    <ul class="uk-nav-sub">
                        <li><a href="<?= base_url("direccion") ?>"> <i class="uk-icon-fax"></i> Oficina de Dirección</a></li>
                        <li><a href="<?= base_url("salon") ?>"> <i class="uk-icon-cubes"></i> Salón Principal</a></li>
                        <li><a href="<?= base_url("arte") ?>"> <i class="uk-icon-film"></i> Sala de Arte</a></li>
                        <li><a href="<?= base_url("escultura") ?>"> <i class="uk-icon-child"></i> Taller de Escultura</a></li>
                        <li><a href="<?= base_url("deposito") ?>"> <i class="uk-icon-building"></i> Depósito</a></li>
                    </ul>
            </li>
            <li><a href=""> <i class="uk-icon-users"></i> Administrar usuarios</a></li>
        </ul>
    </div>
</div>

