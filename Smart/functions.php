<?php
/**
 * Smart functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Smart
 * @since SMART 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since SMART 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Smart only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'Smart_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since SMART 1.0
 */
function Smart_setup() {
	load_theme_textdomain( 'Smart' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );


	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 600, true );


    if ( function_exists( 'add_theme_support' ) ) {
        add_image_size( 'square-large', 600, 600, true); // name, width, height, crop
    }


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		// 'primary' => __( 'Primary Menu',      'Smart' ),
		// 'social'  => __( 'Social Links Menu', 'Smart' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );


	$color_scheme  = Smart_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	/**
	 * Filter Smart custom-header support arguments.
	 *
	 * @since SMART 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'Smart_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'assets/genericons/genericons.css', Smart_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // Smart_setup
add_action( 'after_setup_theme', 'Smart_setup' );




// Чистим от муосра добявляемого WP
function remove_wpautop(){
   $pages = array(home);
   if (is_page($pages)){
      remove_filter('the_content', 'wpautop');
   }
}
add_action('wp_head', 'remove_wpautop');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
        $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );
        return $buffer;
    });
});
// End - Чистим от муосра добявляемого WP






/**
 * Register widget area.
 *
 * @since SMART 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function Smart_widgets_init() {
    register_sidebar( array(
		'name' => "Сайдбар - Новости",
		'id' => 'news-sidebar',
		'description' => 'Эти виджеты будут показаны на страницах записей новостей',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

    register_sidebar( array(
		'name' => "Сайдбар - Блог",
		'id' => 'blog-sidebar',
		'description' => 'Эти виджеты будут показаны на страницах записей блога',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	) );

    register_sidebar( array(
		'name' => "Футер - 1 колонка",
		'id' => 'footer-1',
		'description' => 'Футер - 1 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	) );

    register_sidebar( array(
		'name' => "Футер - 2 колонка",
		'id' => 'footer-2',
		'description' => 'Футер - 2 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	) );

    register_sidebar( array(
		'name' => "Футер - 3 колонка",
		'id' => 'footer-3',
		'description' => 'Футер - 3 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
		'name' => "Футер - 4 колонка",
		'id' => 'footer-4',
		'description' => 'Футер - 4 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
		'name' => "Футер - 5 колонка",
		'id' => 'footer-5',
		'description' => 'Футер - 5 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

    register_sidebar( array(
		'name' => "Новый Футер - 1 колонка",
		'id' => 'new-footer-1',
		'description' => 'Футер - 1 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Новый Футер - 2 колонка",
		'id' => 'new-footer-2',
		'description' => 'Футер - 2 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Новый Футер - 3 колонка",
		'id' => 'new-footer-3',
		'description' => 'Футер - 3 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



    register_sidebar( array(
		'name' => "Сайдбар под новостью",
		'id' => 'after-news-sidebar',
		'description' => 'Для виджетов следом за новостью',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Сайдбар под статьей",
		'id' => 'after-blog-sidebar',
		'description' => 'Для виджетов следом за статьей',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'Smart_widgets_init' );

if ( ! function_exists( 'Smart_fonts_url' ) ) :
/**
 * Register Google fonts for Smart.
 *
 * @since SMART 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function Smart_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'Smart' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Smart 1.1
 */

/**
 * Enqueue scripts and styles.
 *
 * @since SMART 1.0
 */
function Smart_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'Smart-fonts', Smart_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/assets/genericons/genericons.css', array(), '3.2' );

    // Add Slick theme, used in the main stylesheet.
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), '3.2' );

	// Add Slick, used in the main stylesheet.
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), '3.2' );

    // Add Bootstrap, used in the main stylesheet.
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), '3.2' );

    // Add Font Awesome, used in the main stylesheet.
	wp_enqueue_style( 'fotnawesome', get_template_directory_uri() . '/assets/font-awesome.min.css', array(), '3.2' );



	// Load our main stylesheet.
	wp_enqueue_style( 'Smart-style', get_stylesheet_uri() );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    // wp_enqueue_script( 'Smart-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
    wp_enqueue_script( 'Smart-script', get_template_directory_uri() . '/dist/scripts-all.min.js','','32134',true);

	// wp_enqueue_script( 'Smart-script', get_template_directory_uri() . '/dist/scripts-all.min.js', array( 'jquery' ), '20150330', true );
}
add_action( 'wp_enqueue_scripts', 'Smart_scripts' );


