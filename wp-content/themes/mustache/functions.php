<?php 

//registrar imagem em destaque
add_theme_support('post-thumbnails');

//registrar menus
function registrarMenu(){
  register_nav_menu('header-menu', 'main-menu');
}
add_action('init', 'registrarMenu');

//Gerar titulo das páginas
function geraTitulo(){
  bloginfo('name');
  if(!is_home()) echo " | "; 
  the_title();
}

//Registrando Widget
function add_widget_Support() {
  register_sidebar( array(
    'name'          => 'Links Rodapé',
    'id'            => 'links-rodape',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>', 
));
}

add_action( 'widgets_init', 'add_Widget_Support' );

//Registrando Widgets Extras
if ( function_exists('register_sidebar') ) {
  $sidebar1 = array(
    'name'          => 'Infomação 01',
    'id'            => 'informacao-01',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ); 
  $sidebar2 = array(
    'name'          => 'Infomação 02',
    'id'            => 'informacao-02',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ); 
  $sidebar3 = array(
    'name'          => 'Infomação 03',
    'id'            => 'informacao-03',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  );  
  $sidebar4 = array(
    'name'          => 'Copyright',
    'id'            => 'copyright',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ); 
  $sidebar5 = array(
    'name'          => 'Busca',
    'id'            => 'busca',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  );
  
  register_sidebar($sidebar1);
  register_sidebar($sidebar2);
  register_sidebar($sidebar3);
  register_sidebar($sidebar4);
  register_sidebar($sidebar5);
}

//remover itens da barra de menu
function remove_admin_bar_options() {
  global $wp_admin_bar;

  $wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('updates');
  $wp_admin_bar->remove_menu('new-content');
  $wp_admin_bar->remove_menu('wpseo-menu');
}

add_action('wp_before_admin_bar_render', 'remove_admin_bar_options', 0);

// remover menu
add_action('admin_head', 'submenus');

function submenus() {
  echo '
  <style>
    #toplevel_page_asp_settings{
      display:none; 
    }
    
  </style>';
}