<div class="mobile-content">
	<div class="container">
		<div class="discount-list">
			<?php

			// The Query
			$post_types = array('iedu_school', 'iedu_certification', 'iedu_camp', 'iedu_ed', 'iedu_visit');

			foreach ($post_types as $key => $post_type) {
				
				$the_args = array(
					'post_type' => $post_type,
				);

				$the_query = new WP_Query($the_args);
				$the_post_object = get_post_type_object($post_type);

				// The Loop
				if ( $the_query->have_posts() ) {?>

					<div class="bg-primary post-type-title"><?php echo $the_post_object->labels->singular_name ?></div>

					<?while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						
						<div class="item">
							<a href="<?php echo get_permalink() ?>">
								<div class="img-container">
				      				<img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="<?php the_title(); ?>">
				      			</div>
				      			<div class="describe">
				      				<div class="row">
				      					<div class="col-xs-6">
				      						<h4><?php the_title(); ?></h4>
				      					</div>
				      					<div class="col-xs-6 text-right">
											<div class="count-down" data-type="countDown" data-time="<?php echo get_post_meta( get_the_ID(), 'discount_finish', true ) ?>"></div>
				      					</div>
				      				</div>
				      			</div>
			      			</a>
			      		</div>

						<?
					}
				} 
				
				/* Restore original Post Data */
				wp_reset_postdata();

			}
			?>
		</div>
	</div>
</div>