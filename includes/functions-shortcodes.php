<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Site\Functionality;

/* Add Shortcodes
------------------------------------------------------- */
add_action( 'init', function () {
    add_shortcode( 'hello', __NAMESPACE__ . '\hello_shortcode' );
} );

/**
 * Hello Shortcode.
 *
 * @param array $atts
 * @param null  $content
 *
 * @return string
 */
function hello_shortcode( $atts, $content = NULL )
{
    $atts = shortcode_atts( array(
        'message' => 'Hello',
    ), $atts );

    ob_start();
    echo "<strong>";
    echo "{$atts['message']}, {$content}!";
    echo "</strong>";
    $display = ob_get_clean();

    return do_shortcode( $display );
}