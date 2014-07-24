<?php 

// ----------------------------------------
// ! hotel
// ----------------------------------------

if ( ! function_exists( 'hotel_type' ) ) {
 
    // register custom taxonomy
    function hotel_type() {
 
        // again, labels for the admin panel
        $labels = array(
            'name'                       => _x( '住宿类型', '分类名称' ),
            'singular_name'              => _x( 'FAQ Category', '分类名称' ),
            'menu_name'                  => __( '住宿类型' ),
            'all_items'                  => __( '所有分类' ),
            'parent_item'                => __( '父级分类' ),
            'parent_item_colon'          => __( '父级分类:' ),
            'new_item_name'              => __( '新建分类' ),
            'add_new_item'               => __( '新建分类' ),
            'edit_item'                  => __( '编辑分类' ),
            'update_item'                => __( '更新分类' ),
            'separate_items_with_commas' => __( '用逗号分隔' ),
            'search_items'               => __( '搜索分类' ),
            'add_or_remove_items'        => __( '添加或者删除分类' ),
            'choose_from_most_used'      => __( '选择常用分类项目' ),
            'not_found'                  => __( '未发现分类' ),
        );
        $args = array(
            // use the labels above
            'labels'                     => $labels,
            // taxonomy should be hierarchial so we can display it like a category section
            'hierarchical'               => true,
            // again, make the taxonomy public (like the post type)
            'public'                     => true,
        );
        // the contents of the array below specifies which post types should the taxonomy be linked to
        register_taxonomy( 'hotel_type', array( 'iedu_hotel' ), $args );
 
    }
 
    // hook into the 'init' action
    add_action( 'init', 'hotel_type', 0 );
 
}

function iedu_hotel() {
  $default = array(
		'name' => '清迈游学住宿',
		'slug' => 'iedu_hotel'
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
	  'register_meta_box_cb' => 'add_hotel_metaboxs',
	//'with_front' => bool Should the permastruct be prepended with the front base. (example: if your permalink structure is /blog/, then your links will be: false->/news/, true->/blog/news/). Defaults to true
    'rewrite' => array( 'slug' => $default['slug'] ),
    'capability_type' => 'post',
    'has_archive' => true,
    'taxonomies' => array( 'hotel_type' ),
    'hierarchical' => false,
    'menu_position' => 70,
    'supports' => array( 'title', 'editor','thumbnail' )
  );

  register_post_type( $default['slug'], $args );
}
if(!post_type_exists('iedu_hotel'))
	add_action( 'init', 'iedu_hotel' );


// ----------------------------------------
// ! load single post template
// ----------------------------------------

function get_hotel_template($single_template) {
     global $post;

     if ($post->post_type == 'iedu_hotel') {
          $single_template = get_template_directory() . '/single-templates/iedu_hotel.php';
     }
     return $single_template;
}
//add_filter( 'single_template', 'get_hotel_template' );

// ----------------------------------------
// ! add second title metabox.
// ----------------------------------------
function add_hotel_metaboxs() {

  $screens = array( 'iedu_hotel' );

  foreach ( $screens as $screen ) {

    add_meta_box(
      'info',
      '详细信息',
      'hotel_meta_box_callback',
      $screen,
      'normal',
      'core'
    );
  }
}

