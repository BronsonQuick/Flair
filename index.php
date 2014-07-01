<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flair Theme
 */

get_header(); ?>
<!-- Main Page Content and Sidebar -->

	<div class="row">

		<!-- Main Blog Content -->
		<div class="medium-9 columns content" role="content">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php flair_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>

		<!-- End Main Content -->
<?php get_sidebar(); ?>
<?php get_footer();?>
