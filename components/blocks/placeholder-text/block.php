<?php

/*
 *   CPAR THEME: Components (Placeholder Text Block)
 *
 *   Author:   Carl A. Parker
 *   Website:  https://CarlParker.dev
*/

if ( ! defined( 'ABSPATH' ) ) : exit; endif; // SILENCE IS GOLDEN


/*
 *   BLOCK SETUP
 *   callback function to render front-end display and back-end preview
*/

     // TEMPLATE

     function cpar_blocks_placeholderText_template( $block, $post_id, $is_preview ) {

          // CONFIGURE SETTINGS

          $cparBlockATTR = cpar_acf_blocks_setup( $block, $post_id, $is_preview );

          // DISPLAY CONDITIONAL

          if ( $is_preview ) : // BACK-END

               cpar_acf_blocks_preview( $block );

          else : // FRONT-END

               echo '<section '. get_block_wrapper_attributes( $cparBlockATTR ) .'>';

                    echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>';

               echo '</section>';

          endif;

     }


/*
 *   BLOCK REGISTER
 *   https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
*/

     register_block_type( __DIR__ . '/block.json' );