<?php

/*
Plugin Name:       Blocks Tutorials Series
Plugin URI:        https://millan.dev/
Description:       Collection of blocks created for the blocks development tutorials on Millan.dev.
Author:            Milan Petrovic
Author URI:        https://millan.dev/
Text Domain:       blocks-tutorial-series
Version:           1.0.0
Requires at least: 5.6
Tested up to:      5.9
Requires PHP:      7.0
License:           GPLv3 or later
License URI:       https://www.gnu.org/licenses/gpl-3.0.html

== Copyright ==
Copyright 2008 - 2021 Milan Petrovic (email: support@dev4press.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>
*/

use Dev4Press\Plugin\BlocksTutorialSeries\Basic\Plugin;

const BLOCKS_TUTORIALS_VERSION     = '1.0.0';
const BLOCKS_TUTORIALS_FILE        = __FILE__;
const BLOCKS_TUTORIALS_PLUGIN_PATH = __DIR__ . '/';

define( 'BLOCKS_TUTORIALS_PLUGIN_URL', plugins_url( '/', BLOCKS_TUTORIALS_FILE ) );

require_once( BLOCKS_TUTORIALS_PLUGIN_PATH . 'core/autoload.php' );

Plugin::instance();
