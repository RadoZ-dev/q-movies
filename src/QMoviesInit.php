<?php

namespace QMovies;

use QMovies\Setup\PostType;
use QMovies\Setup\MetaBox;
use QMovies\Traits\SingletonTrait;

if ( ! defined( 'ABSPATH' ) ) 
{
    exit;
} // Exit if accessed directly

class QMoviesInit 
{
    use SingletonTrait;

    public function __construct() 
    {
        $this->init();
    }
  
    private function init() 
    {
        PostType::getInstance();
        MetaBox::getInstance();
    }
}