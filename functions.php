<?php
// ----------------------------------------
// ! init
// ----------------------------------------
function iedu_theme_setup() {
	register_nav_menus(
		array(
		  'header-menu' => __( '页头' )
		)
	);

	add_theme_support( 'post-thumbnails' );

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

    set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );
}

add_action( 'after_setup_theme', 'iedu_theme_setup' );


function coolwp_remove_open_sans_from_wp_core() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style('open-sans','');
}
add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );
add_action( 'admin_enqueue_scripts', 'coolwp_remove_open_sans_from_wp_core' );

// ----------------------------------------
// ! some support.
// ----------------------------------------
require_once('inc/core.php');
require_once('inc/add-setting.php');
require_once('inc/browser-check.php');
if(belowIE(9))
	browser_alert();
require_once('inc/bootstrap-nav.php');
require_once('inc/post-type-school.php');
require_once('inc/post-type-certification.php');
require_once('inc/post-type-ed.php');
require_once('inc/post-type-camp.php');
require_once('inc/post-type-visit.php');
require_once('inc/post-type-hotel.php');

//require_once('inc/post-metabox.php');
require_once('inc/remove-origin.php');

require_once('inc/change-login-area.php');
//require_once('inc/qn/qn-support.php');

// metabox
require_once('inc/metabox/get_custom_metabox_html.php');
require_once('inc/metabox/showcase.php');
require_once('inc/metabox/discount.php');

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
    add_menu_page( '新闻', '新闻', 'manage_options', 'edit.php', '', '', 1 );
}

// ----------------------------------------
// ! remove page metabox
// ----------------------------------------
function page_remove_parent_meta_boxes() {
    remove_meta_box('pageparentdiv', 'page', 'side');
}
//add_action( 'admin_menu', 'page_remove_parent_meta_boxes' );


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
// ! slideshow function support
// ----------------------------------------
if(!function_exists('get_banner')) {
	function get_banner($bg_type) {
		$banner_list       = get_option('bannerlist');
		$banner_item       = '';
		$banner_control    = '';
		if(!empty($banner_list)){
			foreach( $banner_list as $key => $item ) {
				switch ($bg_type) {
					case 'cover':
						$banner_item .= sprintf( '<div class="item %s">
													<div class="img-container" style="background-image:url(%s)"></div>
													<div class="carousel-caption"><a href="%s">
														<h3>%s</h3>
														<p>%s</p>
													</a></div>
												  </div>',

				            ( $key == 0 ) ? 'active' : '',
				            $item['imgurl'],
				            $item['url'],
				            $item['title'],
				            $item['describe']
						);
						$banner_control .= sprintf( '<li data-target="#carousel-example-generic" data-slide-to="%s" %s> </li> ',
				            $key,
				            ( $key == 0 ) ? 'class="active"' : ''
						);
						break;
					
					default:
						$banner_item .= sprintf( '<div class="item %s">
													<img class="img-responsive" src="%s" alt="%s">
													<div class="carousel-caption"><a href="%s">
														<h3>%s</h3>
														<p>%s</p>
													</a></div>
												  </div>',

				            ( $key == 0 ) ? 'active' : '',
				            $item['imgurl'],
				            $item['title'],
				            $item['url'],
				            $item['title'],
				            $item['describe']
						);
						$banner_control .= sprintf( '<li data-target="#carousel-example-generic" data-slide-to="%s" %s> </li> ',
				            $key,
				            ( $key == 0 ) ? 'class="active"' : ''
						);
						break;
				}
			}
		}

		return [$banner_control, $banner_item];
	}
}

function theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	if( !is_front_page() )
		$title .= ' | ' . get_bloginfo( 'name', 'display' );
	else
		$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
/*
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}
*/

	// Add a page number if necessary:
/*
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}
*/

	return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );
