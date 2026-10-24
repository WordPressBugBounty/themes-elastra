<?php
/**
 * Elastra admin notify
 *
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( !class_exists( 'Elastra_Notify_Admin' ) ) :

	/**
	 * The Elastra admin notify
	 */
	class Elastra_Notify_Admin {

		/**
		 * Setup class.
		 *
		 */
		public function __construct() {

			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'admin_notices', array( $this, 'admin_notices' ), 99 );
			add_action( 'wp_ajax_elastra_dismiss_notice', array( $this, 'dismiss_nux' ) );
			add_action( 'admin_menu', array( $this, 'add_menu' ), 5 );
		}

		/**
		 * Enqueue scripts.
		 *
		 */
		public function enqueue_scripts() {
			global $wp_customize;

			if ( isset( $wp_customize ) || elastra_envo_extra_is_activated() ) {
				return;
			}

			wp_enqueue_style( 'elastra-admin', get_template_directory_uri() . '/lib/assets/admin.css', '', '1' );

			wp_enqueue_script( 'elastra-admin', get_template_directory_uri() . '/lib/assets/admin.js', array( 'jquery', 'updates' ), '1', 'all' );

			$elastra_notify = array(
				'nonce' => wp_create_nonce( 'elastra_notice_dismiss' )
			);

			wp_localize_script( 'elastra-admin', 'elastra_ux', $elastra_notify );
		}

		/**
		 * Output admin notices.
		 *
		 */
		public function admin_notices() {
			global $pagenow;
			$theme_data = wp_get_theme();
			if ( ( 'themes.php' === $pagenow ) && isset( $_GET[ 'page' ] ) && ( 'elastra' === $_GET[ 'page' ] ) || true === (bool) get_option( 'elastra_notify_dismissed' ) || elastra_envo_extra_is_activated() ) {
				return;
			}
			$theme_data = wp_get_theme();
			$theme_name = $theme_data->Name;
			?>

			<div class="notice notice-info elastra-notice is-dismissible">
				<div class="elastra-row">
					<div class="elastra-col">
						<div class="notice-content">
							<?php if ( !elastra_envo_extra_is_activated() && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
								<h2>
									<?php
									/* translators: %s: Theme name */
									printf( esc_html__( 'Thank you for installing %s.', 'elastra' ), '<strong>' . $theme_name . '</strong>' );
									?>
								</h2>
								<p class="elastra-description">
									<?php
									/* translators: %s: Plugin name string */
									printf( esc_html__( 'To take full advantage of all the features this theme has to offer, please install and activate the %s plugin.', 'elastra' ), '<strong>Envo Extra</strong>' );
									?>
								</p>
								<p>
									<?php Elastra_Plugin_Install::install_plugin_button( 'envo-extra', 'envo-extra.php', 'Envo Extra', array( 'elastra-nux-button' ), __( 'Activated', 'elastra' ), __( 'Activate', 'elastra' ), __( 'Install', 'elastra' ) ); ?>
									<a href="<?php echo esc_url( admin_url( 'themes.php?page=elastra' ) ); ?>" class="button button-primary button-hero">
										<?php
										/* translators: %s: Theme name */
										printf( esc_html__( 'Get started with %s', 'elastra' ), $theme_data->Name );
										?>
									</a>
								</p>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}

		public function add_menu() {
			if ( isset( $wp_customize ) || elastra_envo_extra_is_activated() ) {
				return;
			}
			$theme_data = wp_get_theme();

			add_theme_page(
			$theme_data->Name, $theme_data->Name, 'edit_theme_options', 'elastra', array( $this, 'admin_page' )
			);
		}

		public function admin_page() {
			if ( elastra_envo_extra_is_activated() ) {
				return;
			}
			$theme_data = wp_get_theme();
			?>

			<div class="notice notice-info elastra-notice-nux">

				<div class="notice-content">
					<?php if ( !elastra_envo_extra_is_activated() && current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) : ?>
						<h2>
							<?php
							/* translators: %s: Theme name */
							printf( esc_html__( 'Thank you for installing %s.', 'elastra' ), '<strong>' . $theme_data->Name . '</strong>' );
							?>
						</h2>
						<p>
							<?php
							/* translators: %s: Plugin name string */
							printf( esc_html__( 'To take full advantage of all the features this theme has to offer, please install and activate the %s plugin.', 'elastra' ), '<strong>Envo Extra</strong>' );
							?>
						</p>
						<p><?php Elastra_Plugin_Install::install_plugin_button( 'envo-extra', 'envo-extra.php', 'Envo Extra', array( 'elastra-nux-button' ), __( 'Activated', 'elastra' ), __( 'Activate', 'elastra' ), __( 'Install', 'elastra' ) ); ?></p>
					<?php endif; ?>


				</div>
			</div>
			<?php
		}

		/**
		 * AJAX dismiss notice.
		 *
		 * @since 2.2.0
		 */
		public function dismiss_nux() {
			$nonce = !empty( $_POST[ 'nonce' ] ) ? sanitize_text_field( wp_unslash( $_POST[ 'nonce' ] ) ) : false;

			if ( !$nonce || !wp_verify_nonce( $nonce, 'elastra_notice_dismiss' ) || !current_user_can( 'manage_options' ) ) {
				die();
			}

			update_option( 'elastra_notify_dismissed', true );
		}

	}

	endif;

return new Elastra_Notify_Admin();
