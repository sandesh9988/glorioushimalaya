<?php
function create_table_form() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'ct_form';	
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
	  `id` bigint(20) NOT NULL AUTO_INCREMENT,
	  `form_name` varchar(255) NOT NULL,
	  `form_description` varchar(255) NOT NULL,
	  `status` int(11) NOT NULL,
	   PRIMARY KEY (id)
	)  $charset_collate;";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}
function create_entries_table_form() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'ct_form_entries';
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
	 `id` bigint(20) NOT NULL AUTO_INCREMENT,
	  `form_id` int(11) NOT NULL,
	  `post_id` int(11) NOT NULL,
	  `post_url` varchar(255) NOT NULL,
	  `client_name` varchar(255) NOT NULL,
	  `client_email` varchar(255) NOT NULL,
	  `client_ip` varchar(255) NOT NULL,
	  `date` datetime NOT NULL,
	   PRIMARY KEY (id)
	)  $charset_collate;";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}
function create_detail_table_form() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'form_entries_detail';	
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
	 `id` bigint(20) NOT NULL AUTO_INCREMENT,
	  `entry_id` int(11) NOT NULL,
	  `name` varchar(255) NOT NULL,
	  `value` text NOT NULL,
	   PRIMARY KEY (id)
	)  $charset_collate;";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}
add_action( 'init', 'create_table_form', 1 );
add_action( 'init', 'create_entries_table_form', 1 );
add_action( 'init', 'create_detail_table_form', 1 );



add_action('admin_menu', 'form_admin_menu');
function form_admin_menu(){
	add_menu_page('All Forms', 'All Forms', 'manage_options', 'all_forms', 'forms', 'dashicons-tickets', 33);
}
function forms(){
	global $wpdb;
	if (isset($_GET['form_id'])) {
		require_once get_template_directory() .'/functions/inc/entries.php';
	}elseif(isset($_GET['id'])){
		require_once get_template_directory() .'/functions/inc/entry_list.php';
	}elseif(isset($_GET['delete_id'])){
		require_once get_template_directory() .'/functions/inc/delete.php';
	}else{
		require_once get_template_directory() .'/functions/inc/form_list.php';
	}	
	
}
add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/functions/inc/admin.style.css', false, '1.0.0' );
}
function collection_script(){
	wp_enqueue_script( 'script-coll', get_template_directory_uri() . '/functions/inc/coll-js.js' );
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/functions/inc/coll-style.css', false, '1.0.0' );
    global $errors;
    if (!empty($errors)) { ?>
			<div class="error_msg" id="main_error_msg">
				<?php foreach ($errors as $key ) {
					echo $key;
				}?>							
			</div>
		<?php };
}
add_action('wp_footer', 'collection_script');
function form_insert_include (){
		include get_template_directory() .'/functions/insert.php';
		}
//add_action('template_redirect', 'form_insert_include');