<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Site\Functionality;

/* Theme Extensions
------------------------------------------------------- */
call_user_func( function () {
    $stylesheet_dir = trailingslashit( get_stylesheet_directory() );
    if ( file_exists( "{$stylesheet_dir}functions-ext.php" ) ) {
        require_once( "{$stylesheet_dir}functions-ext.php" );
    }
} );