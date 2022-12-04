<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage bibleinterpretation.org
 * @since bibleinterpretation.org 1.0
 */
?>
<div class="footersec cmnsecpad">
		<div class="container">
			<div class="text-center">
			<img src="<?PHP echo get_template_directory_uri()?>/assets/images/logo.png" class="img-fluid"></div>
			 <?php 
				$args = array(
					'menu'            => 'footer-menu',
					'container'       => 'div',
					'container_class' => 'text-center footerlink',
					'container_id'    => '',
					'menu_class'      => 'list-inline',
					'menu_id'         => '',
					'echo'            => true,
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'item_spacing'    => 'preserve',
					'depth'           => 0,
					'walker'          => '',
					'theme_location'  => 'footer-menu',
				);
				wp_nav_menu($args);
				?>
			<!--<div class="text-center footerlink">
				<ul class="list-inline">
					<li class="list-inline-item"><a href="">Home</a></li>
					<li class="list-inline-item"><a href="">Mattew</a></li>
					<li class="list-inline-item"><a href="">Mark</a></li>
					<li class="list-inline-item"><a href="">Luke</a></li>
					<li class="list-inline-item"><a href="">John</a></li>
					<li class="list-inline-item"><a href="">Acts</a></li>
				</ul>
			</div>-->
		</div>
		<hr>
		<div class="container">
			<div class="text-center footertext">&copy;Bibleinterpretation.org. All Rights Reserved 2022</div>
		</div>
	</div>
	
	<script type="text/javascript" src="<?PHP echo get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>