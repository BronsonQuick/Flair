<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the body tag and all content after
 *
 * @package Flair Theme
 */
?>
<!-- Footer -->

<footer class="row">
	<div class="medium-12 columns">

		<?php if ( ! dynamic_sidebar( 'footer-widget-area' ) ) : ?>

		<?php endif; // end footer widget area ?>

	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>