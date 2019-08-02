<?php 

/**
 * Register Widget Areas
 * 
 * @package   Scratch Genesis
 * @author    Wes Reed <wes@wesreed.co>
 * @link      https://htn-consulting.com
 * @copyright 2019 Wes Reed
 * @license   MIT
 * 
 */


//* Register front page widget area
genesis_register_sidebar( array(
    'id'            => 'home-welcome',
    'name'          => __( 'Home Welcome', 'scratch-genesis' ),
    'description'   => __( 'This is a home widget area that will show on the front page', 'scratch-genesis' ),
) );

//* Register call to action widget area
genesis_register_sidebar( array(
    'id'            => 'call-to-action',
    'name'          => __( 'Call To Action', 'scratch-genesis' ),
    'description'   => __( 'This is a call to action widget area that will show on the front page', 'scratch-genesis' ),
    ) );