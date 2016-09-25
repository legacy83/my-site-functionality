<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Site\Functionality;

/* Disallow File Changes
------------------------------------------------------- */
add_action( 'plugins_loaded', function () {
    if ( !function_exists( 'pluginception_create_plugin' ) ) {
        defined( 'DISALLOW_FILE_EDIT' ) or define( 'DISALLOW_FILE_EDIT', TRUE );
        defined( 'DISALLOW_FILE_MODS' ) or define( 'DISALLOW_FILE_MODS', TRUE );
        defined( 'AUTOMATIC_UPDATER_DISABLED' ) or define( 'AUTOMATIC_UPDATER_DISABLED', TRUE );
    }
} );

/* Disallow Pings and Comments
------------------------------------------------------- */
add_action( 'plugins_loaded', function () {
    add_filter( 'comments_open', '__return_false' );
    add_filter( 'pings_open', '__return_false' );
} );

/* Jetpack Developer Friendly by default
------------------------------------------------------- */
add_action( 'plugins_loaded', function () {
    defined( 'JETPACK_DEV_DEBUG' ) or define( 'JETPACK_DEV_DEBUG', TRUE );
    add_filter( 'jetpack_get_default_modules', '__return_empty_array', 99 );
} );