function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-2.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );



/**
 * Add preconnect for Google Fonts.
 *
 * @since Smart 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since SMART 1.0
 *
 * @see wp_add_inline_style()
 */
function Smart_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	wp_add_inline_style( 'Smart-style', $css );
}
add_action( 'wp_enqueue_scripts', 'Smart_post_nav_background' );


function Smart_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'Smart_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since SMART 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function Smart_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'Smart_search_form_modify' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Smart 1.9
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function Smart_widget_tag_cloud_args( $args ) {
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'Smart_widget_tag_cloud_args' );

//$wpdb2 = new wpdb( 'levelu04_bd', 'pannsxf7', 'levelu04_bd', 'localhost' );
function _SmrkvLib_GetCourse ($atts = array(), $content = null, $tag)
{
	global $wpdb;
	$result =
		$wpdb->get_results('SELECT * FROM smrkv_courses WHERE url like "'.$atts['cource'].'%"');
	$dat_res = get_object_vars($result[0]);


	return $dat_res[$atts['field']];
}
add_shortcode( 'SmrkCourse', '_SmrkvLib_GetCourse' );

//BEGIN amberpanther.com code
function include_file($atts) {
     //if filepath was specified
     extract(
          shortcode_atts(
               array(
                    'filepath' => 'NULL',
                    'key1' => 'NULL'
               ), $atts
          )
     );

     if(strpos($filepath,"?")) {
          $query_string_pos = strpos($filepath,"?");
          //create global variable for query string so we can access it in our included files if we need it
          //also parse it out from the clean file name which we will store in a new variable for including
          global $query_string;
          $query_string = substr($filepath,$query_string_pos + 1);
          $clean_file_path = substr($filepath,0,$query_string_pos);
          //if there isn't a query string
     } else {
          $clean_file_path = $filepath;
     }

     //check if the filepath was specified and if the file exists
     if ($filepath != 'NULL' && file_exists(TEMPLATEPATH.$clean_file_path)){
          //turn on output buffering to capture script output
          ob_start();
          //include the specified file
          include(TEMPLATEPATH.$clean_file_path);
          //assign the file output to $content variable and clean buffer
          $content = ob_get_clean();
          return $content;
     }
}
//register the Shortcode handler
add_shortcode('include', 'include_file');


add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

global $user_ID;

if ( current_user_can( 'manager' ) ) {
    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'index.php' );
        remove_menu_page( 'edit-comments.php' );
         remove_menu_page( 'admin.php?page=wpcf7' );
         remove_menu_page( 'edit.php?post_type=rl_gallery' );
         remove_menu_page( 'wpcf7' );
         remove_menu_page( 'tools.php' );
         remove_menu_page( 'Media' );
         remove_menu_page( 'edit.php' );                   // Записи
         remove_menu_page( 'profile.php' );
         remove_menu_page( 'upload.php' );
    }
}

// Отключение обновлений
// add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
// wp_clear_scheduled_hook('wp_version_check');



register_nav_menus(array(
	'mibile_nav'    => 'Мобильная навигация',

// Для полноэкранного меню
    'head_menu'    => 'Меню в шапке',
	'full_nav_1'    => '5-7 лет',
	'full_nav_2'    => '8-10 лет',
	'full_nav_3'    => '11-13 лет',
	'full_nav_4'    => '13-16 лет',
	'full_nav_5'    => 'Крупное меню',
	'full_nav_6'    => 'Базовое меню',
// Для полноэкранного меню
));

function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
  if($args->link_class) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


/** чтоб РЕДАКТОР не удалял теги span без атрибутов */
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');
/** чтоб РЕДАКТОР не удалял теги span без атрибутов */

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * Implement the Custom Header feature.
 *
 * @since SMART 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since SMART 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since SMART 1.0
 */
require get_template_directory() . '/inc/customizer.php';


function admin_favicon() {
    echo '<link rel="Shortcut Icon" type="image/svg+xml"
	      href="https://uaitsmart.com/wp-content/themes/Smart/img/admin_favicon.png" />';
}
add_action('admin_head', 'admin_favicon');

