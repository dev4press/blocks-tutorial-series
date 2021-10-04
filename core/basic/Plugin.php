<?php

namespace Dev4Press\Plugin\BlocksTutorialSeries\Basic;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Plugin {
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
	}

	public static function instance() : Plugin {
		static $instance = null;

		if ( ! isset( $instance ) ) {
			$instance = new Plugin();
		}

		return $instance;
	}

	public function plugins_loaded() {
		Blocks::instance();
	}
}