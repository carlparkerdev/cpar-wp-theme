<?php

/*
 *   CPAR THEME: WordPress Functionality
 *
 *   Author:   Carl A. Parker
 *   Website:  https://CarlParker.dev
*/

if ( ! defined( 'ABSPATH' ) ) : exit; endif; // SILENCE IS GOLDEN


/*
 *   THEME SETUP
 *   configure theme settings
*/

     add_action( 'after_setup_theme', 'cpar_theme_setup' );

     function cpar_theme_setup() {

          // FEATURES

          add_post_type_support( 'page', 'excerpt' );

          add_theme_support( 'align-wide' );
          add_theme_support( 'automatic-feed-links' );
          add_theme_support( 'block-template-parts' );
          add_theme_support( 'custom-units', 'rem' );
          add_theme_support( 'editor-styles' );
          add_theme_support( 'html5' , array(

               'search-form',
               'comment-form',
               'comment-list',
               'caption',
               'style',
               'script'

          ) );

          add_theme_support( 'post-thumbnails' );
          add_theme_support( 'responsive-embeds' );
          add_theme_support( 'title-tag' );

          remove_theme_support( 'core-block-patterns' );

          // NAV MENUS

          register_nav_menus( array(

               'cpar-menu-footer-default'    => 'Default Footer',
               'cpar-menu-header-default'    => 'Default Header',
               'cpar-menu-panel-default'     => 'Default Panel'

          ) );

          // POST THUMBNAIL

          set_post_thumbnail_size( 1920, 1080 );

     }