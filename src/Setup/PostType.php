<?php 

namespace QMovies\Setup;

use QMovies\Traits\SingletonTrait;

if ( ! defined( 'ABSPATH' ) ) 
{
    exit;
} // Exit if accessed directly

class PostType 
{
    use SingletonTrait;

    public function __construct() 
    {
        add_action('init', [ $this, 'q_movie_post_type' ] );
    }

    public function q_movie_post_type() 
    {
        register_post_type( 'movies',
            array(
                'labels'       => array(
                    'name'          => __( 'Movies', 'wp-plugin-q-movies' ),
                    'singular_name' => __( 'Movie', 'wp-plugin-q-movies' ),
                ),
                'public'       => true,
                'has_archive'  => true,
                'show_in_rest' => true,
                'menu_icon'    => 'dashicons-video-alt2',
                'supports' => array( 'qm_title', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
            )
        );
    }
}