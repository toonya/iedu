<?php get_header();?>

<div class="current-navigation">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="<?php bloginfo('url'); ?>">首页</a></li>
		  <?php 
		  	$obj = get_post_type_object( get_post_type() );
		  	if( $obj ) {
		  		//echo '<li class="active"><a href="' . get_post_type_archive_link( get_post_type() ) . '">'. $obj->labels->singular_name .'</a></li>';
		  		echo '<li class="active">'. $obj->labels->singular_name .'</li>';
		  	}

		  	//echo '<li class="active">'. get_the_title() .'</li>';
		  ?>
		</ol>
	</div>
</div>

<div class="primary custom-post-type archive_<?php echo get_post_type(); ?>">
	<div class="container">
    	<div class="archive-title"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/title_iedu_ed.png"></div>
		<div class="row">
			<div class="col-sm-3">
				<?php get_sidebar( 'archive' ); ?>
			</div> <!-- /. sidebar -->
			<div class="col-sm-9">
				<div class="archive-item-list">

					<?php while ( have_posts() ) : the_post(); ?>
						<?php  
							$meta = get_post_meta( get_the_ID() );

							$location = ( isset($meta['location']) ) ? $meta['location'][0]:'';
							$edu_sys = ( isset($meta['edu_sys']) ) ? $meta['edu_sys'][0]:'';
							$course_intro = ( isset($meta['course_intro']) ) ? $meta['course_intro'][0]:'';
							$fee = ( isset($meta['fee']) ) ? $meta['fee'][0]:'';
						?>
						
						<div class="item">
							<div class="left">
								<img style="height:100%;" class="img-responsive" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large')[0]; ?>" alt="">
							</div> <!-- /.left -->
							<div class="right">
								<h3 class="page-title"><?php the_title();?> </h3>

								<?php if( !empty($location) || !empty($edu_sys) ): ?>
									<div class="well">
										<div class=""><?php echo $location; ?></div>
										<div class=""><?php echo $edu_sys; ?></div>
									</div>
								<?php endif; ?>

								<div class="intro"><?php echo $course_intro; ?></div>

								<div class="bottom">
									<div class="row">
										<div class="col-sm-6">
											<?php if( !empty($fee) ): ?>
												<strong><?php echo $fee; ?></strong>/人
											<?php endif; ?>
										</div>
										<div class="col-sm-6 text-right btn-view-detail">
											<a href="<?php the_permalink(); ?>" class="detail">查看详情 <span class="glyphicon glyphicon-chevron-right"></span></a>
										</div>
									</div>
								</div>
							</div> <!-- /.right -->
						</div>
					<?php endwhile; // end of the loop. ?>

				</div>  <!-- /. end archive-item-list -->
					
				<?php
				global $wp_query;

				$big = 999999999; // need an unlikely integer

				echo '<div class="pagination-nav">';

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );

				echo '</div>';
				?>
			</div>
		</div> <!-- /. row -->
	</div>
</div> <!-- /. primary -->

<?php get_footer()?>