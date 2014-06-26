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
	  'register_meta_box_cb' => 'add_ed_metaboxs',
	//'with_front' => bool Should the permastruct be prepended with the front base. (example: if your permalink structure is /blog/, then your links will be: false->/news/, true->/blog/news/). Defaults to true
    'rewrite' => array( 'slug' => $default['slug'] ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 70,
    'supports' => array( 'title', 'editor','thumbnail' )
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
//add_filter( 'single_template', 'get_ed_template' );


// ----------------------------------------
// ! add second title metabox.
// ----------------------------------------
function add_ed_metaboxs() {

  $screens = array( 'iedu_ed' );

  foreach ( $screens as $screen ) {

    add_meta_box(
      'info',
      '详细信息',
      'ed_meta_box_callback',
      $screen,
      'normal',
      'core'
    );
  }
}

// Field Array
//$ed_prefix = 'ed_';
$ed_meta_fields = array(
  array(
    'label' => '地址',
    'desc'  => '',
    'id'  => 'location',
    'type'  => 'text'
  ),
  array(
    'label' => '教学系统',
    'desc'  => '',
    'id'  => 'edu_sys',
    'type'  => 'text'
  ),
  array(
    'label' => '课程介绍',
    'desc'  => '',
    'id'  => 'course_intro',
    'type'  => 'textarea'
  ),
  array(
    'label' => '学费',
    'desc'  => '',
    'id'  => 'fee',
    'type'  => 'text'
  ),
  array(
    'label' => '教学&详情',
    'desc'  => '',
    'id'  => 'edu_info',
    'type'  => 'textarea'
  ),
  array(
    'label' => '入学&要求',
    'desc'  => '',
    'id'  => 'requirement',
    'type'  => 'textarea'
  ),
  array(
    'label' => '费用&条款',
    'desc'  => '',
    'id'  => 'fee_agreement',
    'type'  => 'textarea'
  ),
  array(
    'label' => '服务流程',
    'desc'  => '',
    'id'  => 'service_process',
    'type'  => 'textarea'
  ),
  array(
    'label' => '申请表格',
    'desc'  => '',
    'id'  => 'apply_form',
    'type'  => 'textarea'
  ),
);


/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function ed_meta_box_callback( $post ) {
  global $ed_meta_fields;
  // Add an nonce field so we can check for it later.
  wp_nonce_field( 'ed_meta_box', 'ed_meta_box_nonce' );

  /*
   * Use get_post_meta() to retrieve an existing value
   * from the database and use the value for the form.
   */

  echo '<div class="form-horizontal" role="form">';
  foreach ($ed_meta_fields as $field) {
    $value = get_post_meta( $post->ID, $field['id'], true );

    echo '<div class="form-group" role="form">';
    switch ($field['type']) {
      case 'text':
        echo '<label class="col-sm-2 control-label" for="'.$field['id'].'">'.$field['label'].'</label>';
        echo '<div class="col-sm-8"><input class="form-control" type="text" id="'.$field['id'].'" name="'.$field['id'].'" value="' . esc_attr( $value ) . '" /></div>';
        break;

      case 'textarea':
        echo '<label class="col-sm-2 control-label" for="'.$field['id'].'">'.$field['label'].'</label>';
        echo '<div class="col-sm-8"><textarea rows="5" class="form-control" type="text" id="'.$field['id'].'" name="'.$field['id'].'">' . esc_attr( $value ) . '</textarea></div>';
        break;
      
      default:
        break;
    }
    echo '</div>';
  }
  echo '</div>';
}

/**
 * When the post is saved, saves our ed data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function ed_save_meta_box_data( $post_id ) {
  global $ed_meta_fields;
  /*
   * We need to verify this came from our screen and with proper authorization,
   * because the save_post action can be triggered at other times.
   */

  // Check if our nonce is set.
  if ( ! isset( $_POST['ed_meta_box_nonce'] ) ) {
    return;
  }

  // Verify that the nonce is valid.
  if ( ! wp_verify_nonce( $_POST['ed_meta_box_nonce'], 'ed_meta_box' ) ) {
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
  // if ( ! isset( $_POST['ed'] ) ) {
  //  return;
  // }

  foreach ($ed_meta_fields as $field) {
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
  //$my_data = sanitize_text_field( $_POST['ed'] );

  // Update the meta field in the database.
  //update_post_meta( $post_id, 'ed', $my_data );
}
add_action( 'save_post', 'ed_save_meta_box_data' );
?>