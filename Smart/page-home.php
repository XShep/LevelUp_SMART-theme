<?php
/*
Template Name: Главная 2020
*/
?>


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

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles-all.min.css?44443<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/winter-camp.css?333245<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/home.css?3213123123<?php echo date(get_option('date_format')); ?>3">

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
					<li><a href="https://www.instagram.com/Smart_ua/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCDV6GGLn2dZHOiF9Bs3YGRQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/Smartdpua/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://t.me/Smartit" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
				</ul>
				<div class="v-line"></div>
				<div class="vertical-text">Мы в соцсетях</div>

		</div>
		<div class="smart-menu-block-content">

			<div class="menu-left">
				<div>
					<div class="menu-name">
						<div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids1.svg" alt=""></div><span>5-7 лет</span>
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
                            <div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids2.svg" alt=""></div><span>8-10 лет</span>
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
				</div>
				<div>

					<div class="menu-name">
						<div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids3.svg" alt=""></div><span>11-13 лет</span>
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
						<div class="nav-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/icon_kids4.svg" alt=""></div><span>13-16 лет</span>
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
                            <a href="#"><i class="fa fa-map-marker " aria-hidden="true"></i><span>ул. Троицкая, 21Г,</span></a>
                            <a href="#"><i class="fa fa-map-marker " aria-hidden="true"></i><span>ул.Запорожское шоссе, 53Б.</span></a>
                        </span>
                    </li>
					<li>
                        <span>
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>+38 (067) 618 45 14</span></a>
                            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>+38 (066) 333 05 23</span></a>
                        </span>
                    </li>
					<li>
                        <span>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>info@uaitsmart.com</span></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>topolsmart@gmail.com</span></a>
                        </span>
                    </li>
				</ul>
			</div>
		</div>

	</div>
