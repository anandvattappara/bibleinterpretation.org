<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage  bibleinterpretation.org
 * @since  bibleinterpretation.org 1.0
 */
get_header();
$bg = "";
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>

<div class="topbar clearfix">
		<div class="container"><div class="topbartext"><?PHP echo of_get_option('theme_home_phone');?>&nbsp; | &nbsp;<?PHP echo of_get_option('theme_home_email');?></div></div>
	</div>
	<div class="bg-image">
		<div id="intro">
	<div class="container">
		<nav class="navbar navbar-expand-lg bg-light navbarbg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="img-fluid" src="<?PHP echo get_template_directory_uri()?>/assets/images/logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon togicon"></span>
    </button>
	
	 <?php 
				$args = array(
					'menu'            => 'header-menu',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0 navtext',
					'menu_id'         => 'topMenu',
					'echo'            => true,
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'item_spacing'    => 'preserve',
					'depth'           => 0,
					'walker'          => '',
					'theme_location'  => 'header-menu',
				);
				wp_nav_menu($args);
				?>
	
    
  </div>
</nav>
		<div class="mask bannermask">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white bannertxt">
			 <h1 class="fa-pull-left clearfix"><?PHP the_title(); ?></h1>
          </div>
        </div>
      </div>
	</div>
			<hr class="headerhr">
	</div>
	</div>
	
	<div class="whitebgarea cmnsecpad">
		<div class="container">
				<div class="col-lg-12">
				<?PHP
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
				if($featured_img_url!=""){
					echo '<div class="featuredimage"><img src="'.$featured_img_url.'" class="img-fluid" alt="Featured Image" /></div>';
				}
				?>
					
					<div class="cmntext"><?PHP the_content(); ?></div>
			</div>
		</div>
	</div>

<?php
	}
}
get_footer();
?>