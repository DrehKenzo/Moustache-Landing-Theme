<footer>
<div class="colum-12 copyright">
        <div class="colum-6 mb-100">
          <span class="text-copy"><?php dynamic_sidebar('copyright'); ?></span>
        </div>

        <div class="colum-6 mb-100">
          <?php dynamic_sidebar('links-rodape'); ?>
        </div>
    </div>
</footer>
<?php $homeDir = get_template_directory_uri(); ?>
<script src="<?= $homeDir; ?>/assets/js/jquery.min.js"></script>
<script src="<?= $homeDir; ?>/assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="<?= $homeDir; ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= $homeDir; ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>