<?php
// ----------------------------------------
// ! init
// ----------------------------------------
function wblegal_theme_setup() {
	register_nav_menus(
		array(
		  'header-menu' => __( '页头' )
		)
	);
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
}

add_action( 'after_setup_theme', 'wblegal_theme_setup' );


// ----------------------------------------
// ! some support.
// ----------------------------------------
require_once('inc/core.php');
require_once('inc/add-setting.php');
require_once('inc/browser-check.php');
if(belowIE(9))
	browser_alert();
require_once('inc/bootstrap-nav.php');
require_once('inc/remove-origin.php');

require_once('inc/change-login-area.php');

if(is_admin()){
	require_once('inc/protection-code.php');
	require_once('inc/slideshow-management.php');
}


// ----------------------------------------
// ! email component
// ----------------------------------------
require_once('inc/mail-request.php');


// ----------------------------------------
// ! add menu management
// ----------------------------------------
add_action( 'admin_menu', 'admin_menu_page' );

function admin_menu_page(){
    add_menu_page( '导航菜单', '导航菜单', 'manage_options', 'nav-menus.php', '', '', 99 );
    add_menu_page( '邮箱配置', '邮箱配置', 'manage_options', 'options-general.php?page=wp-mail-smtp/wp_mail_smtp.php', '', '', 100 );
}

// ----------------------------------------
// ! remove page metabox
// ----------------------------------------
function page_remove_parent_meta_boxes() {
    remove_meta_box('pageparentdiv', 'page', 'side');
}
add_action( 'admin_menu', 'page_remove_parent_meta_boxes' );


// ----------------------------------------
// ! load bootstrap select component
// ----------------------------------------
function load_bootstrap_select() {

	global $post;

	if ( !(empty($post)) && in_array( $post->post_name, array( 'ask' ) ) )
	{

		wp_enqueue_style( 'bootstrap-select-style', get_template_directory_uri() . '/inc/css/bootstrap-select.css' );
		wp_enqueue_script( 'bootstrap-select-js', get_template_directory_uri() . '/inc/js/bootstrap-select.js', array('jquery'), '1.0.0', true );

	}
}

add_action( 'wp_enqueue_scripts', 'load_bootstrap_select' );




// ----------------------------------------
// ! add second title metabox.
// ----------------------------------------
function add_second_title() {

	$screens = array( 'page' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'second_title',
			'输入英文标题',
			'second_title_meta_box_callback',
			$screen,
			'normal',
			'high'
		);
	}
}
add_action( 'add_meta_boxes', 'add_second_title' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function second_title_meta_box_callback( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'second_title_meta_box', 'second_title_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, 'second_title', true );

	echo '<input type="text" id="second_title" name="second_title" value="' . esc_attr( $value ) . '" />';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function second_title_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['second_title_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['second_title_meta_box_nonce'], 'second_title_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, its safe for us to save the data now. */

	// Make sure that it is set.
	if ( ! isset( $_POST['second_title'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['second_title'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'second_title', $my_data );
}
add_action( 'save_post', 'second_title_save_meta_box_data' );


// ----------------------------------------
// ! slideshow function support
// ----------------------------------------
if(!function_exists('get_banner')) {
	function get_banner() {
		$banner_list       = get_option('bannerlist');
		$banner_item       = '';
		$banner_control    = '';
		if(!empty($banner_list)){
			foreach( $banner_list as $key => $item ) {
				$banner_item .= sprintf( '<div class="item %s"><img class="img-responsive" src="%s" alt="%s"></div>',
		            ( $key == 0 ) ? 'active' : '',
		            $item['imgurl'],
		            $item['title']
				);
				$banner_control .= sprintf( '<li data-target="#carousel-example-generic" data-slide-to="%s" %s> </li> ',
		            $key,
		            ( $key == 0 ) ? 'class="active"' : ''
				);
			}
		}

		return [$banner_control, $banner_item];
	}
}
?>