// Field Array
//$hotel_prefix = 'hotel_';
$hotel_meta_fields = array(
  // array(
  //   'label' => '地址',
  //   'desc'  => '',
  //   'id'  => 'location',
  //   'type'  => 'text'
  // ),
  // array(
  //   'label' => '教学系统',
  //   'desc'  => '',
  //   'id'  => 'edu_sys',
  //   'type'  => 'text'
  // ),
  // array(
  //   'label' => '课程介绍',
  //   'desc'  => '',
  //   'id'  => 'course_intro',
  //   'type'  => 'textarea'
  // ),
  array(
    'label' => '费用',
    'desc'  => '',
    'id'  => 'hotel_fee',
    'type'  => 'text'
  ),
  array(
    'label' => '景观',
    'desc'  => '',
    'id'  => 'hotel_sight',
    'type'  => 'text'
  ),
  array(
    'label' => '主题',
    'desc'  => '',
    'id'  => 'hotel_theme',
    'type'  => 'text'
  ),
  array(
    'label' => '风格',
    'desc'  => '',
    'id'  => 'hotel_style',
    'type'  => 'text'
  ),
  array(
    'label' => '入住时间',
    'desc'  => '',
    'id'  => 'hotel_check-in-time',
    'type'  => 'text'
  ),
  array(
    'label' => '退房时间',
    'desc'  => '',
    'id'  => 'hotel_check-out-time',
    'type'  => 'text'
  ),
  array(
    'label' => '浴室',
    'desc'  => '',
    'id'  => 'hotel_bathroom',
    'type'  => 'text'
  ),
  array(
    'label' => '卧室',
    'desc'  => '',
    'id'  => 'hotel_bedroom',
    'type'  => 'text'
  ),
  array(
    'label' => '早餐',
    'desc'  => '',
    'id'  => 'hotel_breakfast',
    'type'  => 'text'
  ),
  array(
    'label' => '设施&服务',
    'desc'  => '',
    'id'  => 'hotel_facilities',
    'type'  => 'textarea'
  ),
  array(
    'label' => '价格&条款',
    'desc'  => '',
    'id'  => 'hotel_price',
    'type'  => 'textarea'
  ),
  array(
    'label' => '所在位置',
    'desc'  => '',
    'id'  => 'hotel_location',
    'type'  => 'textarea'
  ),
  array(
    'label' => '周边配套',
    'desc'  => '',
    'id'  => 'hotel_peripheral',
    'type'  => 'textarea'
  ),
  array(
    'label' => '全部房型',
    'desc'  => '',
    'id'  => 'hotel_house_type',
    'type'  => 'textarea'
  ),
);


/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function hotel_meta_box_callback( $post ) {
  global $hotel_meta_fields;
  // Add an nonce field so we can check for it later.
  wp_nonce_field( 'hotel_meta_box', 'hotel_meta_box_nonce' );

  /*
   * Use get_post_meta() to retrieve an existing value
   * from the database and use the value for the form.
   */

  echo '<div class="form-horizontal" role="form">';
  foreach ($hotel_meta_fields as $field) {
      echo get_toonya_metabox_html($post->ID, $field,true);
  }
  echo '</div>';
}

/**
 * When the post is saved, saves our hotel data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function hotel_save_meta_box_data( $post_id ) {
  global $hotel_meta_fields;
  /*
   * We need to verify this came from our screen and with proper authorization,
   * because the save_post action can be triggered at other times.
   */

  // Check if our nonce is set.
  if ( ! isset( $_POST['hotel_meta_box_nonce'] ) ) {
    return;
  }

  // Verify that the nonce is valid.
  if ( ! wp_verify_nonce( $_POST['hotel_meta_box_nonce'], 'hotel_meta_box' ) ) {
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
  // if ( ! isset( $_POST['hotel'] ) ) {
  //  return;
  // }

  foreach ($hotel_meta_fields as $field) {
    if($field['type'] == 'tax_select') continue;

    if( ! isset( $_POST[$field['id']] ) )
      continue;

    $old = get_post_meta($post_id, $field['id'], true);
    $new = $_POST[$field['id']];
    if ($new && $new != $old) {
      update_post_meta($post_id, $field['id'], $new);
    } elseif ('' == $new && $old) {
      delete_post_meta($post_id, $field['id'], $old);
    }
  } // enf foreach

  // Sanitize user input.
  //$my_data = sanitize_text_field( $_POST['hotel'] );

  // Update the meta field in the database.
  //update_post_meta( $post_id, 'hotel', $my_data );
}
add_action( 'save_post', 'hotel_save_meta_box_data' );
?>