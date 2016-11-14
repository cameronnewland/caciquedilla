<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>

<footer class="dark-grey-bg">
	<div class="row">
		<div class="column small-12 large-8">
			<ul>
				<li>
					<a href="/recipes">Recipes</a>
				</li>
				<li>
					<a href="/quesadilla-101">Quesadilla 101</a>
				</li>
				<li>
					<a href="/cacique-cheeses">Cacique Cheeses</a>
				</li>
				<li>
					<a href="/submit-your-own">Submit Your Own</a>
				</li>
			</ul>
		</div>
		<div class="column small-12 large-4">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-logo.png">
			</a>
		</div>
	</div>
</footer>
	<?php do_action( 'foundationpress_layout_end' ); ?>

	</div>
</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
