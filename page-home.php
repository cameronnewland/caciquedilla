<?php
/**
 * The home page template
 */
get_header();
get_template_part( 'parts/homepage', 'hero' );
get_template_part( 'parts/homepage', 'recipes' );
get_template_part( 'parts/homepage', 'products' );
get_template_part( 'parts/homepage', 'quesadilla-101' );
get_template_part( 'parts/homepage', 'cacique-story' );
get_template_part( 'parts/homepage', 'two-up' );
get_footer();
?>