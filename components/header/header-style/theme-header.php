<!-- ========================================= Start Navbar -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">

			<?php do_action( 'redoyit_header_logo_ready' ); ?>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"><i class="fas fa-bars"></i></span>
			</button>

			<!-- navbar links -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php
				$primary_menu = wp_nav_menu(array(
						'theme_location' 	=> 'primary-menu',
						'container'     	=> false,
						'menu_class' 		=> 'navbar-nav ml-auto',
						'echo' 				=> false,
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				);
				$primary_menu = str_replace('<li', '<li class="nav-item" ', $primary_menu);
				$primary_menu = str_replace('<a', '<a class="nav-link" ', $primary_menu);
				echo $primary_menu;
			?>
			</div>
		</div>
	</nav>
