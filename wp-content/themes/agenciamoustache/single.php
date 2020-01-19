<?php 
    $cssEspecifico = 'single';
    require_once('header.php');
?>

<article>
<?php 
  if(have_posts()){
    while(have_posts()){
      the_post();
?>
    <?php
      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    ?>
    <div class="single-post-thumbnail" style="background:url(<?php echo esc_url($featured_img_url) ?>) no-repeat;">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="container">
      <section class="single-post-geral">
      <span><?php the_date(); ?></span><span><?php the_category() ?></span>
        <div class="single-post-descrição">
          <div><?php the_content(); ?></div>
        </div>
      </section>
    </div>
<?php
    }
  }
?>
</article>

<?php get_footer(); ?>