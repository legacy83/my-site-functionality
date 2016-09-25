<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Class My_Site_Functionality_Back_Compat
 *
 */
class My_Site_Functionality_Back_Compat
{
    /**
     * Deactivate the functionality plugin.
     */
    public function deactivate_plugin()
    {
        if ( defined( 'MY_SITE_FUNCTIONALITY_PLUGIN' ) && MY_SITE_FUNCTIONALITY_PLUGIN ) {
            deactivate_plugins( MY_SITE_FUNCTIONALITY_PLUGIN );
        }
    }

    /**
     * Hide the plugin activated notice.
     */
    public function hide_activated_notice()
    {
        if ( isset( $_GET[ 'activate' ] ) ) {
            unset( $_GET[ 'activate' ] );
        }
    }

    /**
     * Display reasons why plugin could not be activated.
     */
    public function show_not_activated_notice()
    {
        $message = __( 'Plugin <strong>not activated</strong>. Minimal requirements for the plugin has not been satisfied.' );
        printf( '<div class="error"><p>%s</p></div>', $message );
    }

    /**
     * Check minimal requirements and return if it's safe.
     *
     * @return bool
     */
    public function is_minimal_requirements_safe()
    {
        $minimal_requirements = TRUE;
        $minimal_requirements = $minimal_requirements && version_compare( PHP_VERSION, '5.6', '>=' );
        $minimal_requirements = $minimal_requirements && version_compare( $GLOBALS[ 'wp_version' ], '4.6', '>=' );
        return $minimal_requirements;
    }
}