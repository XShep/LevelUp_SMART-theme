<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Smart
 * @since SMART 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<div class="post-image">
	<?php the_post_thumbnail(array()); ?>


<?php
    $category = get_the_category();
    $the_category_id = $category[0]->cat_ID;

    if(function_exists('rl_color')){
        $rl_category_color = rl_color($the_category_id);
    }
?>

	<span class="category"><?php
$categories = get_the_category();
if($categories[0]){
	echo '<a href="' . get_category_link($categories[0]->term_id ) . '" style="background: ' . $rl_category_color . '">'. $categories[0]->name . '</a>';
}
	?></span>
</div>



<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
        ?>
        <div class="acf-description"><?php the_field( 'short_description' ); ?></div>
	<ul class="tag">
 		<li class="date"><span><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></span></li>

<?php $posttags = get_the_tags(); ?>
<?php if( $posttags ){ ?>

 		<li class="cat"><span><i class="fa fa-tags" aria-hidden="true"></i><?php the_tags(); ?></span></li>
<?php } ?>
 	</ul>



	</header><!-- .entry-header -->






	<div class="entry-content">



		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Подробнее %s', 'Smart' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'Smart' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'Smart' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
    </div><!-- .entry-content -->

    <div class="share-block"><h4><?php pll_e('share_news','Smart'); ?></h4><div id="share-bar"></div><div class="line"></div></div>


	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php Smart_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'Smart' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->



<div class="block-comments" style="display: none;">
	<h2>Комментарии Facebook:</h2>
	<div class="content">
		<?php echo do_shortcode('[gs-fb-comments]'); ?>
	</div>
</div>

<div class="block-tags" style="display: none;">
	<h2>Облако тегов:</h2>
	<div class="content">
		<?php wp_tag_cloud('largest=15&smallest=14&unit=px&number=10'); ?>
	</div>
</div>
