<?php 
    $cssEspecifico = 'page';
    require_once('header.php');
?>

<?php 
if( have_posts() ) {
    while( have_posts() ) {
        the_post();
?>

    <?php
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    ?>
    <div class="single-page-thumbnail" style="background:url(<?php echo esc_url($featured_img_url) ?>) no-repeat #222;">
        <h2><?php the_title(); ?></h2>
    </div>
    <main class="pagina-main">
        <section class="pagina">
            <div class="pagina-conteudo">
                <?php the_content(); ?>
            </div>
        </section>
    </main>
    <?php
        }
    }
    ?>

<?php get_footer(); ?>