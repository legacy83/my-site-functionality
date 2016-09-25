<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Site\Functionality;

/* Closed Comments and Pings
------------------------------------------------------- */
add_action( 'plugins_loaded', function () {
    add_filter( 'comments_open', '__return_false' );
    add_filter( 'pings_open', '__return_false' );
} );