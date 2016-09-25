<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Deactivate Itself
------------------------------------------------------- */
add_action( 'admin_init', 'my_site_functionality_deactivate_self' );

/* Add Admin Notices
------------------------------------------------------- */
add_action( 'admin_notices', 'my_site_functionality_upgrade_notice' );

/**
 * Deactivate the current plugin.
 */
function my_site_functionality_deactivate_self()
{
    deactivate_plugins( MY_SITE_FUNCTIONALITY_PLUGIN );
}

/**
 * Adds a message for unsuccessful minimal requirements check.
 */
function my_site_functionality_upgrade_notice()
{
    $message = __( 'Plugin <strong>not activated</strong>. Minimal requirements for the plugin has not been satisfied.' );
    printf( '<div class="error"><p>%s</p></div>', $message );

    if ( isset( $_GET[ 'activate' ] ) ) {
        unset( $_GET[ 'activate' ] );
    }
}