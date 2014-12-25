<?php
/**
 * The template for displaying Author archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flair Theme
 */

get_header(); ?>

	<div class="row">

		<!-- Main Blog Content -->
		<div class="medium-9 columns content" role="content">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title">
					<?php
						/*
						 * Queue the first post, that way we know what author
						 * we're dealing with (if that is the case).
						 *
						 * We reset this later so we can run the loop properly
						 * with a call to rewind_posts().
						 */
						the_post();

						printf( __( 'All posts by %s', 'flair' ), get_the_author() );
					?>
				</h1>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			/*
			 * Since we called the_post() above, we need to rewind
			 * the loop back to the beginning that way we can run
			 * the loop properly, in full.
			 */
			rewind_posts();

			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
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
