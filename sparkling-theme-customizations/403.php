<?php
/**
 * The template for displaying 403 pages (Not Found).
 *
 * @package sparkling
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="post-inner-content">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Bad, bad, bad', 'sparkling' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'You cannot login from anywhere outside of my personal network *kickass*', 'sparkling' ); ?></p>

						<?php get_search_form(); ?>


				</section><!-- .error-403 -->
			</div>
		</main><!-- #main -->
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
