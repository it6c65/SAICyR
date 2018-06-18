    </div>
</div>
<footer class="uk-position-bottom">
 <i class="uk-icon-creative-commons"></i> <a href="" class="uk-text-contrast">Acerca de</a> 
</footer>
<script src="<?= base_url("public/js/jquery3.min.js"); ?>"></script>
<script src="<?= base_url("public/js/uikit.js"); ?>"></script>
<script src="<?= base_url("public/js/components/notify.min.js"); ?>"></script>
<script src="<?= base_url("public/js/components/tooltip.min.js"); ?>"></script>
<script src="<?= base_url("public/js/forget_password.js"); ?>"></script>
<?php if( $this->session->flashdata('newuser')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('newuser'); ?>", "success");
</script>
<?php endif; ?>
<?php if( $this->session->flashdata('answer_error')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('answer_error'); ?>", "danger");
</script>
<?php endif; ?>
<?php if( $this->session->flashdata('exit')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('exit'); ?>", "success");
    <?php $this->session->sess_destroy(); ?>
</script>
<?php endif; ?>
<?php if( $this->session->flashdata('change_pass')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('change_pass'); ?>", "success");
</script>
<?php endif; ?>
<?php if( $this->session->flashdata('error_session')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('error_session'); ?>", "danger");
</script>
<?php endif; ?>
</body>
</html>
