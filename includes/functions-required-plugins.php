<?php
/**
 * @package    My\Site\Functionality
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2016, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
namespace My\Site\Functionality;

/* Register the Recommended Plugins
------------------------------------------------------- */
add_action( 'tgmpa_register', function () {
    tgmpa( array(
        array(
            'name' => 'Regenerate Thumbnails',
            'slug' => 'regenerate-thumbnails',
            'required' => FALSE,
        ),
        array(
            'name' => 'WordPress Importer',
            'slug' => 'wordpress-importer',
            'required' => FALSE,
        ),
    ) );
} );