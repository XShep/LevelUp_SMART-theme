<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Smart
 * @since SMART 1.0
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
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fa-all.min.css">
    <!-- Font Awesome 5 -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles-all.min.css?21331<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/home.css?1241441<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/education.css?12113<?php echo date(get_option('date_format')); ?>3">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
    <!-- Google Tag Manager Fb pixel -->
    <?php echo $options['fb_pixel'];?>
    <?php echo $options['gtm_code'];?>
    <!-- End Google Tag Manager and Fb pixel -->
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<?php echo $options['gtm_code_n'];?>
<!-- End Google Tag Manager (noscript) -->

<?php
if (isset($GLOBALS["polylang"])) {

    $translations = $GLOBALS["polylang"]->model->post->get_translations($post->ID);
}
?>
<svg class="hidden"><symbol id="icon-menu" viewBox="0 0 119 25"><title>menu</title><path d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"/></symbol><symbol id="icon-close" viewBox="0 0 24 24"><title>close</title><path d="M24 1.485L22.515 0 12 10.515 1.485 0 0 1.485 10.515 12 0 22.515 1.485 24 12 13.484 22.515 24 24 22.515 13.484 12z"/></symbol></svg>

<div>

<header id="header" class="fixed-top header-color <?php if (count($translations) > 1) { echo 'multilang'; } ?>">
	<div class="content">
		<div class="logo">
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		          <img src="https://uaitsmart.com/wp-content/uploads/2020/01/logo.svg" class="logo_desktop" alt="Smart" />
		          <img src="https://uaitsmart.com/wp-content/uploads/2020/01/mobile_logo.svg" class="logo_mobile" alt="Smart" />
		    </a>
		</div>
        <div class="header-phone">
            <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380960842513">(067) 807 21 01</a>
        </div>
		<div class="basic-nav">
    <?php
            wp_nav_menu( array(
                'menu'            => '57',
                'container'       => false,
                'items_wrap'      => '<ul class="basic-menu">%3$s</ul>',
                'depth'           => 0,
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'walker'          => '',
                'add_li_class'  => 'nav-item',
                'link_class'   => 'nav-link',
                  'walker_nav_menu_start_el'          => '',
            ) );
            ?>
		</div>
		<div class="search">
            <div class="lux_search">
                <div class="button"><span><i class="fa fa-search" aria-hidden="true"></i></span></div>
            </div>
        </div>

        <?php if (count($translations) > 1) { ?>
        <div class="lang-btn">
                <div class="lang-block">
                    <div class="toggle_langs lang-<?php echo pll_current_language(); ?>"><?php echo pll_current_language('name'); ?></div>
                    <?php
                        $args = array(
                            'container' => false,
                            'menu'            => '117',
                            'menu_class' => 'lang-menu',
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
        </div>
        <?php } ?>

		<div class="menu-btn">
            <button class="head-menu-btn desktop-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <button class="head-menu-btn-mobile mobile-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
		</div>
    </div>


    <div id="smart_mobile_menu">
    <div class="smart_mobile_menu_btn_hide">
        <svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>
    </div>
    <div class="smart_mobile_menu-menu text-center">

    <div class="big-menu-mob">
        <?php
                                $menuParameters = array(
                                //     Крупное меню
                                'menu'            => '108',
                                'container'       => false,
                                'items_wrap'      => '<ul class="big-menu">%3$s</ul>',
                                'depth'           => 0,
                                'echo'            => true,
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'walker'          => '',
                                'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
				</div>

            <div class="medium-menu-mob">
					<!-- <div class="menu-title">Проекты</div> -->
          <?php
                                $menuParameters = array(
                                //     Базовое меню
                                'menu'            => '109',
                                'container'       => false,
                                'items_wrap'      => '<ul class="medium-menu">%3$s</ul>',
                                'depth'           => 0,
                                'echo'            => true,
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'walker'          => '',
                                'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
				</div>





	</div>
</div>

</header>



<div class="smart-menu">
	<div class="smart-menu-content">
		<div class="smart-menu-header">
				<a href="/" class="smart-menu-logo"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/logo.svg" alt="Smart"></a>
                <button class="smart-menu-close">&nbsp;</button>
		</div>
		<div class="smart-menu-left-side">

				<ul class="socials">
					<li><a href="https://www.facebook.com/uaitsmartcom/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UC1pDEdmxk5dewDti71J8PsQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/itschoolsmart/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
				<div class="v-line"></div>
				<div class="vertical-text"><span><?php pll_e('we_socials','Smart'); ?></span></div>

		</div>
		<div class="smart-menu-block-content">

			<div class="menu-left">
				<div>
					<div class="menu-name">
						<div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids1.svg" alt=""></div><span><?php pll_e('years_5_7','Smart'); ?></span>
					</div>
          <?php
                                $menuParameters = array(
                                //     5-7 лет
                                    'menu'            => '104',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>

                <div class="menu-name last-child">
                            <div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids3.svg" alt=""></div><span><?php pll_e('years_11_13','Smart'); ?></span>
                          </div>
                          <?php
                                                $menuParameters = array(
                                                //     11-13 лет
                                                    'menu'            => '106',
                                                    'container'       => false,
                                                    'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
                                                    'depth'           => 0,
                                                    'echo'            => true,
                                                    'before'          => '',
                                                    'after'           => '',
                                                    'link_before'     => '',
                                                    'link_after'      => '',
                                                    'walker'          => '',
                                                    'walker_nav_menu_start_el'          => '',
                                                );
                                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                    ?>
				</div>
				<div>

					<div class="menu-name">
						<div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids2.svg" alt=""></div><span><?php pll_e('years_8_10','Smart'); ?></span>
					</div>
          <?php
                                $menuParameters = array(
                                //     8-10 лет
                                    'menu'            => '105',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>

					<div class="menu-name last-child">
						<div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids4.svg" alt=""></div><span><?php pll_e('years_13_16','Smart'); ?></span>
					</div>
          <?php
                                $menuParameters = array(
                                //     13-16 лет
                                    'menu'            => '107',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>

				</div>
			</div>

			<div class="menu-right">

				<div>
        <?php
                                $menuParameters = array(
                                //     Крупное меню
                                'menu'            => '108',
                                'container'       => false,
                                'items_wrap'      => '<ul class="big-menu">%3$s</ul>',
                                'depth'           => 0,
                                'echo'            => true,
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'walker'          => '',
                                'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
				</div>

				<div>
					<!-- <div class="menu-title">Проекты</div> -->
          <?php
                                $menuParameters = array(
                                //     Базовое меню
                                'menu'            => '109',
                                'container'       => false,
                                'items_wrap'      => '<ul class="medium-menu">%3$s</ul>',
                                'depth'           => 0,
                                'echo'            => true,
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'walker'          => '',
                                'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                    ?>
				</div>

			</div>

		</div>

		<div class="smart-menu-footer">
			<div>
				<ul class="foot-list">
					<li>
                        <span>
                            <a data-toggle="modal" data-target="#show-map"><i class="fa fa-map-marker " aria-hidden="true"></i><span><?php pll_e('location_center','Smart'); ?>,</span></a>
                            <a data-toggle="modal" data-target="#show-map"><i class="fa fa-map-marker " aria-hidden="true"></i><span><?php pll_e('location_topol','Smart'); ?>.</span></a>
                            <a data-toggle="modal" data-target="#show-map"><i class="fa fa-map-marker " aria-hidden="true"></i><span><?php pll_e('location_lb','Smart'); ?>.</span></a>
                        </span>
                    </li>
					<li>
                        <span>
                            <a href="tel:+380678072101"><i class="fa fa-phone" aria-hidden="true"></i><span>(067) 807 21 01</span></a>
                            <a href="tel:+380663330523"><i class="fa fa-phone" aria-hidden="true"></i><span>(066) 333 05 23</span></a>
                        </span>
                    </li>
				</ul>
			</div>
		</div>

	</div>
</div>
