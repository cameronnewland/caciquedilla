<?php
/**
 * The homepage recipes template
 */
?>
<div class="cacique-panel white-bg">
	<div class="row">
		<div class="column small-12 large-8">
			<p class="hide-for-large-up">Whether it's classic, fusion, or gourmet, find a quesadilla recipe for any occasion.</p>
			<p class="show-for-large-up">Whether it's classic, fusion, or gourmet, find a quesadilla<br>recipe for any occasion.</p>
		</div>
		<div class="column small-12 large-4">
			<a class="button red-button white" href="/recipes">BROWSE RECIPES</a>
		</div>
	</div>
</div>
<section class="homepage_recipes">
<?php
$args = array(
	'post_type' => 'recipes',
	'orderby' => 'rand',
	'posts_per_page' => 8
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
			$recipe_image = get_field('inset_image');
			if( !empty($recipe_image) ) {
				$recipe_image_url =  $recipe_image['url'];	
			} else {
				$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
			} ?>
	<div class="column small-6 large-3 homepage_recipes_recipe" style="background-image:url(<?php echo $recipe_image_url; ?>);">
		<a href="<?php the_permalink(); ?>" class="recipes_color_overlay absolute-block flex-block">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/recipes/cross.png">
				<div class="recipes-recipe-title"><?php the_title(); ?></div>
				<div class="recipes-view-recipe">VIEW RECIPE<span></span></div>
			</div>
		</a>
	</div>
<?php }
}
/* Restore original Post Data */
wp_reset_postdata(); ?>
	<div class="clearfix"></div>
</section>
<div class="clearfix"></div>