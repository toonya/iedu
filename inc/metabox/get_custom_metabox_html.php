<?php

// finish it later
function get_toonya_metabox_html($post_id, $field, $horizontal){
	$value = get_post_meta( $post_id, $field['id'], true );
	$html = '';

	switch ($field['type']) {
		case 'text':
			$html .= sprintf( 
				"<div class='form-group'>
					<label class='%s control-label' for='%s'>%s</label>
					%s<input class='form-control' type='text' id='%s' name='%s' value='%s' />%s",
				( $horizontal == 'true' ) ? "col-sm-2" : "",
				$field['id'],
				esc_html($field['label']),
				( $horizontal == 'true' ) ? "<div class=\"col-sm-8\">" : "",
				$field['id'],
				$field['id'],
				esc_attr( $value ),
				( $horizontal == 'true' ) ? "</div>" : ""
		    );
			break;
		case 'textarea':
			$html .= sprintf( 
				"<div class='form-group'>
					<label class='%s control-label' for='%s'>%s</label>
					%s<textarea rows='5' class='form-control' type='text' id='%s' name='%s' />%s</textarea>%s",
				( $horizontal == 'true' ) ? "col-sm-2" : "",
				$field['id'],
				esc_html($field['label']),
				( $horizontal == 'true' ) ? "<div class=\"col-sm-8\">" : "",
				$field['id'],
				$field['id'],
				esc_attr( $value ),
				( $horizontal == 'true' ) ? "</div>" : ""
		    );
			break;
		case 'checkbox':
			$html.= '<div class="checkbox">';
			$html .= '<label><input value=1 '.checked( $value, '1', false ).' id="'.$field['id'].'" name="'.$field['id'].'" type="checkbox"> '.$field['label'].'</label>';
			break;

		
		default:
			# code...
			break;
	}

	$html.= '</div>';

	return $html;
}

?>