<?php

/*
 *   CPAR THEME: Main Index Template
 *
 *   Author:   Carl A. Parker
 *   Website:  https://CarlParker.dev
*/

if ( ! defined( 'ABSPATH' ) ) : exit; endif; // SILENCE IS GOLDEN ?>


<?php get_header(); ?>

<div data-cpar-layout="default">

     <?php get_template_part( CPAR_TEMPLATES . 'header' ); ?>

     <main data-cpar-region="main">

          <?php the_content(); ?>

     </main>

     <?php get_template_part( CPAR_TEMPLATES . 'footer' ); ?>

</div>

<?php get_footer(); ?>