</div>

	<div>























	<div id="primary" class="content-area home2020">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'Smart' ),
				'next_text'          => __( 'Next page', 'Smart' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'Smart' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->









<!-- Тут новый футер -->




<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Smart
 * @since SMART 1.0
 */
$options = get_option( 'smart_theme_options' );
$options_modal = get_option( 'event_modal_options' );

?>

</div><!-- .site-content -->



<footer id="footer" class="smart-footer">
	<div class="container">
        <div class="content">
            <div class="copr">
                <div class="copyright">
                    <div>
                        <img src="https://uaitsmart.com/wp-content/uploads/2020/01/foot_logo-1.svg" alt=""><span><strong>IT-школа<br>СМАРТ</strong>™ 2020</span>
                    </div>
                </div>
            </div>
            <div class="location-center">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-1'); ?>
            </div>
            <div class="location-topol">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-2'); ?>
            </div>
            <div class="smart-phones">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-3'); ?>
            </div>
            <div class="smart-prof">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-4'); ?>
            </div>
            <div class="smart-socials">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-5'); ?>
            </div>
            <div class="team-343">
                <p>© 343 Studio 2020. Все права защищены</p>
            </div>
        </div>
	</div>
</footer>






<!-- Модалка -->
<div class="modal fade" id="show-map" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title reviews_name" id="exampleModalCenterTitle">Локация СМАРТ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

            </div>
            <div class="modal-body sg-popup-content">



<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-center-tab" data-toggle="tab" href="#nav-center" role="tab" aria-controls="nav-center" aria-selected="true">Филиал в центре<span>ул. Троицкая, 21Г</span></a>
    <a class="nav-item nav-link" id="nav-topol-tab" data-toggle="tab" href="#nav-topol" role="tab" aria-controls="nav-topol" aria-selected="false">Филиал на Тополе<span>ул. Запорожское шоссе 53Б</span></a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-center" role="tabpanel" aria-labelledby="nav-center-tab">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84669.11120484034!2d34.970164663863436!3d48.4582616098831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2dfeed022d9%3A0x1a47723d33ec30f5!2zSVQt0YjQutC-0LvQsCDQodCc0JDQoNCi!5e0!3m2!1sru!2sua!4v1558526400009!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
  <div class="tab-pane fade" id="nav-topol" role="tabpanel" aria-labelledby="nav-topol-tab">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42360.97936547004!2d35.00574892878939!3d48.426567787257184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfb5b40d7fd53%3A0xa4d0f875d33ea3c0!2zSVQt0YjQutC-0LvQsCDQodCc0JDQoNCi!5e0!3m2!1sru!2sua!4v1558526433965!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
</div>




            </div>
        </div>
    </div>
</div>



</div><!-- .site -->
<div class="search-open-bg"></div>
<div id="search-modal" class="search-open open-full">
    <div class="btnClose"></div>
    <div class="close-search"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></div>
    <div class="modalClose"></div>
    <div class="search-modal-inner">
        <p class="text-center">Введите слово, чтобы начать поиск</p>

    <div class="container search">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>
    </div>
</div>













<!-- Modal -->
<div class="modal fade" id="mySmartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog smart-modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body smart-modal-body">
       <button type="button" class="close close-smart-video" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="smart-video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
      </div>
    </div>
  </div>
</div>






<?php if ( $options_modal['ativate_event_modal'] == 1) { ?>
<!-- Модальное окно мероприятия -->
<div class="event_modal <?php echo $options_modal['modal_delay']; ?>" style="background: url(<?php echo $options_modal['background_url'];?>) center no-repeat; background-size: cover;">
	<div class="cont">
		<div><img src="<?php echo $options_modal['image_url'];?>" alt=""></div>
		<div class="content">
            <h4><?php echo $options_modal['event_modal_title']; ?></h4>
            <?php if ( $options_modal['ativate_event_date_modal'] == 1) { ?>
			<div class="date-block">
				<div><strong><?php echo $options_modal['event_date']; ?></strong><?php echo $options_modal['event_location']; ?></div>
				<div class="date-icon"><img src="https://uaitsmart.com/wp-content/uploads/2019/07/event-date-and-time-symbol.svg" alt=""></div>
            </div>
            <?php } ?>
			<div class="feed-form">
				<?php echo do_shortcode( wp_unslash($options_modal['contact_form']) ); ?>
			</div>
		</div>
	</div>

	<div id="setCookie" class="close-icon">
		<img src="https://uaitsmart.com/wp-content/uploads/2019/07/cancel.svg" alt="">
	</div>
</div>
<div class="event_modal-bg"></div>
<style>
    .event_modal .cont>div>div.feed-form .form input[type=submit] { background: <?php echo $options_modal['button_color']; ?> !important; }
    .event_modal .cont>div.content a { color: <?php echo $options_modal['link_color']; ?> !important; }
    .event_modal .cont > div > div.feed-form .form .ajax-loader { background-color: <?php echo $options_modal['link_color']; ?> !important; }
    <?php echo $options_modal['modal_styles']; ?>
</style>
<script>
jQuery(document).ready(function(){
    jQuery(".event_modal .close-icon").click(function () {
    jQuery.cookie("popup-event", "", { expires:1, path: '/' });

            jQuery('.event_modal').removeClass("open");
            setTimeout(function(){
                 jQuery('.event_modal').hide();
            }, 100);
            jQuery('.event_modal-bg').removeClass("open");
            jQuery('.event_modal-bg').css({display: 'none'});

    });

    if ( jQuery.cookie("popup-event") == null )
    {
    setTimeout(function(){

            jQuery('.event_modal').show();
            setTimeout(function(){
                 jQuery('.event_modal').addClass("open");
            }, 200);
            jQuery('.event_modal-bg').fadeIn().addClass("open").css({display: 'block'});

    }, <?php echo $options_modal['modal_delay'] = $options_modal['modal_delay'] * 1000; ?>)
    }
    else {
      jQuery(".event_modal").hide();
    }
});
</script>
<!-- Модальное окно мероприятия -->
<?php } ?>







    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.appear.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.paroller.min.js"></script>
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollMagic.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/debug.addIndicators.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.maskedinput.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/share_bar.js"></script>
    <script>
        jQuery('#share-bar').share();
    </script>
    <div class="event_img-input" style="display:none">[text text-744 id:event_img]</div>
    <div class="link_liqpay-input" style="display:none">[text text-745 id:link_liqpay]</div>
    <div class="price-input" style="display:none">[text text-746 id:event_price]</div>
    <div class="date-input" style="display:none">[text text-747 id:event_date]</div>

    <!-- Binotel -->
    <?php echo $options['binotel_code'];?>
    <!-- End Binotel -->

</body>
</html>
