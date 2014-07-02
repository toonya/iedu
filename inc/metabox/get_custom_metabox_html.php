<?php

function get_horizontal_metabox_html($post_id, $field) {
	$value = get_post_meta( $post_id, $field['id'], true );
	$html = '';

	
	switch ($field['type']) {
		case 'text':
		$html.= '<div class="form-group">';
		$html .= '<label class="control-label" for="'.$field['id'].'">'.$field['label'].'</label>';
		$html .= '<input class="form-control" type="text" id="'.$field['id'].'" name="'.$field['id'].'" value="' . esc_attr( $value ) . '" />';
		break;

		case 'textarea':
		$html.= '<div class="form-group">';
		$html .= '<label class="control-label" for="'.$field['id'].'">'.$field['label'].'</label>';
		$html .= '<textarea rows="5" class="form-control" type="text" id="'.$field['id'].'" name="'.$field['id'].'">' . esc_attr( $value ) . '</textarea>';
		break;

		case 'checkbox':
		$html.= '<div class="checkbox">';
		$html .= '<label><input '.checked( $value, 1, false ).' id="'.$field['id'].'" name="'.$field['id'].'" value="1" type="checkbox"> '.$field['label'].'</label>';
		break;

		default:
		break;
	}
	$html.= '</div>';

	return $html;
}

function get_vertical_metabox_html($post_id, $field) {
	$value = get_post_meta( $post_id, $field['id'], true );
	$html = '';

	$html.= '<div class="form-group" role="form">';
	switch ($field['type']) {
		case 'text':
		$html .= '<label class="col-sm-2 control-label" for="'.$field['id'].'">'.$field['label'].'</label>';
		$html .= '<div class="col-sm-8"><input class="form-control" type="text" id="'.$field['id'].'" name="'.$field['id'].'" value="' . esc_attr( $value ) . '" /></div>';
		break;

		case 'textarea':
		$html .= '<label class="col-sm-2 control-label" for="'.$field['id'].'">'.$field['label'].'</label>';
		$html .= '<div class="col-sm-8"><textarea rows="5" class="form-control" type="text" id="'.$field['id'].'" name="'.$field['id'].'">' . esc_attr( $value ) . '</textarea></div>';
		break;

		default:
		break;
	}
	$html.= '</div>';

	return $html;
}

?>