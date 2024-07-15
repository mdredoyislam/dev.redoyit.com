<?php
class redoyit_Scripts{

	public function __construct() {
		 add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}
	public function enqueue_scripts() {
		//wp_enqueue_script( 'navigation', REDOYIT_JS_URL . 'navigation.js', array( 'jquery' ), time(), true );
		//wp_enqueue_script( 'customizer', REDOYIT_JS_URL . 'customizer.js', array( 'jquery' ), time(), true );

		wp_enqueue_script( 'jquery', REDOYIT_JS_URL . 'jquery-3.0.0.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'jquery-migrate', REDOYIT_JS_URL . 'jquery-migrate-3.0.0.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'particles', REDOYIT_JS_URL . 'particles.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'popper', REDOYIT_JS_URL . 'popper.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'bootstrap', REDOYIT_JS_URL . 'bootstrap.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'scrollIt', REDOYIT_JS_URL . 'scrollIt.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'animated-headline', REDOYIT_JS_URL . 'animated.headline.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'jquery-waypoints', REDOYIT_JS_URL . 'jquery.waypoints.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'jquery-counterup', REDOYIT_JS_URL . 'jquery.counterup.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'owl-carousel', REDOYIT_JS_URL . 'owl.carousel.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'jquery-magnific', REDOYIT_JS_URL . 'jquery.magnific-popup.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'jquery-stellar', REDOYIT_JS_URL . 'jquery.stellar.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'isotope-pkgd', REDOYIT_JS_URL . 'isotope.pkgd.min.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'validator', REDOYIT_JS_URL . 'validator.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'redoyit-app', REDOYIT_JS_URL . 'app.js', array( 'jquery' ), time(), true );
		wp_enqueue_script( 'redoyit-scripts', REDOYIT_JS_URL . 'scripts.js', array( 'jquery' ), time(), true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
$redoyit_scripts = new redoyit_Scripts();
