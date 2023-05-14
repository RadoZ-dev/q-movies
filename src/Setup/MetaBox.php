<?php 

namespace QMovies\Setup;

use QMovies\Traits\SingletonTrait;

if ( ! defined( 'ABSPATH' ) ) 
{
    exit;
} // Exit if accessed directly

class MetaBox 
{
    use SingletonTrait;
    
    public function __construct() 
    {
        add_action( 'add_meta_boxes', [ $this, 'qm_register_meta_box' ] );
        add_action( 'save_post', [ $this, 'qm_save_title' ] );        
    }

    public function qm_register_meta_box() 
    {
        add_meta_box( 'qm-meta-box', esc_html__( 'Q Movie Title', 'wp-plugin-q-movies' ), [ $this, 'qm_meta_box_render' ], 'movies' );
    }

    public function qm_meta_box_render() 
    {
        include QM_PATH . 'views/meta-boxes/qm-title.php';
    }

    public function qm_save_title( $post_id ) 
    {
        if ( ! current_user_can( 'edit_posts' ) ) 
            return;

        if ( $_POST[ 'movie_title' ] ) 
            update_post_meta( $post_id, 'movie_title', sanitize_text_field( $_POST[ 'movie_title' ] ) );
    }
}