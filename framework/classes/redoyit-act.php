<?php
class redoyit_Act {

	public function __construct() {
		$this->redoyit_register_action();
	}
	private function redoyit_register_action() {
		add_action( 'redoyit_preloader_ready', array( 'redoyit_Int', 'redoyit_preloader' ) );
		add_action( 'redoyit_back_to_top_ready', array( 'redoyit_Int', 'redoyit_back_to_top' ) );
		add_action( 'redoyit_header_logo_ready', array( 'redoyit_Int', 'redoyit_header_logo' ) );
		add_action( 'redoyit_mobile_menu_ready', array( 'redoyit_Int', 'redoyit_mobile_menu' ) );
		add_action( 'redoyit_authore_box_ready', array( 'redoyit_Int', 'redoyit_authore_box' ) );
		add_action( 'redoyit_blog_social_ready', array( 'redoyit_Int', 'redoyit_blog_social' ) );
	}
}
$redoyit_act = new redoyit_Act();
