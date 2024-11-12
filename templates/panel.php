<?php

/*
 *   CPAR THEME: Templates (Default Panel)
 *
 *   Author:   Carl A. Parker
 *   Website:  https://CarlParker.dev
*/

if ( ! defined( 'ABSPATH' ) ) : exit; endif; // SILENCE IS GOLDEN ?>


<aside data-cpar-region="panel">

     <div class="cpar-panel-container">

          <div class="cpar-panel-close">

               <i class="fa-solid fa-xmark"></i>

          </div>

          <div class="cpar-panel-body">

               <?php

                    wp_nav_menu( array(

                         'menu'                  => 'Default Panel',
                         'menu_id'               => '',
                         'menu_class'            => 'panel-menu',
                         'container'             => 'ul',
                         'container_id'          => '',
                         'container_aria_label'  => ''

                    ) );

               ?>

          </div>

     </div>

</aside>