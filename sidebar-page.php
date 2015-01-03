<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Flair Theme
 */
?>
<!-- Sidebar -->

<?php if ( ! is_page_template( 'templates/sidebar-left.php' ) ) : ?>
	<aside class="medium-3 columns sidebar">
<?php else : ?>
	<aside class="medium-3 pull-9 columns sidebar">
<?php endif; ?>

<?php if ( ! dynamic_sidebar( 'page-widget-area' ) ) : ?>

<?php endif; // end sidebar widget area ?>

	</aside>

<!-- End Sidebar -->

</div>

 <!-- End Main Content and Sidebar -->