<?php

namespace Tainacan;

class Profile extends \Tainacan\Pages {
	use \Tainacan\Traits\Singleton_Instance;

    public function init() {
		parent::init();
	}

	protected function get_page_slug() : string {
		return 'tainacan_profile';
	}

	public function add_admin_menu() {
		$profile_page_suffix = add_submenu_page(
			$this->tainacan_root_menu_slug,
			__('Profile', 'tainacan'),
			'<span class="icon">' . $this->get_svg_icon( 'user' ) . '</span><span class="menu-text">' .__( 'Profile', 'tainacan-profile' ) . '</span>',
			'read',
			'tainacan_profile',
			array( &$this, 'render_page' ),
            0
		);
		add_action( 'load-' . $profile_page_suffix, array( &$this, 'load_page' ) );
	}

    function admin_enqueue_css() {
        $asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

		wp_enqueue_style(
			'tainacan-profile-page',
			plugins_url( 'build/index.css', __FILE__ ),
			$asset_file['dependencies'],
			$asset_file['version']
		);
	}

	function admin_enqueue_js() {
        $asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

		wp_enqueue_script(
			'tainacan-profile-page',
			plugins_url( 'build/index.js', __FILE__ ),
			$asset_file['dependencies'],
			$asset_file['version'],
			true
		);
	}

    public function render_page_content() {
		require_once('page.php');
	}
}