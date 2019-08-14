    </div>
</div>
<!-- <footer class="uk-position-bottom">
 <i class="uk-icon-creative-commons"></i> <a href="" class="uk-text-contrast">Acerca de</a> 
</footer> -->
<script src="<?= base_url("public/js/jquery3.min.js"); ?>"></script>
<script src="<?= base_url("public/js/uikit.js"); ?>"></script>
<script src="<?= base_url("public/js/knockout.js"); ?>"></script>
<script src="<?= base_url("public/js/list.min.js"); ?>"></script>
<script src="<?= base_url("public/js/search_registro.js"); ?>"></script>
<script src="<?= base_url("public/js/components/notify.min.js"); ?>"></script>
<script src="<?= base_url("public/js/components/form-password.min.js"); ?>"></script>
<script src="<?= base_url("public/js/components/tooltip.min.js"); ?>"></script>
<?php if( $this->session->flashdata('save_question')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('save_question'); ?>", "success");
</script>
<?php endif; ?>
<?php if( $this->session->flashdata('init')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('init'); ?>");
</script>
<?php endif; ?>
</body>
</html>
