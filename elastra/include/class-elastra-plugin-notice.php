<?php
/**
 * Admin notice recommending the free Envo Blocks plugin.
 *
 * One button installs (from wordpress.org) and activates the plugin over AJAX. Without JavaScript the button
 * falls back to the core install / activate screens. The notice can be dismissed for good.
 *
 * @package Elastra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Elastra_Plugin_Notice' ) ) :

	/**
	 * Envo Blocks recommendation.
	 */
	class Elastra_Plugin_Notice {

		const SLUG      = 'envo-blocks';
		const FILE      = 'envo-blocks/envo-blocks.php';
		const NAME      = 'Envo Blocks';
		const DISMISSED = 'elastra_envo_blocks_notice_dismissed';
		const NONCE     = 'elastra_plugin_notice';

		/**
		 * Hooks.
		 */
		public static function init() {
			add_action( 'admin_notices', array( __CLASS__, 'render' ) );
			add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue' ) );
			add_action( 'wp_ajax_elastra_install_plugin', array( __CLASS__, 'ajax_install' ) );
			add_action( 'wp_ajax_elastra_dismiss_plugin_notice', array( __CLASS__, 'ajax_dismiss' ) );
		}

		/**
		 * 'active', 'installed' (not active) or 'missing'.
		 */
		private static function state() {
			if ( ! function_exists( 'get_plugins' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}
			if ( is_plugin_active( self::FILE ) ) {
				return 'active';
			}
			$plugins = get_plugins();
			return isset( $plugins[ self::FILE ] ) ? 'installed' : 'missing';
		}

		/**
		 * Admin screens (hook suffixes) with the notice: Dashboard, Appearance > Themes and Plugins only,
		 * so it does not follow the user through the whole admin.
		 */
		private static function screens() {
			return array( 'index.php', 'themes.php', 'plugins.php' );
		}

		/**
		 * Only for people who can install and activate plugins, until it is dismissed or the plugin is active.
		 *
		 * @param string $hook_suffix Current admin page (hook suffix).
		 */
		private static function should_show( $hook_suffix ) {
			if ( ! in_array( $hook_suffix, self::screens(), true ) ) {
				return false;
			}
			if ( ! current_user_can( 'install_plugins' ) || ! current_user_can( 'activate_plugins' ) ) {
				return false;
			}
			return ! get_option( self::DISMISSED ) && 'active' !== self::state();
		}

		/**
		 * Styles and script, only where the notice is shown.
		 *
		 * @param string $hook_suffix Current admin page (hook suffix).
		 */
		public static function enqueue( $hook_suffix ) {
			if ( ! self::should_show( $hook_suffix ) ) {
				return;
			}
			wp_enqueue_style( 'elastra-plugin-notice', get_theme_file_uri( 'assets/admin/plugin-notice.css' ), array(), ELASTRA_VERSION );
			wp_enqueue_script( 'elastra-plugin-notice', get_theme_file_uri( 'assets/admin/plugin-notice.js' ), array(), ELASTRA_VERSION, true );
			wp_localize_script(
				'elastra-plugin-notice',
				'elastraPluginNotice',
				array(
					'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
					'nonce'      => wp_create_nonce( self::NONCE ),
					'installing' => __( 'Installing…', 'elastra' ),
					'activating' => __( 'Activating…', 'elastra' ),
					'done'       => __( 'Activated – opening Envo Blocks…', 'elastra' ),
					'failed'     => __( 'The plugin could not be installed automatically.', 'elastra' ),
					'manual'     => __( 'Install it from Plugins › Add New', 'elastra' ),
				)
			);
		}

		/**
		 * The notice.
		 */
		public static function render() {
			global $hook_suffix;

			if ( ! self::should_show( (string) $hook_suffix ) ) {
				return;
			}

			$state = self::state();
			if ( 'installed' === $state ) {
				$label = __( 'Activate Envo Blocks', 'elastra' );
				$url   = wp_nonce_url( admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( self::FILE ) ), 'activate-plugin_' . self::FILE );
			} else {
				$label = __( 'Install Envo Blocks – free', 'elastra' );
				$url   = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=' . self::SLUG ), 'install-plugin_' . self::SLUG );
			}
			$theme = wp_get_theme( get_template() )->get( 'Name' );
			?>
			<div class="notice notice-info is-dismissible elastra-plugin-notice">
				<div class="elastra-plugin-notice__inner">
					<img class="elastra-plugin-notice__logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/admin/envo-blocks.svg' ) ); ?>" width="52" height="52" alt="" />
					<div class="elastra-plugin-notice__body">
						<h2 class="elastra-plugin-notice__title"><?php esc_html_e( 'Build your business website faster with ready-made pages', 'elastra' ); ?></h2>
						<p class="elastra-plugin-notice__text">
							<?php
							printf(
								/* translators: 1: Theme name, 2: Plugin name */
								esc_html__( '%1$s pairs with %2$s, our free block plugin. Import complete pages and sections, add the blocks a business site needs and animate them – no page builder required.', 'elastra' ),
								'<strong>' . esc_html( $theme ) . '</strong>',
								'<strong>' . esc_html( self::NAME ) . '</strong>'
							);
							?>
						</p>
						<ul class="elastra-plugin-notice__features">
							<li><?php esc_html_e( 'Page templates and sections: home, about us, help, contact, heroes and footers', 'elastra' ); ?></li>
							<li><?php esc_html_e( 'Business blocks: pricing tables, opening hours, maps, video popups, countdowns', 'elastra' ); ?></li>
							<li><?php esc_html_e( 'Entrance animations for every block', 'elastra' ); ?></li>
							<li><?php esc_html_e( 'Ready to sell online: shop, product and cart layouts with WooCommerce', 'elastra' ); ?></li>
						</ul>
						<p class="elastra-plugin-notice__actions">
							<a href="<?php echo esc_url( $url ); ?>" class="button button-primary button-hero elastra-plugin-notice__button" data-state="<?php echo esc_attr( $state ); ?>"><?php echo esc_html( $label ); ?></a>
							<a href="<?php echo esc_url( 'https://wordpress.org/plugins/' . self::SLUG . '/' ); ?>" class="elastra-plugin-notice__more" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Learn more', 'elastra' ); ?></a>
						</p>
						<p class="elastra-plugin-notice__message" role="status" aria-live="polite"></p>
					</div>
					<div class="elastra-plugin-notice__media" aria-hidden="true">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/admin/envo-blocks-preview.webp' ) ); ?>" width="360" height="220" alt="" decoding="async" />
					</div>
				</div>
			</div>
			<?php
		}

		/**
		 * Install (when missing) and activate the plugin.
		 */
		public static function ajax_install() {
			check_ajax_referer( self::NONCE, 'nonce' );

			if ( ! current_user_can( 'install_plugins' ) || ! current_user_can( 'activate_plugins' ) ) {
				wp_send_json_error( array( 'message' => __( 'You are not allowed to install plugins.', 'elastra' ) ), 403 );
			}

			require_once ABSPATH . 'wp-admin/includes/plugin.php';

			if ( 'missing' === self::state() ) {
				require_once ABSPATH . 'wp-admin/includes/file.php';
				require_once ABSPATH . 'wp-admin/includes/misc.php';
				require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
				require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

				$api = plugins_api(
					'plugin_information',
					array(
						'slug'   => self::SLUG,
						'fields' => array( 'sections' => false ),
					)
				);
				if ( is_wp_error( $api ) ) {
					wp_send_json_error( array( 'message' => $api->get_error_message() ) );
				}

				$skin     = new WP_Ajax_Upgrader_Skin();
				$upgrader = new Plugin_Upgrader( $skin );
				$result   = $upgrader->install( $api->download_link );

				if ( is_wp_error( $result ) ) {
					wp_send_json_error( array( 'message' => $result->get_error_message() ) );
				}
				if ( is_wp_error( $skin->result ) ) {
					wp_send_json_error( array( 'message' => $skin->result->get_error_message() ) );
				}
				if ( $skin->get_errors()->has_errors() ) {
					wp_send_json_error( array( 'message' => $skin->get_error_messages() ) );
				}
				if ( ! $result ) {
					// Usually a host that needs FTP credentials: the core install screen asks for them.
					wp_send_json_error( array( 'message' => '' ) );
				}
				wp_clean_plugins_cache();
			}

			$activated = activate_plugin( self::FILE );
			if ( is_wp_error( $activated ) ) {
				wp_send_json_error( array( 'message' => $activated->get_error_message() ) );
			}

			wp_send_json_success( array( 'redirect' => admin_url( 'admin.php?page=envo-blocks' ) ) );
		}

		/**
		 * Remember a dismissed notice.
		 */
		public static function ajax_dismiss() {
			check_ajax_referer( self::NONCE, 'nonce' );

			if ( current_user_can( 'install_plugins' ) ) {
				update_option( self::DISMISSED, 1, false );
			}
			wp_send_json_success();
		}
	}

	Elastra_Plugin_Notice::init();

endif;
