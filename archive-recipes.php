<?php
/**
 * The Recipes Index template
 *
 */

get_header();
get_template_part( 'parts/recipes', 'slider' );
get_template_part( 'parts/recipes', 'archive-filters' );
?>
<style>
.plupload_header_text {
    font: normal 12px "DIN OT Bold",sans-serif!important;
}

.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
    border: 1px solid #d3d3d3;
    background: #fff9e9!important;
    font-weight: normal;
    color: #555;
}
.ui-widget-content {
    border: 1px solid #aaa;
    background: #fff;
    color: #222;
}

.plupload_wrapper {
    font: normal 11px "DIN OT Bold",sans-serif!important;
    width: 100%;
    min-width: 520px;
    line-height: 12px;
}

.ui-widget-header {
    border: 1px solid #aaa;
    background: #fff9e9!important;
    color: #222;
    font-weight: bold;
}

.gform_footer {margin-top:10px!important}
</style>
<a class="recipes_archive_submit_a_recipe hide-for-large-up pea-green-bg text-center" data-reveal-id="submit-a-recipe">
	<h2 class="underlined">SUBMIT YOUR RECIPE</h2>
</a>
<?php get_template_part( 'parts/recipes', 'content' ); ?>
<div class="text-center load-more-button-container">
	<a class="load-more-button burford">LOAD MORE</a>
</div>
<?php get_footer(); ?>
