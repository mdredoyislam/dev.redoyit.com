<?php
class redoyit_Style {
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_style' ), 20 );
	}
	public function enqueue_style() {
		wp_enqueue_style( 'redoyit-plugins-style', REDOYIT_CSS_URL . 'plugins.css', false, time() );
		wp_enqueue_style( 'redoyit-theme-style', REDOYIT_CSS_URL . 'style.css', false, time() );
		wp_enqueue_style( 'redoyit-style', get_stylesheet_uri(), null, time() );

		if ( function_exists( 'redoyit_daynamic_styles' ) ) {
			wp_add_inline_style( 'redoyit-theme-style', redoyit_daynamic_styles() );
		}
	}
}
$redoyit_style = new redoyit_Style();