add_action( 'admin_bar_menu', 'my_admin_bar_menu', 90 );
function my_admin_bar_menu( $wp_admin_bar ) {
	$wp_admin_bar->add_menu( array(
		'id'    => 'shortcodes',
		'title' => '<span class="ab-icon"></span><span class="ab-label">'.__( 'Курсы Smart', 'some-textdomain' ).'</span>',
		'href'  => '/wp-admin/admin.php?page=shortcodes',
        'meta' => array(
                'target' => '_blank', // Change to _blank for launching in a new window
                'class' => 'shortcodes-link', // Add a class to your link
        )
	) );
};

if( !function_exists('_add_my_quicktags') ){

function _add_my_quicktags()
{ ?>

<?php }
add_action('admin_print_footer_scripts', '_add_my_quicktags');
}

add_action( 'admin_print_footer_scripts', 'test_callback' );
    function test_callback() {
    if ( wp_script_is('quicktags') ) :
    ?>
    <?php endif;
}

add_filter( 'category_link', function($a){
	return str_replace( 'category/', '', $a );
}, 99 );



add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
			return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
		return $the_template;' )
);


function shortcode_button_script()
{
    if(wp_script_is("quicktags"))
    {
        ?>
            <script type="text/javascript">

                //this function is used to retrieve the selected text from the text editor
                function getSel()
                {
                    var txtarea = document.getElementById("content");
                    var start = txtarea.selectionStart;
                    var finish = txtarea.selectionEnd;
                    return txtarea.value.substring(start, finish);
                }

                QTags.addButton(
                    "video_shortcode",
                    "Видео",
                    callback
                );

                function callback()
                {
                    var selected_text = getSel();
                    QTags.insertContent('<div class="youtube-player" data-id="Ar2IEc7iiTk">' +  selected_text + '</div>');
                }
            </script>
        <?php
    }
}

add_action("admin_print_footer_scripts", "shortcode_button_script");


// Загрузка SVG

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


// add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// function special_nav_class ($classes, $item) {
//     if (in_array('current-menu-item', $classes) ){
//         $classes[] = 'active ';
//     }
//     return $classes;
// }


// END Загрузка SVG


// $LastModified_unix = 1294844676;
// $LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
// $IfModifiedSince = false;
// if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))
//     $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
// if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
//     $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
// if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
//     header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
//     exit;
// }
// header('Last-Modified: '. $LastModified);


function php_in_widgets($widget_content) {
	if (strpos($widget_content, '<' . '?') !== false) {
		ob_start();
		eval('?' . '>' . $widget_content);
		$widget_content = ob_get_contents();
		ob_end_clean();
	}
	return $widget_content;
}

add_filter('widget_text', 'php_in_widgets', 99);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Подробнее...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



function search_filter ($query) {
if ($query->is_search)
$query->set('cat', '1, 32');
return $query;
}
add_filter('pre_get_posts', 'search_filter');



// Для публикации новостей
add_theme_support ('align-wide');
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Smart blue', 'genesis-sample' ),
		'slug'  => 'smart-blue',
		'color'	=> '#15acf2',
	),
	array(
		'name'  => __( 'Smart pink', 'genesis-sample' ),
		'slug'  => 'smart-pink',
		'color' => '#ff1569',
	),
	array(
		'name'  => __( 'Blue gray', 'genesis-sample' ),
		'slug'  => 'Blue-gray',
		'color' => '#678b97',
       ),
) );

function Smart_gutenberg_editor_styles() {
    wp_enqueue_style( 'Smart-block-editor-styles', get_theme_file_uri( '/css/style-editor.css' ), false, '1.0', 'all' );
}

add_action( 'enqueue_block_editor_assets', 'Smart_gutenberg_editor_styles' );

function column_block_cgb_editor_assets(){
    // Scripts.
    wp_enqueue_script(
        'column_block-cgb-block-js', // Handle.
        plugins_url('/dist/blocks.build.js', dirname(__FILE__)),
        array('wp-blocks', 'wp-i18n', 'wp-element')
    );

    // Styles.
    wp_enqueue_style(
        'column_block-cgb-block-editor-css', // Handle.
        plugins_url('dist/blocks.editor.build.css', dirname(__FILE__)),
        array('wp-edit-blocks')
    );
} // End function column_block_cgb_editor_assets().

// Hook: Editor assets.
add_action('enqueue_block_editor_assets', 'column_block_cgb_editor_assets');


