<!doctype html>
<html>
<head>
  <?php $homeDir = get_template_directory_uri(); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/grid.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/style.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/mobile-menu.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/header.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/footer.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/<?= $cssEspecifico; ?>.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A300i%2C300%2C400%2C700%2C900&#038;ver=4.9.10' type='text/css' media='all' />
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/media-query.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= $homeDir; ?>/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <title><?php geraTitulo(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div id="menu" class="container">
    <?php
      $arg = array(
        'theme_location' => 'header-menu'
      );
      wp_nav_menu($args);
    ?>
    <div class="busca"><?php dynamic_sidebar('busca'); ?></div>
  </div>

  <input id="navbar" type='checkbox'>
    <label for="navbar">
        <div class='menu-mobile'>
            <span class='hamburger'></span>
        </div>
    </label>
    <div class="mobile-menu-list">
    <?php
      $arg = array(
        'theme_location' => 'header-menu'
      );
      wp_nav_menu($args);
    ?>
    </div>

</header>