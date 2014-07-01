<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Flair Theme
 */

get_header(); ?>


	<div class="row">

		<!-- Main Blog Content -->
		<div class="medium-9 columns content" role="content">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'flair' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'flair' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div>
		<!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>