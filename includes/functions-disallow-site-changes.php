<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Site\Functionality;

/* Disallow Site Changes
------------------------------------------------------- */
add_action( 'plugins_loaded', function () {
    if ( is_site_changes_disallowed() ) {
        defined( 'DISALLOW_FILE_EDIT' ) or define( 'DISALLOW_FILE_EDIT', TRUE );
        defined( 'DISALLOW_FILE_MODS' ) or define( 'DISALLOW_FILE_MODS', TRUE );
        defined( 'AUTOMATIC_UPDATER_DISABLED' ) or define( 'AUTOMATIC_UPDATER_DISABLED', TRUE );
    }
} );

/**
 * Is changing the current site disallowed?
 *
 * @return bool
 */
function is_site_changes_disallowed()
{
    // Oops, is it an easter egg?
    return !function_exists( 'pluginception_create_plugin' );
}