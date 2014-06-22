<?php
// ----------------------------------------
// ! This is a basic bootstrap navigation.
// *
// * <li><a href="">首页</a></li>
// ----------------------------------------
class Bootsrap_basic extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     *
     * Note: Menu objects include url and title properties, so we will use those.
     */

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		//echo ' '.get_the_ID().' '.$item->object_id.'<br />';
		//$item->object_id is string, get_the_ID(),returns a int.
        $output .= sprintf( "\n<li %s><a href='%s'>%s</a></li>\n",
            ( $item->object_id == get_the_ID() ) ? ' class="active"' : '',
            $item->url,
            $item->title
        );
    }

}

// ----------------------------------------
// ! this is a special navigation type.
// * hover with another language.
// ----------------------------------------

class Bootsrap_two_langs extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id'
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     *
     * Note: Menu objects include url and title properties, so we will use those.
     */

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		global $post;

    	$second_title = get_post_meta( $item->object_id, 'second_title', true );

		//echo $item->object_id.' '.$second_title.'<br />';
		if(empty($second_title)){
	        $output .= sprintf( "\n<li %s><a href='%s'>%s</a></li>\n",
	            ( !empty($post) && ( $item->object_id == $post->ID ) ) ? ' class="active"' : '',
	            $item->url,
	            $item->title
			);
        }
        else{
	        $output .= sprintf( "\n<li %s><a href='%s'><span>%s</span><span>%s</span></a></li>\n",
	            ( !empty($post) && ( $item->object_id == $post->ID ) ) ? ' class="active"' : '',
	            $item->url,
	            $item->title,
	            $second_title
			);
        }
    }
}