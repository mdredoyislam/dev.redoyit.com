<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redoyit
 */

?>
<!-- ========================================= Start Footer -->
    	<footer class="footer">
    		<p>
			<a href="<?php echo esc_url( __( 'https://redoyit.org/', 'redoyit' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright %s', 'redoyit' ), 'RedoyIT' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'redoyit' ), 'redoyit', '<a href="https://redoyit.com">Md Redoy Islam</a>' );
				?>
			</p>
    	</footer>
    	<!-- End Footer ====
    	======================================= -->
		<?php wp_footer(); ?>

    </body>
</html>
