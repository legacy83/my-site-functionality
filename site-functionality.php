<?php
/**
 * Plugin Name: My/Site/Functionality
 * Description: The My/Site/Functionality plugin.
 *
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   My\Site\Functionality
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2016, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Minimal Requirements
------------------------------------------------------- */
$minimal_requirements = TRUE;
$minimal_requirements = $minimal_requirements && version_compare( PHP_VERSION, '5.5', '>=' );
$minimal_requirements = $minimal_requirements && version_compare( $GLOBALS[ 'wp_version' ], '4.6', '>=' );

/* Gracefully Fail
------------------------------------------------------- */
if ( !$minimal_requirements ) {
    add_action( 'admin_notices', create_function( '', "echo '<div class=\"error\"><p>" . __( 'Plugin Name requires PHP 5.3 to function properly. Please upgrade PHP or deactivate Plugin Name.', 'plugin-name' ) . "</p></div>';" ) );
    return;
}

/* Load Plugin Files
------------------------------------------------------- */
if ( $minimal_requirements ) {
    require_once( dirname( __FILE__ ) . '/3rd-party/class-tgm-plugin-activation.php' );
    require_once( dirname( __FILE__ ) . '/includes/functions.php' );
    require_once( dirname( __FILE__ ) . '/includes/functions-jetpack.php' );
    require_once( dirname( __FILE__ ) . '/includes/functions-required-plugins.php' );
    require_once( dirname( __FILE__ ) . '/includes/functions-shortcodes.php' );
}