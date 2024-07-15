<?php
class redoyit_Int {

	public static function redoyit_preloader() {
		$preloader_on_off = redoyit_get_options( 'preloader_on_off' );
		if($preloader_on_off):
	?>
	<!-- ========================================= Start Loading -->
	<div class="loading">
		<div class="text-center middle">
			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
		</div>
	</div>
	<!-- End Loading ====
	======================================= -->
	<?php endif; }

		/**
	 * header logo compatibility.
	 */
	public static function redoyit_header_logo() {
	
		if ( has_custom_logo() ) {
			the_custom_logo();
		} else {
			?>
				<a class="logo" width="150" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo REDOYIT_IMG_URL; ?>logo.png" alt="<?php esc_attr_e( 'Logo', 'redoyit' ); ?>">
				</a>
				<a class="logo sticky-logo" width="150" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo REDOYIT_IMG_URL; ?>logo.svg" alt="<?php esc_attr_e( 'Logo', 'redoyit' ); ?>">
				</a> 
			<?php
		}
	}

	/**
	 * mobile menu compatibility.
	 */
	public static function redoyit_mobile_menu() {
		$mobile_menu_social  = redoyit_get_options( 'mobile_menu_social' );
		$mobile_menu_contact = redoyit_get_options( 'mobile_menu_contact' );
		$mobile_menu_logo    = redoyit_get_options( 'mobile_menu_logo' );
	?>

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><i class="fas fa-times"></i></div>

			<nav class="menu-box">
				<div class="nav-logo">
					<?php if ( isset( $mobile_menu_logo['url'] ) && $mobile_menu_logo['url'] != '' ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo esc_url( $mobile_menu_logo['url'] ); ?>"  alt="<?php esc_attr_e( 'Logo', 'redoyit' ); ?>"></a>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo esc_url( REDOYIT_IMG_URL . 'logo.png' ); ?>" alt="<?php esc_attr_e( 'Logo', 'redoyit' ); ?>"></a>
					<?php endif; ?>
				</div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<?php if ( $mobile_menu_contact ) : ?>
					<div class="contact-info">
						<h4><?php esc_html_e( 'Contact Info', 'redoyit' ); ?></h4>
						<ul class="nav d-block">
							<?php echo $mobile_menu_contact; ?>
						</ul>
					</div>
				<?php endif ?>
				<div class="menu-buttons"><!--Here Menu Buttons Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div><!-- End Mobile Menu -->
<?php

	}
	
	/**
	 * redoyit search popup compatibility.
	 */
	public static function redoyit_blog_social() {
		?>
			<div class="social-share d-flex justify-content-end">
				<h3 class="box-title3 d-inline-block">Social Share : </h3> 
				<ul class="nav social-links">
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>"><i class="fab fa-twitter"></i></a></li>
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://twitter.com/home?status=<?php echo urlencode( get_the_title() ); ?>-<?php echo esc_url( get_permalink() ); ?>"><i class="fab fa-facebook-square"></i></a></li>
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"  href="https://www.pinterest.com/pin/find/?url=<?php echo get_the_permalink(); ?>"><i class="fab fa-pinterest-p"></i></a></li>
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.instagram.com/p/B8Jp8UbAHmd/?utm_source=<?php echo esc_url( get_permalink() ); ?>"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		<?php
	}
	/**
	 * autor box compatibility.
	 */
	public static function redoyit_authore_box() {
		$blog_authore_switch = 1;
		if ( $blog_authore_switch == 1 ) :
			global $post;
			$display_name     = get_the_author_meta( 'display_name', $post->post_author );
			$user_description = get_the_author_meta( 'user_description', $post->post_author );
			$user_avatar      = get_avatar( $post->post_author, 165 );
			if ( isset( $user_description ) && ! empty( $user_description ) ) {
				?>
				<div class="author-box">
					<div class="inner">
						<figure class="author-thumb"><?php echo wp_kses_post( $user_avatar ); ?></figure>
						<h4><?php echo wp_kses_post( ucfirst( $display_name ) ); ?></h4>
						<p><?php echo wp_kses_post( $user_description ); ?></p>
					</div>
				</div>
				<?php
			}
			?>
			<?php
		endif;
	}

}
$redoyit_int = new redoyit_Int();
