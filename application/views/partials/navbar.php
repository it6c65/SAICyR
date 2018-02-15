<?php
$active='class="uk-active"';
$dropdown = array( 
    array("url" => base_url("direccion"), "name" => '<i class="uk-icon-fax"></i> Oficina de Dirección'),
    array("url" => base_url("salon"), "name" => '<i class="uk-icon-cubes"></i> Salón Principal'),
    array("url" => base_url("arte"), "name" => '<i class="uk-icon-film"></i> Sala de Arte'),
    array("url" => base_url("escultura"), "name" => '<i class="uk-icon-child"></i> Taller de Escultura'),
    array("url" => base_url("deposito"), "name" => '<i class="uk-icon-building"></i> Depósito')
);
$mains = array(
    array("url" => base_url("inicio"), "name" => '<i class="uk-icon-small uk-icon-home"></i> Inicio', "lugar" => "Inicio"),
    /* array("url" => base_url("obras"), "name" => '<i class="uk-icon-diamond"></i> Obras ', "lugar" => "Obras"), */
    array("url" => base_url("laboratorio"), "name" => '<i class="uk-icon-small uk-icon-flask"></i> Laboratorio de CyR', "lugar" => "Laboratorio"),
    array("url" => base_url("taller"), "name" => '<i class="uk-icon-small uk-icon-puzzle-piece"> </i> Taller de CyR', "lugar" => "Taller")
);
?>
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
        <?= img("public/img/logon.png", FALSE, array("class" => "uk-margin-large-left")); ?>
    </div>
    <!-- Logo centrado para pantalla mediana con botones centrados -->
    <div class="uk-navbar-center uk-navbar-content uk-visible-medium">
        <?= img("public/img/logon.png", FALSE, array("alt" => "logo", "width" => "100", "height" => "60")); ?>
       <ul class="uk-navbar-nav">
           <li class="uk-hidden-small"><a href="#"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp;  <?= $user ?> </a></li>
        </ul>
        &nbsp;
        &nbsp;
        <button class="uk-button uk-button-danger uk-hidden-small"> <i class="uk-icon-power-off"></i> Cerrar sesión</button>
    </div>
    <!-- Barra de Navegación pantalla Grande -->
    <ul class="uk-navbar-nav uk-hidden-small uk-hidden-medium">
    <?= img("public/img/logon.png", FALSE, array("class" => "uk-navbar-brand")); ?>
        <?php foreach($mains as $principales): ?>
            <?php if($principales["lugar"] == $title ): ?>
                <li <?= $active ?>> <a href="<?= $principales["url"] ?>"> <?= $principales["name"] ?></a></li>
            <?php else: ?>
                <li> <a href="<?= $principales["url"] ?>"> <?= $principales["name"] ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>

    <!-- Dropdown para la Barra Nav. Grande -->
            <?php if($title == "Dirección" || $title == "Salón Principal" || $title == "Sala de Arte" || $title == "Taller de Escultura" || $title == "Depósito"): ?>
            <li class="uk-active uk-parent" data-uk-dropdown>
            <?php else: ?>
            <li class="uk-parent" data-uk-dropdown>
            <?php endif; ?>

                <a href="#"> <i class="uk-icon-university"></i> Institución <i class="uk-icon-caret-down"></i> </a>
            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">
                <ul class="uk-nav uk-nav-navbar">
                    <?php foreach($dropdown as $instituto): ?>
                    <li><a href="<?= $instituto["url"] ?>"> <?= $instituto["name"] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </li>
        <?php if($admin == "Director"): ?>
        <li><a href="<?= base_url("admuser") ?>"> <i class="uk-icon-users"></i> Administrar usuarios</a></li>
        <?php endif; ?>
    </ul>

    <!-- Lado derecho del Barra Nav. Grande -->
        <div class="uk-navbar-flip uk-navbar-content uk-hidden-medium">
            <ul class="uk-navbar-nav">
            <li class="uk-hidden-small"><a href="<?= base_url("/usuario_actual") ?>"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp; <?= $user ?> </a></li>
                <li class="uk-parent uk-visible-small" data-uk-dropdown="{mode:'click'}">
                <a href="#"> <i class="uk-icon-medium uk-icon-user"></i> &nbsp; <?= $user?> </a>
                    <div class="uk-dropdown uk-dropdown-navbar">
                        <ul class="uk-nav uk-nav-navbar">
                        <li><a href="<?= base_url("/usuario_actual") ?>"> <i class="uk-icon-cog"></i> Configurar Usuario </a></li>
                            <li><a href="<?= base_url("/login/salir") ?>"> <i class="uk-icon-power-off"></i> Cerrar Sesión </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <a href="<?= base_url("/login/salir") ?>" class="uk-button uk-button-danger uk-hidden-small"> <i class="uk-icon-power-off"></i> Cerrar sesión</a>
        </div>
</nav>

<!-- Barra de Navegacion Responsive -->
<div id="mobile" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
        <?php foreach($mains as $principales): ?>
            <?php if($principales["lugar"] == $title ): ?>
                <li <?= $active ?>> <a href="<?= $principales["url"] ?>"> <?= $principales["name"] ?></a></li>
            <?php else: ?>
                <li> <a href="<?= $principales["url"] ?>"> <?= $principales["name"] ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if($title == "Dirección" || $title == "Salón Principal" || $title == "Sala de Arte" || $title == "Taller de Escultura" || $title == "Depósito" ): ?>
            <li class="uk-active uk-parent">
        <?php else: ?>
            <li class="uk-parent">
        <?php endif; ?>
                <a href="#"> <i class="uk-icon-university"></i> Institución</a>
                    <ul class="uk-nav-sub">
                        <?php foreach($dropdown as $instituto): ?>
                        <li><a href="<?= $instituto["url"] ?>"> <?= $instituto["name"] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
            </li>
        <?php if($admin == "Director"): ?>
            <li><a href="<?= base_url('admuser') ?>"> <i class="uk-icon-users"></i> Administrar usuarios</a></li>
        <?php endif; ?>
        </ul>
    </div>
</div>

