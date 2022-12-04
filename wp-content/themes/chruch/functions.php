<?php
/**
 * knanayology.org functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage bibleinterpretation.org
 * @since bibleinterpretation.org 1.0
 */

/**
 * HRM FITNESS works in WordPress 4.7 or later.
 */
add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');
add_image_size( 'post-thumbnail size', 225, 282 );
add_image_size( 'fullpage-thumb size', 700, 424 );
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            // Replace [YOUR THEME TEXT DOMAIN] below with the text domain of your theme (found in the theme's `style.css`).
            'label' => __( 'Header Image', '[YOUR THEME TEXT DOMAIN]'),
            'id' => 'header-image',
            'post_type' => 'post'
        )
    );
	
	new MultiPostThumbnails(
        array(
            // Replace [YOUR THEME TEXT DOMAIN] below with the text domain of your theme (found in the theme's `style.css`).
            'label' => __( 'Header Image', '[YOUR THEME TEXT DOMAIN]'),
            'id' => 'header-image',
            'post_type' => 'page'
        )
    );
}
add_post_type_support( 'page', 'excerpt' );
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/*add_filter( 'nav_menu_css_class' , 'kna_footer_nav_class' , 10, 4 );
function kna_footer_nav_class( $classes, $item, $args ) {
	if($args->menu == 'extra-menu') {
	$classes[] = "col-6 col-md-12";
    return $classes;
	}
}

add_filter( 'nav_menu_link_attributes', 'kna_menu_add_class', 10, 3 );

function kna_menu_add_class( $atts, $item, $args ) {
  if($args->menu == 'header-menu') {
		$class = 'menu-item'; // or something based on $item
		$atts['class'] = $class;
	}
	
	return $atts;
}*/





function kna_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}

function get_breadcrumb() {
  
  	 if(function_exists('bcn_display'))
	{
	bcn_display();
	}
}

function comment_form_hide_cookies_consent( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_form_hide_cookies_consent' );


function wecode_category_fields($term) {
    // checking the name of the action to render different outputs
    if (current_filter() == 'category_edit_form_fields') {	
        $fullname = get_term_meta( $term->term_id, 'term_fullname', true ); 	
        ?>
        <tr class="form-field">
            <th valign="top" scope="row"><label for="keywords"><?php _e('Page Display Name'); ?></label></th>
            <td>
                <input type="text" size="40" value="<?php echo esc_attr( $fullname ) ? esc_attr( $fullname ) : ''; ?>"  name="fullname"><br/>
                <span class="description"><?php _e('Please enter name to display in category page'); ?></span>
            </td>
        </tr>   
    <?php } elseif (current_filter() == 'category_add_form_fields') {
        ?>
        <div class="form-field">
            <label for="keywords"><?php _e('Page Display Name'); ?></label>
            <input type="text" size="40" value=""  name="fullname">
            <p class="description"><?php _e('Please enter name to display in category page'); ?></p>
        </div>  
    <?php
    }
}

add_action('category_add_form_fields', 'wecode_category_fields', 10, 2);
add_action('category_edit_form_fields', 'wecode_category_fields', 10, 2);

function wecode_save_category_fields($term_id) {
    if ( isset( $_REQUEST['fullname'] ) ) {
        $fullname = $_REQUEST['fullname'];
        if( $fullname ) {
                update_term_meta( $term_id, 'term_fullname', $fullname );
        }
    } 	
}
//Enable saving custom field in the edit screen
add_action('edited_category', 'wecode_save_category_fields', 10, 2);

//Enable saving custom field in the add screen
add_action('create_category', 'wecode_save_category_fields', 10, 2);

function getcategoryfullname(){	
    if(is_category()){
        //show category keywords
        $termid = get_queried_object()->term_id;			
        $fullname =get_term_meta( $termid, 'term_fullname', true );			
    }    
    return $fullname;   
}