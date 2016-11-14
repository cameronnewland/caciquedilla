<?php
/**
 * The Quesadilla 101 page template
 */
get_header();
get_template_part( 'parts/quesadilla-101', 'hero' );
get_template_part( 'parts/quesadilla-101', 'content' );
get_template_part( 'parts/homepage', 'two-up' );
get_footer();
?>