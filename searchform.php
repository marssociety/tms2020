<?php
/**
 * The template for displaying search forms
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="search">
	<div class="search-wrap">
		<div class="search-input-elm">
			<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
					<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
					<input type="search" class="search-input form-control shadow-none search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
				<button type="submit" class="search-submit shadow-none btn"><i class="tms-red fa fa-search"></i></button>
			</form>
		</div>                                
		<button class="search-btn btn shadow-none"><i class="tms-red fa fa-search"></i></button>
	</div>
</div>
				

