<?php
/**
 * The template for displaying Search Results pages
 *
 * @package Flair Theme
 */

get_header(); ?>

	<div class="row">

		<!-- Main Blog Content -->
		<div class="medium-9 columns content" role="content">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'flair' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php // Let's give a result count for the search. NB: This might course performance issues on heavy content sites ?>
				<?php $args = array(
					's'              => $s,
					'posts_per_page' => 50,
					); ?>
				<?php $all_results = new WP_Query( $args ); ?>
				<?php $search_results = $all_results->post_count; ?>
				<?php wp_reset_postdata();?>

				<p><?php echo 'Your search for "' . get_search_query() . '" returned <strong>' . $search_results . '</strong> results.'; ?></p>

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'parts/content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
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