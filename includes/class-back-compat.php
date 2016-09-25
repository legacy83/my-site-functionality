<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Class My_Site_Functionality_Back_Compat
 */
final class My_Site_Functionality_Back_Compat
{
    /**
     * The constructor.
     */
    private function __construct()
    {
        // ...
    }

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
     * Let the user know the plugin could not be activated.
     */
    public function show_not_activated_notice()
    {
        $message = __( 'Plugin <strong>not activated</strong>. Minimal requirements for the plugin has not been satisfied.' );
        printf( '<div class="error"><p>%s</p></div>', $message );
    }

    /**
     * Check minimal requirements and returns if it's safe to continue
     * with the plugin loading.
     *
     * @return bool
     */
    public static function safe()
    {
        $requirements = TRUE;
        $requirements = $requirements && version_compare( PHP_VERSION, '5.5', '>=' );
        $requirements = $requirements && version_compare( $GLOBALS[ 'wp_version' ], '4.6', '>=' );
        return $requirements;
    }

    /**
     * Check minimal requirements and returns if it's unsafe to continue
     * with the plugin loading.
     *
     * @return bool
     */
    public static function unsafe()
    {
        return !self::safe();
    }

    /**
     * Make the plugin fails gracefully.
     */
    public static function fails_gracefully()
    {
        $back_compat = new self();
        add_action( 'admin_init', array( $back_compat, 'deactivate_plugin' ) );
        add_action( 'admin_notices', array( $back_compat, 'hide_activated_notice' ) );
        add_action( 'admin_notices', array( $back_compat, 'show_not_activated_notice' ) );
    }
}