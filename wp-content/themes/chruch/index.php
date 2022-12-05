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
            <h1 class="fa-pull-left clearfix">Bible</h1><div id="parallelogram" class="clearfix"><h1 class="ttrans">Interpretation</h1></div>
			  <div class="clearfix headborderbanner"><img src="<?PHP echo get_template_directory_uri()?>/assets/images/borderwd.png"></div>
            <h5 class="mb-4 bannersubtxt"><p>By Fr. Abraham Mutholath</p><p>A project of Fr. Abraham Mutholath Foundation NFP, USA</p></h5>
          </div>
        </div>
      </div>
	</div>
			<hr class="headerhr">
	</div>
	</div>
	
	<div class="aboutsec cmnsecpad">
		<div class="container text-center abtcontainer">
			<div class="cmnhead"><?PHP echo of_get_option('theme_home_intro_title');?></div>
			<div class="clearfix headborderbanner"><img src="<?PHP echo get_template_directory_uri()?>/assets/images/borderwd.png"></div>
			<div class="cmntext"><?PHP echo wpautop(of_get_option('theme_home_intro_desc'));?></div>
		</div>
	</div>
	<div class="joysec cmnsecpad clearfix">
		
			<div class="container clearfix">
				<div class="row">
				<div class="col-md-6 col-sm-12 clearfix">
				<div class="cmnhead"><?PHP echo wpautop(of_get_option('theme_home_book_title'));?></div>
				<div class="pad25"></div>	
				<div class="cmntext clearfix">
				<?PHP echo wpautop(of_get_option('theme_home_book_desc'));?>
				
				</div>
				</div>
				<div class="col-md-6 col-sm-12 clearfix">
					<a href="<?PHP echo of_get_option('theme_home_book_url');?>" target="_blank"><img src="<?PHP echo get_template_directory_uri()?>/assets/images/bannerone.png" class="img-fluid"></a>
				</div>
		        </div>
			</div>
		
	</div>
	<div class="col-12 clearfix"><img src="<?PHP echo get_template_directory_uri()?>/assets/images/book-release-joy1.jpg" class="img-fluid"></div>
	<div class="joysec cmnsecpad">
		<div class="container text-center joycontainer">
			
			<div class="cmntext"><?PHP echo of_get_option('theme_home_bottom_desc');?></div>
		</div>
	</div>
	<div class="joysec cmnsecpadbot">
		<div class="container text-center joycontainer">
			<div class="cmnhead">Related Websites</div>
			<div class="clearfix headborderbanner"><img src="<?PHP echo get_template_directory_uri()?>/assets/images/borderwd.png"></div>
			<div class="row">
			  <div class="col-md-10 offset-md-2">
				  <div class="row">
					  <div class="col-md-4 col-sm-12 text-center">
						  <div class="relwebimg"><a href="<?PHP echo of_get_option('theme_footer_related_web_url1');?>" target="_blank"><img src="<?PHP echo of_get_option('theme_footer_related_web_logo1');?>" class="img-fluid imgborder"><p><?PHP echo of_get_option('theme_footer_related_web_name1');?></p></a></div>
					  </div>
					  <div class="col-md-4 col-sm-12 text-center">
						  <div class="relwebimg"><a href="<?PHP echo of_get_option('theme_footer_related_web_url2');?>" target="_blank"><img src="<?PHP echo of_get_option('theme_footer_related_web_logo2');?>" class="img-fluid imgborder"><p><?PHP echo of_get_option('theme_footer_related_web_name2');?></p></a></div>
					  </div>
					  <div class="col-md-4 col-sm-12 text-center">
						  <div class="relwebimg"><a href="<?PHP echo of_get_option('theme_footer_related_web_url3');?>" target="_blank"><img src="<?PHP echo of_get_option('theme_footer_related_web_logo3');?>" class="img-fluid imgborder"><p><?PHP echo of_get_option('theme_footer_related_web_name3');?></p></a></div>
					  </div>
				  </div>	  
			  </div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	


<?php
get_footer();
?>