<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Flair Theme
 */
?>
<!-- Sidebar -->

<?php if ( ! is_page_template( 'templates/sidebar-left.php' ) ): ?>
	<aside class="large-3 columns">
<?php else: ?>
	<aside class="large-3 pull-9 columns">
<?php endif; ?>

<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

<?php endif; // end sidebar widget area ?>

	</aside>

<!-- End Sidebar -->

</div>

 <!-- End Main Content and Sidebar -->