<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Smart
 * @since SMART 1.0
 */
?>

<article class="search-post 222" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div><?php Smart_post_thumbnail(); ?></div>
	<div>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<?php if ( 'post' == get_post_type() ) : ?>

		<footer class="entry-footer">
			<?php Smart_entry_meta(); ?>
			<?php edit_post_link( __( 'Изменить', 'Smart' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

	<?php else : ?>

		<?php edit_post_link( __( 'Изменить', 'Smart' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

	<?php endif; ?>
</div>
</article><!-- #post-## -->
