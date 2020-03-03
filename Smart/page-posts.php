<?php
/*
Template Name: Страница всех записей
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="posts_page  <?php echo esc_attr( get_post_meta( get_the_ID(), '_smart_meta_sidebar', true ) ); ?>">
	<div class="container">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>

	<div class="content">

		<div class="news">
        <?php $content_after = get_field( 'block_after_content_page' ); ?>
        <?php if ( $content_after ) { ?>
            <?php the_field( 'block_after_content_page' ); ?>
        <?php } ?>
		</div>
        <?php $smart_sidebar = esc_attr( get_post_meta( get_the_ID(), '_smart_meta_sidebar', true ) );
    if($smart_sidebar == 'news-sidebar'){
?>
    <div class="sidebar"><?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('news-sidebar'); ?></div>
<?php  } elseif ($smart_sidebar == 'blog-sidebar') { ?>
    <div class="sidebar"><?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('blog-sidebar'); ?></div>

<?php  } else { ?>

<?php } ?>


	</div>
</div>
</div>


		</main><!-- .site-main -->
	</div>

<?php get_footer(); ?>
