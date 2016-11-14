<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="top-bar-zero-height-container">
	<div class="topbar collapsed">
		<div class="top-right-hamburger">
			<div></div>
		</div>
		<div class="clearfix"></div>
		<div class="menu-container">
			<ul>
				<li>
					<a <?php if( is_front_page() ){ echo 'class="active" '; } ?>href="/club/">HOME</a>
				</li>
				<li>
					<a <?php if( is_post_type_archive('recipes') ){ echo 'class="active" '; } ?>href="/club/recipes">RECIPES</a>
				</li>
				<li>
					<a <?php if( is_page('Quesadilla 101') ){ echo 'class="active" '; } ?>href="/club/quesadilla-101">QUESADILLA 101</a>
				</li>
				<li>
					<a <?php if( is_archive('products') ){ echo 'class="active" '; } ?>href="/club/products">CACIQUE PRODUCTS</a>
				</li>
				<li>
					<a <?php if( is_page('Join The Club') ){ echo 'class="active" '; } ?>href="/club/join-the-club">JOIN THE CLUB</a>
				</li>
				<li>
					<a <?php if( is_page('Cacique Story') ){ echo 'class="active" '; } ?>href="/club/cacique-story">CACIQUE STORY</a>
				</li>
			</ul>
		</div>
	</div>
</div>