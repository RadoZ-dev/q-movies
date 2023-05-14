<?php
/*
Plugin Name:  Q Movies
Plugin URI:   https://github.com/RadoZ-dev/q-movies
Description:  Movies custom post type registration plugin
Version:      1.0.0
Author:       Radoslav Zdravkovic
Author URI:   https://github.com/RadoZ-dev/
Text Domain:  wp-plugin-q-movies
*/

use QMovies\QMoviesInit;

define( 'QM_PATH',  plugin_dir_path( __FILE__ ) );

require 'vendor/autoload.php';

add_action( 'plugins_loaded', function() {
    QMoviesInit::getInstance();
} );

