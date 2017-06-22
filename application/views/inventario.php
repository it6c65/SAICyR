<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Primera vista </title>
    <?= link_tag('public/css/uikit.almost-flat.css'); ?>
    <?= link_tag('public/css/base.css'); ?>
    <?= link_tag('public/img/icono.svg', 'shortcut icon'); ?>
</head>
<body>
    <nav class="uk-navbar">
        <ul class="uk-navbar-nav">
        <?= img("public/img/logon.svg", FALSE, array("class" => "uk-navbar-brand")); ?>
            <li><a href=""> <i class="uk-icon-small uk-icon-home"></i> Inicio</a></li>
            <li><a href=""> <i class="uk-icon-diamond"></i> Bienes</a></li>
            <li><a href=""> <i class="uk-icon-users"></i> Administrar usuarios</a></li>
        </ul>
    </nav>
<div class="uk-container uk-container-center">
<p>Hola</p>
</div>

<js src="<?= base_url("public/js/uikit.js"); ?>"></js>
</body>
</html>
