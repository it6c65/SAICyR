<div class="uk-container uk-margin-top uk-margin-large-left">
    <div id="main">
<br>
       <div class="uk-text-center">
       <h1> Usuario Actual: <?= $user ?> </h1>
        </div>
        <div class="uk-container uk-text-left">
        <h2> Nombre Real del usuario: <?= $realname ?> </h2>
        <?php if($area == 0): ?>
            <h2>Area asignada: <em>Todas</em> </h2>
        <?php elseif($area == 1): ?>
            <h2>Area asignada: <em>Taller</em> </h2>
        <?php elseif($area == 2): ?>
            <h2>Area asignada: <em>Laboratorio</em> </h2>
        <?php elseif($area == 3): ?>
            <h2>Area asignada: <em>Oficina</em> </h2>
        <?php elseif($area == 4): ?>
            <h2>Area asignada: <em>Salón Principal</em> </h2>
        <?php elseif($area == 5): ?>
            <h2>Area asignada: <em>Sala de Arte</em> </h2>
        <?php elseif($area == 6): ?>
            <h2>Area asignada: <em>Taller de Escultura</em> </h2>
        <?php elseif($area == 7): ?>
            <h2>Area asignada: <em>Depósito</em> </h2>
        <?php endif; ?>
    <h2>Clave: <?= anchor("/login/cambiar_clave", " <i class='uk-icon-retweet'></i> Cambiar Contraseña", array("class" => 'uk-button uk-button-success')); ?> </h2> 
            <h2> Pregunta Secreta: <?= $question ?></h2><?= anchor("/usuario_actual/change_question", " <i class='uk-icon-comment'></i> Cambiar Pregunta Secreta", array("class" => 'uk-button uk-button-primary')); ?>         </div>
       <br> 
</div>
</div>
