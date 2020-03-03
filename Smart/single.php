<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main id="main" class="site-main full_post" role="main">
<div class="container">
	<div id="content-page">



	<div id="content-news" class="content-area editor-styles-wrapper">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;
		?>
		<!-- .site-main -->
	</div><!-- .content-area -->



</div>





<?php if ( in_category( 'blog' ) ) { ?>
<div class="blog-block">
<div class="block-lastartickles block-widget">
    <div class="title-block">
        <h4><?php pll_e('articles_widget_title','LevelUp'); ?></h4>
    </div>
    <div class="content-block articles">
        <?php echo do_shortcode('[cat-articles category="blog" posts="3" orderby="date" order="DESC"]'); ?>
    </div>
</div>

<div class="block-lastnews block-widget">
    <div class="title-block">
        <h4><?php pll_e('events_widget_title','LevelUp'); ?></h4>
    </div>
    <div class="content-block">
        <?php echo do_shortcode('[cat-posts category="news" posts="3" orderby="date" order="DESC"]'); ?>
    </div>
</div>

</div>
<?php } else { ?>

<div class="block-lastnews block-widget">
    <div class="title-block">
        <h4><?php pll_e('news_widget_title','Smart'); ?></h4>
    </div>
    <div class="content-block">
        <?php echo do_shortcode('[cat-posts category="novosti" posts="3" orderby="date" order="DESC"]'); ?>
    </div>
</div>


<div class="block-lastartickles block-widget">
    <div class="title-block">
        <h4><?php pll_e('articles_widget_title','Smart'); ?></h4>
    </div>
    <div class="content-block articles">
        <?php echo do_shortcode('[cat-articles category="blog" posts="3" orderby="date" order="DESC"]'); ?>
    </div>
</div>

<?php } ?>






</div>








<div class="news_sidebar">
	<div class="container">
		<?php
			if ( function_exists('dynamic_sidebar') )
				dynamic_sidebar('after-news-sidebar');
		?>
	</div>
</div>


</main>
<?php get_footer(); ?>
