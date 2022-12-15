<?php
include (get_template_directory().'/functions/forms.php');
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    	
add_image_size( 'thumb_450', 450, 450 ); 
add_image_size( 'thumb_600', 600, 600 );
add_image_size( 'thumb_350', 450, 300, true );



function replace_text_wps($text){
    $replace = array(
        // 'WORD TO REPLACE' => 'REPLACE WORD WITH THIS'
        'https://www.glorioushimalaya.com/company-information/contact-us/' => 'https://www.glorioushimalaya.com/get-in-touch/',
        'https://www.glorioushimalaya.com/contact-us/' => 'https://www.glorioushimalaya.com/get-in-touch/'
    );
    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}
 
add_filter('the_content', 'replace_text_wps');

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	$ritems = $items;
	// loop
	foreach( $items as &$item ) {
		
		// vars
		$submenu_trekking = get_field('submenu_trekking', $item);
		$submenu_tour = get_field('submenu_tour', $item);
		
		 //$item->title = $item->title.$submenu_trekking;
		// append icon
		if( $submenu_trekking ) {
		  $pagessss = get_posts(array(
              'post_type' => 'trips',
              'numberposts' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'trekking',
                  'field' => 'term_id', 
                  'terms' => $submenu_trekking, /// Where term_id of Term 1 is "1".
                  'include_children' => false
                )
              )
            ));
            //$item->title = $item->title.count($pagessss);
            foreach($pagessss as $post){
                setup_postdata( $post );
                $link = array (
                    'title'            => get_the_title($post) .' - '. get_field('duration', $post->ID).' Days',
                    'menu_item_parent' => $item->ID,
                    'url'              => get_the_permalink($post)
                );
                $ritems[] = (object) $link;
            }
		  
			
		}elseif($submenu_tour){
		   $pagessss = get_posts(array(
              'post_type' => 'trips',
              'numberposts' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'tour',
                  'field' => 'term_id', 
                  'terms' => $submenu_tour, /// Where term_id of Term 1 is "1".
                  'include_children' => false
                )
              )
            ));
            //$item->title = $item->title.count($pagessss);
            foreach($pagessss as $post){
                setup_postdata( $post );
                $link = array (
                    'title'            => get_the_title($post) .' - '. get_field('duration', $post->ID).' Days',
                    'menu_item_parent' => $item->ID,
                    'url'              => get_the_permalink($post)
                );
                $ritems[] = (object) $link;
            }
		}
		
	}
	
            wp_reset_postdata();
	
	// return
	return $ritems;
	
}
/*
* ===================================================================
*  INCLUDE STYLES AND SCRIPTS
* ===================================================================
*
*/
function theme_script_enqueue(){
    
    wp_deregister_script('jquery');
    //css
  wp_enqueue_style('bootstrapstyle', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '', 'all');
  wp_enqueue_style('themestyle', get_template_directory_uri() . '/css/theme-style.css', array(), '', 'all');


    //js
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.1.4.min.js', array(), '', true);
wp_enqueue_script('properjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), '', true);

  wp_enqueue_script('bootstrapscript', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '', true);

  // wp_enqueue_script('inspectscript', get_template_directory_uri() . '/js/prevent-inspect.js', array('jquery'), '', true);

}
add_action('wp_enqueue_scripts', 'theme_script_enqueue');

/*
* ===================================================================
*  ACTIVATE LOGO
* ===================================================================
*
*/
add_theme_support( 'custom-logo', array(
  'height'      => 50,
  'width'       => 200,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
) );

/*
* ===================================================================
*  ACTIVATE MENUS
* ===================================================================
*
*/
function menu_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'Header Menu');
  register_nav_menu('secondary', 'Footer Menu');
}
add_action('init', 'menu_setup');

