<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$wp_editor_settings = array(
        'wpautop' => true, // Default
        'textarea_rows' => 15,
        'tinymce' => array( 
            'plugins' => 'fullscreen,wordpress,wplink, textcolor'
        ));
		
		/*$wp_editor_settings = array(
        'wpautop'             => true,
        'media_buttons'       => true,
        'default_editor'      => '',
        'drag_drop_upload'    => false,
        'textarea_rows'       => 20,
        'tabindex'            => '',
        'tabfocus_elements'   => ':prev,:next',
        'editor_css'          => '',
        'editor_class'        => '',
        'teeny'               => false,
        'dfw'                 => false,
        '_content_editor_dfw' => false,
        'tinymce'             => true,
        'quicktags'           => true,
		'tinymce' => array( 
            'plugins' => 'fullscreen,wordpress,wplink, textcolor'
        ));*/

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
	$theamurl = get_template_directory_uri();

	$options[] = array(
		'name' => __('Home Page', 'options_check'),
		'type' => 'heading');
		
   /*$options[] = array(
		'name' => __('Purpose', 'options_check'),
		'desc' => __('Purpose section description.', 'options_check'),
		'id' => 'kna_aboutus_purpose',
		'std' => '',
		'type' => 'editor',
        'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Vision', 'options_check'),
		'desc' => __('Vision section description.', 'options_check'),
		'id' => 'kna_aboutus_vision',
		'std' => '',
		'type' => 'editor',
        'settings' => $wp_editor_settings );
	$options[] = array(
		'name' => __('Mission', 'options_check'),
		'desc' => __('Mission section description.', 'options_check'),
		'id' => 'kna_aboutus_mission',
		'std' => '',
		'type' => 'editor',
        'settings' => $wp_editor_settings );*/
		
	$options[] = array(
		'name' => __('Home Page Intro Title', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_intro_title',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Home Page Introduction', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_intro_desc',
		'std' => '',
		'type' => 'editor',
        'settings' => $wp_editor_settings );

	
	$options[] = array(
		'name' => __('Home Page Book Title', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_book_title',
		'std' => '',
		'type' => 'text');
			
	$options[] = array(
		'name' => __('Home Page Book Introduction', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_book_desc',
		'std' => '',
		'type' => 'editor',
        'settings' => $wp_editor_settings );

	
		
	$options[] = array(
		'name' => __('Home Page Book URL', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_book_url',
		'std' => '',
		'type' => 'text');
		
		
	
		
	$options[] = array(
		'name' => __('Home Page Bottom Text', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_bottom_desc',
		'std' => '',
		'type' => 'editor',
        'settings' => $wp_editor_settings );
	$options[] = array(
		'name' => __('Phone', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_phone',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Phone', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_home_email',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Related Websites', 'options_check'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('#1 Website Name', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_name1',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('#1 Website URL', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_url1',
		'std' => '',
		'type' => 'text');		
	$options[] = array(
		'name' => __('#1 Website Logo', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_logo1',
		'std' =>  '',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('#2 Website Name', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_name2',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('#2 Website URL', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_url2',
		'std' => '',
		'type' => 'text');		
	$options[] = array(
		'name' => __('#2 Website Logo', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_logo2',
		'std' =>  '',
		'type' => 'upload');	
	
	$options[] = array(
		'name' => __('#3 Website Name', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_name3',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('#3 Website URL', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_url3',
		'std' => '',
		'type' => 'text');		
	$options[] = array(
		'name' => __('#3 Website Logo', 'options_check'),
		'desc' => __('', ''),
		'id' => 'theme_footer_related_web_logo3',
		'std' =>  '',
		'type' => 'upload');	
		
		
	return $options;
}
