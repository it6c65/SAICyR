    </div>
</div>
<footer class="uk-position-bottom">
 <i class="uk-icon-creative-commons"></i> <a href="" class="uk-text-contrast">Acerca de</a> 
</footer>
<script src="<?= base_url("public/js/jquery3.min.js"); ?>"></script>
<script src="<?= base_url("public/js/uikit.js"); ?>"></script>
<script src="<?= base_url("public/js/components/notify.min.js"); ?>"></script>
<script src="<?= base_url("public/js/components/tooltip.min.js"); ?>"></script>
<?php if( $this->session->flashdata('newuser')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('newuser'); ?>", "success");
</script>
<?php endif; ?>
<?php if( $this->session->flashdata('exit')): ?>
<script>
    UIkit.notify( "<?= $this->session->flashdata('newuser'); ?>", "success");
</script>
<?php endif; ?>
</body>
</html>
