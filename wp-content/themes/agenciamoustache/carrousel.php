<div class="owl-carousel owl-theme">
       
  <?php $carousel = new WP_Query("cat=0&showposts=9"); 
    if( !$carousel )
    return 'Não há posts recentes';
    while($carousel->have_posts()) : $carousel->the_post();
      $content = get_the_content();
      $resumo = substr($content, 0, 80)."…"; ?>
    <div class="item">
      <div class="item-post-thumbnail">
        <?php the_category() ?>
        <?php the_post_thumbnail(); ?>
        <?php  ?>
      </div>
      <div class="item-content">
        <h3 class="subtitle-page"><?php the_title(); ?></h3>
        <p><?= $resumo; ?></p>
        <a href="<?php the_permalink(); ?>">Saiba Mais</a>
      </div>
    </div>
    <?php endwhile; ?>
    
</div>