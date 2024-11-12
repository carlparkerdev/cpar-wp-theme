<?php

/*
 *   CPAR THEME: Templates (Default Header)
 *
 *   Author:   Carl A. Parker
 *   Website:  https://CarlParker.dev
*/

if ( ! defined( 'ABSPATH' ) ) : exit; endif; // SILENCE IS GOLDEN ?>


<footer data-cpar-region="footer">

     <div class="footer-copyright">

          <?php echo '    &copy; '. date( 'Y' ) .' ' . get_bloginfo( 'name' ); ?>

     </div>

     <div class="footer-credits">

          <a href="#" target="_blank">

               <?php echo __( 'a Carl Parker website', 'cpar-wp-theme' ); ?>

          </a>

     </div>

</footer>