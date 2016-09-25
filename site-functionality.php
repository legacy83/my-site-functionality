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

/* Constants
------------------------------------------------------- */
define( 'MY_SITE_FUNCTIONALITY_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'MY_SITE_FUNCTIONALITY_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'MY_SITE_FUNCTIONALITY_FILE', __FILE__ );
define( 'MY_SITE_FUNCTIONALITY_PLUGIN', plugin_basename( __FILE__ ) );
define( 'MY_SITE_FUNCTIONALITY_VERSION', strtotime( 'now' ) );

/* Minimal Requirements
------------------------------------------------------- */
$minimal_requirements = TRUE;
$minimal_requirements = $minimal_requirements && version_compare( PHP_VERSION, '5.6', '>=' );
$minimal_requirements = $minimal_requirements && version_compare( $GLOBALS[ 'wp_version' ], '4.6', '>=' );

/* Gracefully Fail
------------------------------------------------------- */
if ( !$minimal_requirements ) {
    require_once( dirname( __FILE__ ) . '/includes/class-back-compat.php' );
    $back_compat = new My_Site_Functionality_Back_Compat();
    add_action( 'admin_init', array( $back_compat, 'deactivate_plugin' ) );
    add_action( 'admin_notices', array( $back_compat, 'hide_activated_notice' ) );
    add_action( 'admin_notices', array( $back_compat, 'show_not_activated_notice' ) );
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