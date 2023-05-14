<?php

namespace QMovies\Blocks\QMFavoriteQuote;

use QMovies\Traits\SingletonTrait;

if ( ! defined( 'ABSPATH' ) )
{
    exit;
} // Exit if accessed directly

class QMFavoriteQuote
{
	use SingletonTrait;

	public function __construct()
	{
		add_action( 'init', [ $this, 'register_block' ] );
	}

	public function register_block()
	{
		register_block_type( __DIR__ . '/build', [
			'render_callback' => [ $this, 'qm_favorite_quote_render' ]
		] );
	}

	public function qm_favorite_quote_render( $attributes )
	{
		$quote  = '<div class="qm-favorite-movie-quote">';
		$quote .= '<p ' . get_block_wrapper_attributes() . '>' . esc_html( $attributes[ 'quote' ] ) . '</p>';
		$quote .= '</div>';

		return $quote;
	}
}

