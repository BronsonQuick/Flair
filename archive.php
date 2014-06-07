<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flair Theme
 */

get_header(); ?>

	<div class="row">

		<!-- Main Blog Content -->
		<div class="large-9 columns content" role="content">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'flair' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'flair' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'flair' ) ) );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'flair' ), get_the_date( _x( 'Y', 'yearly archives date format', 'flair' ) ) );

						else :
							_e( 'Archives', 'flair' );

						endif;
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'parts/content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					flair_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'parts/content', 'none' );

				endif;
			?>
	</div>
	<!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
