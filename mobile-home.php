<?php

// The Query
$mobile_home_post_type = array(
	'post_type' => array('iedu_school', 'iedu_certification', 'iedu_camp', 'iedu_ed', 'iedu_visit'),
);
$the_query = new WP_Query($mobile_home_post_type);
$if_empty = '';
$discount_html = [];
$html_temp = '';

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		
		$html_temp = '<div class="item">
						<a href="'.get_permalink().'">
							<div class="img-container">
			      				<img class="img-responsive" src="'.wp_get_attachment_url( get_post_thumbnail_id() ).'" alt="'.get_the_title().'">
			      			</div>
			      			<div class="describe">
			      				<div class="row">
			      					<div class="col-xs-6">
			      						<h4>'.get_the_title().'</h4>
			      					</div>
			      					<div class="col-xs-6 text-right">
										<div class="count-down" data-type="countDown" data-time="'.get_post_meta( get_the_ID(), 'discount_finish', true ).'"></div>
			      					</div>
			      				</div>
			      			</div>
		      			</a>
		      		</div>';

		$discount_html[] = $html_temp;
	}
} else {
	$if_empty = 'hide';
}

/* Restore original Post Data */
wp_reset_postdata();
?>

<div class="mobile-content">
	<div class="container">
		<div class="discount-list">
			<?php  
				foreach ($discount_html as $key => $value) {
					echo $value;
				}
			?>
		</div>
	</div>
</div>