<?php 

/**
 * Front Page Templae
 * 
 * @package   Scratch Genesis
 * @author    Wes Reed <wes@wesreed.co>
 * @link      https://htn-consulting.com
 * @copyright 2019 Wes Reed
 * @license   MIT
 * 
 */

add_action( 'genesis_meta', 'scratch_genesis_home_page_setup');


function scratch_genesis_home_page_setup() {

    $home_sidebars = array(
        'home_welcome'   => is_active_sidebar( 'home-welcome' ),
        'call_to_action' => is_active_sidebar( 'call-to-action' ), 
    );

    //Return early if no sidebars are active
    if( ! in_array( true, $home_sidebars)) {
        return;
    }

    //Add home welcome area if "Home Welcome" widget area is active
    if ($home_sidebars['home_welcome']) {
        add_action( 'genesis_after_header', 'scratch_genesis_add_home_welcome' );
    }

    //Add call to action area if "Call To Action" widget area is active
    if ($home_sidebars['call_to_action']) {
        add_action( 'genesis_after_header', 'scratch_genesis_add_call_to_action' );
    }

    // Force full-width-content layout setting.
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	// Remove posts.
	remove_action( 'genesis_loop', 'genesis_do_loop' );

}


 /**
  *
  * Display content for the "Home Welcome" section
  *
  * @since 1.0.0
  */

function scratch_genesis_add_home_welcome() {
    genesis_widget_area( 'home-welcome',
        array(
            'before' => '<div class="home-welcome"><div class="wrap">',
            'after'  => '</div></div>',
        )

    );
}


 /**
  *
  * Display content for the "Call To Action" section
  *
  * @since 1.0.0
  */

  function scratch_genesis_add_call_to_action() {
    genesis_widget_area( 'call-to-action',
        array(
            'before' => '<div class="call-to-action"><div class="wrap">',
            'after'  => '</div></div>',
        )

    );
}

 genesis();

