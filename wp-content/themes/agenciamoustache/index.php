<?php 
    get_header();
?>

<div id="banner-principal">
    <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]'); ?>
</div>

<main class="pagina-main">
    <section class="pagina">

      <h2 class="subtitle-page">
        <span>Últimas Notícias</span>
      </h2>

      <?php require_once('carrousel.php'); ?>

      <h2 class="subtitle-page">
        <span>Formulário de Contato</span>
      </h2>

      <?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato"]');?>

      <div class="lista-de-informacoes row">
        <div class="colum-4 mb-100">
          <?php dynamic_sidebar('informacao-01'); ?>
        </div>
        <div class="colum-4 mb-100">
          <?php dynamic_sidebar('informacao-02'); ?>
        </div>
        <div class="colum-4 mb-100">
          <?php dynamic_sidebar('informacao-03'); ?>
        </div>
      </div>

    </section>
</main>

<?php get_footer(); ?>
