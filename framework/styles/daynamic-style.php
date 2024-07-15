<?php
function redoyit_daynamic_styles() {
	ob_start();
	$redoyit_daynamic_styles_array = array();

	if ( is_page() ) {
		$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
		if ( $featured_img_url ) {
			$page_breadcrumb_bg            = '
                .page-breadcrumb {
                    background-image: url(' . esc_url( $featured_img_url ) . ');
                }
                ';
			$redoyit_daynamic_styles_array[] = $page_breadcrumb_bg;
		}
	}
	$redoyit_daynamic_styles_array_expolord = implode( ' ', $redoyit_daynamic_styles_array );
	//$redoyit_custom_css                     = ob_get_clean();
	return $redoyit_daynamic_styles_array_expolord;
}
