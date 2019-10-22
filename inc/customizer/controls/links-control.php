<?php
/**
 * Theme Links Control for the Customizer
 *
 * @package zeeDynamic
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Displays the theme links in the Customizer.
	 */
	class zeeDynamic_Customize_Links_Control extends WP_Customize_Control {
		/**
		 * Render Control
		 */
		public function render_content() {
			?>

			<div class="theme-links">

				<span class="customize-control-title"><?php esc_html_e( 'Theme Links', 'zeedynamic' ); ?></span>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/themes/zeedynamic/', 'zeedynamic' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=zeedynamic&utm_content=theme-page" target="_blank">
						<?php esc_html_e( 'Theme Page', 'zeedynamic' ); ?>
					</a>
				</p>

				<p>
					<a href="http://preview.themezee.com/?demo=zeedynamic&utm_source=customizer&utm_campaign=zeedynamic" target="_blank">
						<?php esc_html_e( 'Theme Demo', 'zeedynamic' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/docs/zeedynamic-documentation/', 'zeedynamic' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=zeedynamic&utm_content=documentation" target="_blank">
						<?php esc_html_e( 'Theme Documentation', 'zeedynamic' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/changelogs/?action=themezee-changelog&type=theme&slug=zeedynamic/', 'zeedynamic' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Theme Changelog', 'zeedynamic' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/zeedynamic/reviews/', 'zeedynamic' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Rate this theme', 'zeedynamic' ); ?>
					</a>
				</p>

			</div>

			<?php
		}
	}

endif;
