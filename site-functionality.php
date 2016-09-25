<?php
/**
 * Plugin Name: My/Site/Functionality
 * Description: The My/Site/Functionality plugin.
 *
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * Version: 0.1.0
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
define( 'MY_SITE_FUNCTIONALITY_VERSION', '0.1.0' );

/* Back Compatibility
------------------------------------------------------- */
require_once( dirname( __FILE__ ) . '/includes/class-back-compat.php' );
if ( My_Site_Functionality_Back_Compat::unsafe() ) {
    My_Site_Functionality_Back_Compat::fails_gracefully();
    return;
}

/* Load Plugin Files
------------------------------------------------------- */
require_once( dirname( __FILE__ ) . '/includes/3rd-party/class-tgm-plugin-activation.php' );
require_once( dirname( __FILE__ ) . '/includes/functions.php' );
require_once( dirname( __FILE__ ) . '/includes/functions-closed-comments.php' );
require_once( dirname( __FILE__ ) . '/includes/functions-disallow-site-changes.php' );
require_once( dirname( __FILE__ ) . '/includes/functions-jetpack-friendly.php' );
require_once( dirname( __FILE__ ) . '/includes/functions-recommended-plugins.php' );
require_once( dirname( __FILE__ ) . '/includes/functions-shortcodes.php' );