function my_mario_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'mario-blocks',
				'title' => __( 'Mario Blocks', 'mario-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'my_mario_block_category', 10, 2);

function my_stylesheet1(){
wp_enqueue_style("style-admin",get_bloginfo('stylesheet_directory')."/assets/for_admin.css");
}
add_action('admin_head', 'my_stylesheet1');

// Options page for WP PM 20
require get_template_directory() . '/inc/options_page.php';
require get_template_directory() . '/inc/options_event-modal.php';

require get_template_directory() . '/inc/custom-shortcodes.php';

// function add_description_to_menu($item_output, $item, $depth, $args) {
//     if (strlen($item->description) > 0 ) {
//         $item_output .= sprintf('<span class="description">%s</span>', esc_html($item->description));

//     }

//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el', 'add_description_to_menu', 10, 4);

add_filter('acf/format_value/type=textarea', 'do_shortcode');

add_filter('widget_tag_cloud_args','set_tag_cloud_args');
function set_tag_cloud_args( $args ) {
	$args['number'] = 10;
	$args['largest'] = 12;
	$args['smallest'] = 12;
	$args['unit'] = 'px';
	return $args;
}

function hcf_register_meta_boxes() {
    add_meta_box( 'hcf-1', __( 'Сайдбар для данной записи', 'hcf' ), 'wporg_custom_box_html', 'page', 'side' );
}
add_action( 'add_meta_boxes', 'hcf_register_meta_boxes' );

function wporg_custom_box_html($post)
{
    $value = get_post_meta($post->ID, '_smart_meta_sidebar', true);
    echo '<div class="format-setting type-sidebar-select ' . ( $has_desc ? 'has-desc' : 'no-desc' ) . '">';
        echo $has_desc ? '<div class="description">' . htmlspecialchars_decode( $field_desc ) . '</div>' : '';
        echo '<div class="format-setting-inner">';
        echo '<label for="custom_sidebar">Выберите Сайдбар</label><select name="custom_sidebar" id="custom_sidebar" class="components-select-control__input">';

        echo '<option value="">-- ' . __( 'Выберите сайдбар', 'dart' ) . ' --</option>';
        echo '<option value="news-sidebar" id="news-sidebar"' . selected($value, 'news-sidebar') . '>' . __( 'Сайдбар для новостей', 'dart' ) . '</option>';
        echo '<option value="blog-sidebar" id="blog-sidebar"' . selected($value, 'blog-sidebar') . '>' . __( 'Сайдбар для блога', 'dart' ) . '</option>';
        echo '<option value="no-sidebar" id="no-sidebar"' . selected($value, 'no-sidebar') . '>' . __( 'Без сайдбара', 'dart' ) . '</option>';

        echo '</select>';
        echo '</div>';
        echo '</div>';

    ?>
    <?php
}

function wporg_save_postdata($post_id)
{
    if (array_key_exists('custom_sidebar', $_POST)) {
        update_post_meta(
            $post_id,
            '_smart_meta_sidebar',
            $_POST['custom_sidebar']
        );
    }
}
add_action('save_post', 'wporg_save_postdata');



pll_register_string('we_socials', 'we_socials'); // Мы в соцсетях
pll_register_string('years_5_7', 'years_5_7'); // 5-7 лет
pll_register_string('years_8_10', 'years_8_10'); // 8-10 лет
pll_register_string('years_11_13', 'years_11_13'); // 11-13 лет
pll_register_string('years_13_16', 'years_13_16'); // 13-16 лет
pll_register_string('location_center', 'location_center'); // ул. Троицкая, 21Г
pll_register_string('location_topol', 'location_topol'); // ул.Запорожское шоссе, 53Б
pll_register_string('location_lb', 'location_lb'); // Левый берег
pll_register_string('smart_location', 'smart_location'); // Локация СМАРТ
pll_register_string('smart_location_center', 'smart_location_center'); // Филиал в центре
pll_register_string('smart_location_topol', 'smart_location_topol'); // Филиал на Тополе
pll_register_string('smart_location_lb', 'smart_location_lb'); // левый берег
pll_register_string('Placeholder_search', 'Placeholder_search'); // Введите слово, чтобы начать поиск
pll_register_string('smart_copyright', 'smart_copyright'); // © 2020. Все права защищены
pll_register_string('share_news', 'share_news'); // "Поделиться" В новости
pll_register_string('read_more', 'read_more'); // Подробнее
pll_register_string('prev_page', 'prev_page');
pll_register_string('next_page', 'next_page');
pll_register_string('news_widget_title', 'news_widget_title');
pll_register_string('articles_widget_title', 'articles_widget_title');
pll_register_string('Page', 'Page');
