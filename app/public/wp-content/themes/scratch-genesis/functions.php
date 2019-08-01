<?php 

/**
 * Theme customizations
 * 
 * @package   Scratch Genesis
 * @author    Wes Reed <wes@wesreed.co>
 * @link      https://htn-consulting.com
 * @copyright 2019 Wes Reed
 * @license   MIT
 * 
 */

 //Load child theme textdomain
load_child_theme_textdomain('scratch-genesis'); 
 
 

 add_action('genesis_setup', 'scratch_genesis_setup');
 /**
  * Theme setup.
  *
  * Attach all of the site-wide funtions to the correct hooks and filters. All the functions themselves are defined below this setup function
  *
  * @since 1.0.0
  */

 function scratch_genesis_setup() {

    //Define theme constants
    define( 'CHILD_THEME_NAME', 'Scratch Geneis' );
    define( 'CHILD_THEME_URL', 'https://github.com/wesareed/scratch_geneis' );
    define( 'CHILD_THEME_VERSION', '1.0.0' );

    //Add HTML5 markup structure
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    //Add viewport meta tag for mobile browsers
    add_theme_support( 'genesis-responsive-viewport' );

    //Add theme support for accessibility
    add_theme_support(
        'genesis-accessibility',
        array(
            'drop-down-menu',
            'headings',
            'rems',
            'search-form',
            'skip-links',
        )
    );

    //Add theme support for footer widgets
    add_theme_support( 'genesis-footer-widgets', 3 );

 }