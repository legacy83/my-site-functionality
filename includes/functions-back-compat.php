<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Add Admin Notices
------------------------------------------------------- */
add_action( 'admin_notices', 'my_site_functionality_upgrade_notice' );


/**
 * Adds a message for unsuccessful minimal requirements check.
 */
function my_site_functionality_upgrade_notice()
{
    $message = __( 'Minimal requirements for the Site Functionality plugin has not been satisfied.' );
    $message .= __( '&nbsp;Please upgrade PHP and WordPress or deactivate the plugin.' );
    printf( '<div class="error"><p>%s</p></div>', $message );
}