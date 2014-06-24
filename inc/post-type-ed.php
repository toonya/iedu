<?php 

// ----------------------------------------
// ! ed
// ----------------------------------------
function iedu_ed() {
  $default = array(
		'name' => '清迈游学',
		'slug' => 'iedu_ed'
	);

  $labels = array(
    'name' => $default['name'],
    'singular_name' => $default['name'],
    'add_new' => '添加新'.$default['name'],
    'add_new_item' => '添加新'.$default['name'],
    'edit_item' => '编辑'.$default['name'].'信息',
    'new_item' => '添加新'.$default['name'],
    'all_items' => '全部'.$default['name'],
    'view_item' => '浏览该'.$default['name'],
    'search_items' => '查找'.$default['name'],
    'not_found' =>  '没有发现',
    'not_found_in_trash' => '垃圾箱中没有',
    'parent_item_colon' => '',
    'menu_name' => $default['name']
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
	//Provide a callback function that will be called when setting up the meta boxes for the edit form. Do remove_meta_box() and add_meta_box() calls in the callback.
	//'register_meta_box_cb' => '',
	//'with_front' => bool Should the permastruct be prepended with the front base. (example: if your permalink structure is /blog/, then your links will be: false->/news/, true->/blog/news/). Defaults to true
    'rewrite' => array( 'slug' => $default['slug'] ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 70,
    'supports' => array( 'title', 'editor','thumbnail', 'excerpt' )
  );

  register_post_type( $default['slug'], $args );
}
if(!post_type_exists('iedu_ed'))
	add_action( 'init', 'iedu_ed' );


// ----------------------------------------
// ! load single post template
// ----------------------------------------

function get_ed_template($single_template) {
     global $post;

     if ($post->post_type == 'iedu_ed') {
          $single_template = get_template_directory() . '/single-templates/iedu_ed.php';
     }
     return $single_template;
}
add_filter( 'single_template', 'get_ed_template' );

?>