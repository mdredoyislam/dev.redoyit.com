<header>
	<?php
		$header_widget_elementor = redoyit_get_options( 'header_widget_elementor' );
		if ( class_exists( '\\Elementor\\Plugin' ) ) {
			if ( is_array( $header_widget_elementor ) && ! empty( $header_widget_elementor ) ) :
				$pluginElementor = \Elementor\Plugin::instance();
				foreach ( $header_widget_elementor as $single_value ) {
					$redoyit_all_ssave_elements = $pluginElementor->frontend->get_builder_content( $single_value );
					
					echo do_shortcode( $redoyit_all_ssave_elements );
				}
			endif;
		}
	?>
</header>