/*
* ===================================================================
*  ACTIVATE WIDGET
* ===================================================================
*
*/
function widget_setup(){
  register_sidebar(array(
    'name'          => __('Footer Menu First'),
    'id'            => 'footer-menu-first',
    'before_widget' => '<ul id="%4$s" class="widget %2$s">',
    'after_widget'  => '</ul>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Menu Second'),
    'id'            => 'footer-menu-second',
    'before_widget' => '<ul id="%4$s" class="widget %2$s">',
    'after_widget'  => '</ul>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Menu Third'),
    'id'            => 'footer-menu-third',
    'before_widget' => '<ul id="%4$s" class="widget %2$s">',
    'after_widget'  => '</ul>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Menu Fourth'),
    'id'            => 'footer-menu-fourth',
    'before_widget' => '<ul id="%4$s" class="widget %2$s">',
    'after_widget'  => '</ul>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Menu Fifth'),
    'id'            => 'footer_menu_fifth',
    'before_widget' => '<ul id="%4$s" class="widget %2$s">',
    'after_widget'  => '</ul>',
    'before_title'  => '<h4 class="widget_title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Affiliated'),
    'id'            => 'footer-affiliated',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Accept'),
    'id'            => 'footer-accept',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Recommended'),
    'id'            => 'footer-recommended',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Logo'),
    'id'            => 'footer-logo',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => __('Footer Copyright'),
    'id'            => 'footer-copyright',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
}
add_action('widgets_init', 'widget_setup');
/*
* ===================================================================
*  ACTIVATE THUMBNAILS
* ===================================================================
*
*/
add_theme_support('post-thumbnails');


/*
* ===================================================================
*  SINGLE TRIP PAGE
* ===================================================================
*
*/
add_filter( 'template_include', function( $template ) {
  $trip_types = 'trips';    
  if ( is_singular( $trip_types ) ){
    if(isset($_GET['generate']) && $_GET['generate']=='pdf'){
        return get_stylesheet_directory() . '/trip-pdf.php';
    }
    return get_stylesheet_directory() . '/single-trip.php';
  } else {
    return $template;
  }
});


add_action( 'wpcf7_init', 'custom_views_post_title' );

/*
* ===================================================================
*  LIST TAXONOMIES IN CONTACT FORM 7
* ===================================================================
*
*/
function dynamic_field_values ( $tag, $unused ) {

  if ( $tag['name'] != 'taxonomies' )
    return $tag;

  $args = array (
    'numberposts'   => -1,
    'post_type'     => 'trips',
    'orderby'       => 'title',
    'order'         => 'ASC',
  );

  $custom_posts = get_posts($args);

  if ( ! $custom_posts )
    return $tag;

  foreach ( $custom_posts as $custom_post ) {
    $tag['raw_values'][] = $custom_post->ID;
    $tag['values'][] = $custom_post->post_title;
    $tag['labels'][] = $custom_post->post_title;
  }

  return $tag;

}
add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 10, 2);

/*
* ===================================================================
*  SEARCH PAGE
* ===================================================================
*
*/
function wds_cpt_search( $query ) {

  if ( is_search() && $query->is_main_query() && $query->get( 's' ) ){

    $query->set( 'post_type', array(
      'trips'
    ) );
  }
}

/*
* ===================================================================
*  ABOUT MENU FOR ABOUT US PAGE
* ===================================================================
*
*/
function wpb_about_menu() {
  register_nav_menu('about-menu',__( 'About Us Menu' ));
}
add_action( 'init', 'wpb_about_menu' );

add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

/*
* ===================================================================
*  TRAVEL GUIDE MENU FOR TRAVEL GUIDE PAGE
* ===================================================================
*
*/
function wpb_travel_menu() {
  register_nav_menu('travel-menu',__( 'Travel Guide Menu' ));
}
add_action( 'init', 'wpb_travel_menu' );

add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

/*
* ===================================================================
*  CUSTOM SEARCH FOR SPECIFIC POST TYPE
* ===================================================================
*
*/
function prefix_limit_post_types_in_search( $query ) {
  if ( $query->is_search ) {
    $query->set( 'post_type', 'trips' );
  }
  return $query;
}
add_filter( 'pre_get_posts', 'prefix_limit_post_types_in_search' );


/*
* ===================================================================
*  DISPLAY CONTACT FORM 7 DATA IN CUSTOM POST -- CUSTOMER REVIEWS
* ===================================================================
*/

