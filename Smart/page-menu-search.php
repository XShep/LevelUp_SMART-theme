<?php
/*
Template Name: Page old Menu
*/
?>
<?php $options = get_option( 'smart_theme_options' ); ?>
<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0,  user-scalable=no">
    <meta name="google-site-verification" content="dIQFnhzgxrWG1P8K9isaGKcugPYk7Pq6nPo2YLH5bMA" />
    <meta name="ahrefs-site-verification" content="8c6072e9fe510b7809a1bc29015d0411211e6b0e3e40c08ce4eae395875e9e63">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fa-all.min.css?<?php echo date(get_option('date_format')); ?>">
    <!-- Font Awesome 5 -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles-all.min.css?1223<?php echo date(get_option('date_format')); ?>3">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/proforientacija.css?345<?php echo date(get_option('date_format')); ?>3"> -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
    <!-- Google Tag Manager Fb pixel -->
    <?php echo $options[fb_pixel];?>
    <?php echo $options[gtm_code];?>
    <!-- End Google Tag Manager and Fb pixel -->
</head>

<body <?php body_class(); ?>>


<svg class="hidden">
            <symbol id="icon-menu" viewBox="0 0 119 25">
                <title>menu</title>
                <path d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"/>
            </symbol>
            <symbol id="icon-close" viewBox="0 0 24 24">
                <title>close</title>
                <path d="M24 1.485L22.515 0 12 10.515 1.485 0 0 1.485 10.515 12 0 22.515 1.485 24 12 13.484 22.515 24 24 22.515 13.484 12z"/>
            </symbol>
        </svg>
<div>
<?php if (current_user_can('level_10')) { ?><div class="for_adm"><?php } ?>





<header id="header" class="fixed-top">
 <nav class="navbar navbar-expand-lg navbar-dark bg-kirpichik static-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo_desktop" alt="IT-школа СМАРТ" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/mobile_logo.svg" class="logo_mobile" alt="IT-школа СМАРТ" />
    </a>
        <div class="header-phone">
            <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380973696912">(097) 369 69 12</a>
            <div class="header-phone_last"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380663330523">(066) 333 05 23</a></div>
        </div>
     <div class="menu-smart">
        <ul>
           <?php
            wp_nav_menu( array(
                'menu'            => '2',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'walker'          => '',
                  'walker_nav_menu_start_el'          => '',
            ) );
            ?>
        </ul>
        <div class="lux_search">
            <div class="button"><span><i class="fa fa-search" aria-hidden="true"></i></span></div>
        </div>
    </div>
  </div>
</nav>
</header>

<!--

<header id="smart-header">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="desktop"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-pc.svg" alt="IT-школа СМАРТ" /></a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="d-none mobile"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile_logo.svg" alt="IT-школа СМАРТ" /></a>

<div class="phone">
<a href="tel:+380676184514"><span><i class="fa fa-phone" aria-hidden="true"></i> (067) 618 45 14</span></a>
</div>


<div id="nav-icon">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
</div>


        </div>

        <ul class="menu">
        <?php
            wp_nav_menu( array(
                'menu'            => '2',
                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'walker'          => '',
                  'walker_nav_menu_start_el'          => '',
            ) );
            ?>
        </ul>




        <ul class="foot">
            <li class="phones"><a href="#">Телефоны</a>
                <ul>
                    <li><a href="tel:+380676184514">(067) 618 45 14</a></li>
                    <li><a href="tel:+380663330523">(066) 333 05 23</a></li>
                </ul>
            </li>
            <li class="search"><a href="#">Поиск</a></li>
        </ul>
</header> -->



<?php if (current_user_can('level_10')) { ?></div><?php } ?>
    <div>










  <div style="padding: 300px 0;" class="container">

Пустая страница

</div>


<div class="container">
    <div class="row">
        <main id="main" class="site-main" role="main" style="width: 100%;">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

        // End the loop.
        endwhile;
        ?>
        </main><!-- .site-main -->
</div>
</div>

<?php get_footer(); ?>


