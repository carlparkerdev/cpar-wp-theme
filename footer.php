<?php

/*
 *   CPAR THEME: WordPress Footer
 *
 *   Author:   Carl A. Parker
 *   Website:  https://CarlParker.dev
*/

if ( ! defined( 'ABSPATH' ) ) : exit; endif; // SILENCE IS GOLDEN ?>


<?php get_template_part( CPAR_TEMPLATES . 'panel' ); ?>

<?php wp_footer(); ?>

<?php do_action( 'cpar_footer' ); ?>

</body>

</html>