<?php 

// ----------------------------------------
// ! school
// ----------------------------------------
function iedu_school() {
  $default = array(
		'name' => '国际教育学校',
		'slug' => 'iedu_school'
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
	  'register_meta_box_cb' => 'add_school_metaboxs',
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
if(!post_type_exists('iedu_school'))
	add_action( 'init', 'iedu_school' );


// ----------------------------------------
// ! load single post template
// ----------------------------------------

function get_school_template($single_template) {
     global $post;

     if ($post->post_type == 'iedu_school') {
          $single_template = get_template_directory() . '/single-templates/iedu_school.php';
     }
     return $single_template;
}
//add_filter( 'single_template', 'get_school_template' );





// ----------------------------------------
// ! add second title metabox.
// ----------------------------------------
function add_school_metaboxs() {

  $screens = array( 'iedu_school' );

  foreach ( $screens as $screen ) {

    add_meta_box(
      'info',
      '详细信息',
      'school_meta_box_callback',
      $screen,
      'normal',
      'core'
    );
  }
}

// Field Array
//$school_prefix = 'school_';
$school_meta_fields = array(
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
    'label' => '学生人数',
    'desc'  => '',
    'id'  => 'student_num',
    'type'  => 'text'
  ),
  array(
    'label' => '教师人数',
    'desc'  => '',
    'id'  => 'teacher_num',
    'type'  => 'text'
  ),
  array(
    'label' => '教学年级',
    'desc'  => '',
    'id'  => 'grade_area',
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
    'desc'  => '标题格式:<title>标题</title> 内容格式:<content>内容</content>',
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
function school_meta_box_callback( $post ) {
  global $school_meta_fields;
  // Add an nonce field so we can check for it later.
  wp_nonce_field( 'school_meta_box', 'school_meta_box_nonce' );

  /*
   * Use get_post_meta() to retrieve an existing value
   * from the database and use the value for the form.
   */

  echo '<div class="form-horizontal" role="form">';
  foreach ($school_meta_fields as $field) {
      echo get_toonya_metabox_html($post->ID, $field,true);
  }
  echo '</div>';
}

/**
 * When the post is saved, saves our school data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function school_save_meta_box_data( $post_id ) {
  global $school_meta_fields;
  /*
   * We need to verify this came from our screen and with proper authorization,
   * because the save_post action can be triggered at other times.
   */

  // Check if our nonce is set.
  if ( ! isset( $_POST['school_meta_box_nonce'] ) ) {
    return;
  }

  // Verify that the nonce is valid.
  if ( ! wp_verify_nonce( $_POST['school_meta_box_nonce'], 'school_meta_box' ) ) {
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
  // if ( ! isset( $_POST['school'] ) ) {
  //  return;
  // }

  foreach ($school_meta_fields as $field) {
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
  //$my_data = sanitize_text_field( $_POST['school'] );

  // Update the meta field in the database.
  //update_post_meta( $post_id, 'school', $my_data );
}
add_action( 'save_post', 'school_save_meta_box_data' ); 

?>