add_action('wpcf7_before_send_mail', 'save_application_form');
function save_application_form($wpcf7){

  global $wpdb;
  $submission = WPCF7_Submission::get_instance();

  $review_title = $_POST['review-title'];
  $review_content = $_POST['review-content'];

  $my_post = array(
    'post_type' => 'customer_reviews',
    'post_status'=>'draft',
    'post_title'=>$review_title,
    'post_content'=>$review_content,
  );
  
  $the_post_id = wp_insert_post( $my_post );


  if ($submission) {
        //error_log('submission from cf7 este:' . print_r($submission));
    $uploaded_files = $submission->uploaded_files();
    if ($uploaded_files) {
      foreach ($uploaded_files as $fieldName => $filepath) {
        $data = CF7_create_attachment($filepath);
        update_post_meta($the_post_id,"_thumbnail_id",$data['attach_id']);
        
      }
    }
  }
  if(isset($_POST['upload-file-359']) && sizeof($_POST['upload-file-359'])>0){
    $imageIdList=[];
    foreach($_POST['upload-file-359'] as $gallaryImage){

      $upload_dir = wp_upload_dir();
      $filepath=$upload_dir['baseurl'] . '/wp_dndcf7_uploads/'.$gallaryImage;
      $data = CF7_create_attachment($filepath);
      $imageIdList[]=$data['attach_id'];
    }
      update_post_meta($the_post_id,"reviewer_trip_photos",$imageIdList);

  }
  

  update_post_meta( $the_post_id, 'reviewer_rating', $_POST['rating']);
  update_post_meta( $the_post_id, 'reviewer_name', $_POST['your-name']);
  update_post_meta( $the_post_id, 'reviewer_country', $_POST['your-country']);
  update_post_meta( $the_post_id, 'reviewer_trip', $_POST['taxonomies']);
  // update_post_meta( $the_post_id, 'reviewer_trip_photos', $_POST['upload-file-359']);
}
/*
* =================================
*  UPLOAD IMAGE IN CONTACT FORM 7 AS FEATURED IMAGE
* ==================================
*
*/



function CF7_create_attachment($filename){
  $filetype = wp_check_filetype(basename($filename), null);
  $wp_upload_dir = wp_upload_dir();
  $attachFileName = $wp_upload_dir['path'] . '/' . basename($filename);
  copy($filename, $attachFileName);
  $attachment = array(
    'guid'           => $attachFileName,
    'post_mime_type' => $filetype['type'],
    'post_title'     => preg_replace('/\.[^.]+$/', '', basename($filename)),
    'post_content'   => '',
    'post_status'    => 'inherit'
  );
  $attach_id = wp_insert_attachment($attachment, $attachFileName);
  require_once(ABSPATH . 'wp-admin/includes/image.php');
  $attach_data = wp_generate_attachment_metadata($attach_id, $attachFileName);
  wp_update_attachment_metadata($attach_id, $attach_data);
  $attach_data['attach_id']=$attach_id;
  return $attach_data;
}



/*
* ===================================================================
*  CUSTOM END DATE CALCULATION
* ===================================================================
*
*/
function getEndDate($startdate,$duration){
  $duration=str_replace(array("days","day"," ","  "),"",strtolower($duration));
  $date=new DateTime($startdate);
  if(is_numeric($duration) && $date){
    $date->add(new DateInterval('P'.$duration.'D'));
    return $date->format("M d, Y");
  }
  return false;
}

/*
* ===================================================================
*  DISPLAY DURATION IN MENU
* ===================================================================
*
*/
/*
function my_uber_add_subcontent( $content , $post ){
  $content.= '<span class="ubermenu-target-duration" style="margin-left:5px;">- ';
  $content.= $post->duration." days";
  $content.= '</span>';
  return $content;
}
add_filter( 'ubermenu_dp_subcontent' , 'my_uber_add_subcontent' , 10 , 3 );*/

add_filter('use_block_editor_for_post', '__return_false', 10);




