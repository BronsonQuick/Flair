<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="screen-reader-text"><?php _e( 'Search', 'flair' ); ?></label>
	<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'flair' ); ?>" />
	<input type="submit" class="submit button" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'flair' ); ?>" />
</form>