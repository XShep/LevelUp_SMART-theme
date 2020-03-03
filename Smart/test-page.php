<?php
/*
Template Name: Страница для тестов
*/

get_header(); ?>

	<div id="primary" class="content-area">
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



<!-- Модальное окно мероприятия -->
<div class="event_modal">
	<div class="cont">
		<div><img src="/wp-content/uploads/2019/07/open_day_img.png" alt="Open day in Smart"></div>
		<div class="content">
			<h4>Реєструйтеся на <a href="/smart-otryvaet-dveri-dlya-novyx-znakomstv">День відкритих дверей</a> і приходьте знайомитися:</h4>
			<div class="date-block">
				<div><strong>17 серпня о 12:00</strong>вул. Троїцька, 21Г</div>
				<div><strong>18 серпня о 12:00</strong>вул. Запорізьке шосе, 53Б</div>
				<div class="date-icon"><img src="/wp-content/uploads/2019/07/event-date-and-time-symbol.svg" alt=""></div>
			</div>
			<div class="feed-form">
				<?php echo do_shortcode('[contact-form-7 id="7987" title="Open Day - СМАРТ"]'); ?>
			</div>
		</div>
	</div>

	<div class="close-icon">
		<img src="/wp-content/uploads/2019/07/cancel.svg" alt="">
	</div>
</div>
<div class="event_modal-bg"></div>
<!-- Модальное окно мероприятия -->




<?php get_footer(); ?>