function cptui_register_my_cpts() {

	/**
	 * Post Type: Teams.
	 */

	$labels = [
		"name" => __( "Teams", "custom-post-type-ui" ),
		"singular_name" => __( "Team", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Teams", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "team", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "team", $args );

	/**
	 * Post Type: Faqs.
	 */

	$labels = [
		"name" => __( "Faqs", "custom-post-type-ui" ),
		"singular_name" => __( "Faq", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Faqs", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "trip_faq", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "trip_faq", $args );

	/**
	 * Post Type: Trips.
	 */

	$labels = [
		"name" => __( "Trips", "custom-post-type-ui" ),
		"singular_name" => __( "Trip", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Trips", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "trips", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "trips", $args );

	/**
	 * Post Type: Customer Reviews.
	 */

	$labels = [
		"name" => __( "Customer Reviews", "custom-post-type-ui" ),
		"singular_name" => __( "Customer Review", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Customer Reviews", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "customer_reviews", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "customer_reviews", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Team Categories.
	 */

	$labels = [
		"name" => __( "Team Categories", "custom-post-type-ui" ),
		"singular_name" => __( "Team Category", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Team Categories", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'team_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "team_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "team_category", [ "team" ], $args );

	/**
	 * Taxonomy: Faq Categories.
	 */

	$labels = [
		"name" => __( "Faq Categories", "custom-post-type-ui" ),
		"singular_name" => __( "Faq Category", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Faq Categories", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'faq_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "faq_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "faq_category", [ "trip_faq" ], $args );

	/**
	 * Taxonomy: Travel Styles.
	 */

	$labels = [
		"name" => __( "Travel Styles", "custom-post-type-ui" ),
		"singular_name" => __( "Travel Style", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Travel Styles", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'travel_style', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "travel_style",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "travel_style", [ "trips" ], $args );

	/**
	 * Taxonomy: Trekking.
	 */

	$labels = [
		"name" => __( "Trekking", "custom-post-type-ui" ),
		"singular_name" => __( "Trekking", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Trekking", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'hiking', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "trekking",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "trekking", [ "trips" ], $args );

	/**
	 * Taxonomy: Tours.
	 */

	$labels = [
		"name" => __( "Tours", "custom-post-type-ui" ),
		"singular_name" => __( "Tour", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Tours", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'tour', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "tour",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "tour", [ "trips" ], $args );

	/**
	 * Taxonomy: Destinations.
	 */

	$labels = [
		"name" => __( "Destinations", "custom-post-type-ui" ),
		"singular_name" => __( "Destination", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Destinations", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'destinations', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "destinations",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
			];
	register_taxonomy( "destinations", [ "trips" ], $args );

	/**
	 * Taxonomy: Ght Special Trips.
	 */

	$labels = [
		"name" => __( "Ght Special Trips", "custom-post-type-ui" ),
		"singular_name" => __( "Ght Special Trip", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Ght Special Trips", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'ght_special_trips', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "ght_special_trips",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "ght_special_trips", [ "trips" ], $args );

	/**
	 * Taxonomy: Homepage Featured.
	 */

	$labels = [
		"name" => __( "Homepage Featured", "custom-post-type-ui" ),
		"singular_name" => __( "Homepage Featured", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Homepage Featured", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'homepage_featured', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "homepage_featured",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "homepage_featured", [ "trips" ], $args );

	/**
	 * Taxonomy: Trip Tags.
	 */

	$labels = [
		"name" => __( "Trip Tags", "custom-post-type-ui" ),
		"singular_name" => __( "Trip Tag", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Trip Tags", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => false,
		"publicly_queryable" => false,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'trip_tag', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "trip_tag",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "trip_tag", [ "trips" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


function defer_parsing_of_js( $url ) {

if ( strpos( $url, 'ichart' ) ){
  return str_replace( ' src', ' defer src', $url );  
}
return $url;


}

add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );





add_action("wp_ajax_submit_form", "submit_wp_ajax_form");
add_action("wp_ajax_nopriv_submit_form", "submit_wp_ajax_form");

function submit_wp_ajax_form() {

   /*if ( !wp_verify_nonce( $_POST['nonce'], "wp_rest")) {
      exit("No naughty business please");
   } */  

   include (get_template_directory().'/functions/insert.php');

   die();

}
add_action('rest_api_init', function(){
    register_rest_route('form/v1/form/', 'submit', array(
        'methods'=>'POST',
        'callback'=>'submit_wp_ajax_form'
    ));
});
function yoast_seo_canonical_change_woocom_shop( $canonical ) {
		return $canonical;
}
add_filter( 'wpseo_canonical', 'yoast_seo_canonical_change_woocom_shop', 10, 1 );
?>
