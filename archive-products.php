<?php
/**
 * The Products Index template
 *
 */
get_header();
get_template_part('parts/products', 'hero');
get_template_part('parts/products', 'content');
get_template_part( 'parts/homepage', 'two-up' );
get_footer(); ?>
