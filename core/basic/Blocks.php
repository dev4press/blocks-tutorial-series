<?php

namespace Dev4Press\Plugin\BlocksTutorialSeries\Basic;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Blocks {
	public function __construct() {
		add_filter( 'block_categories_all', array( $this, 'categories' ) );
		add_action( 'init', array( $this, 'register_files' ) );
		add_action( 'init', array( $this, 'register_blocks' ) );
	}

	public static function instance() : Blocks {
		static $instance = null;

		if ( ! isset( $instance ) ) {
			$instance = new Blocks();
		}

		return $instance;
	}

	public function categories( $categories ) : array {
		return array_merge(
			$categories,
			array(
				array(
					'slug'  => 'millan',
					'title' => __( "Millan.dev", "blocks-tutorial-series" )
				)
			)
		);
	}

	public function register_files() {
		$asset_file = include( BLOCKS_TUTORIALS_PLUGIN_PATH . 'build/index.asset.php' );

		wp_register_script( 'blocks-tutorial-editor', BLOCKS_TUTORIALS_PLUGIN_URL . 'build/index.js', $asset_file['dependencies'], $asset_file['version'] );
		wp_register_style( 'blocks-tutorial-editor', BLOCKS_TUTORIALS_PLUGIN_URL . 'build/index.css', array(), $asset_file['version'] );
		wp_register_style( 'blocks-tutorial-front', BLOCKS_TUTORIALS_PLUGIN_URL . 'build/style-index.css', array(), $asset_file['version'] );
	}

	public function register_blocks() {
		register_block_type( 'millan-dev/highlight', array(
			'textdomain'    => 'blocks-tutorial-series',
			'editor_script' => 'blocks-tutorial-editor',
			'editor_style'  => 'blocks-tutorial-editor',
			'style'         => 'blocks-tutorial-front'
		) );

		register_block_type( 'millan-dev/q-and-a', array(
			'textdomain'    => 'blocks-tutorial-series',
			'editor_script' => 'blocks-tutorial-editor',
			'editor_style'  => 'blocks-tutorial-editor',
			'style'         => 'blocks-tutorial-front'
		) );
	}
}
