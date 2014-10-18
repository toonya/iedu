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
    	<div class="archive-title"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/title-iedu-english-certification.png"></div>
		<div class="row">
			<div class="col-sm-3">
				<?php get_sidebar( 'archive' ); ?>
			</div> <!-- /. sidebar -->
			<div class="col-sm-9">
				<div class="archive-item-list">

					<?php while ( have_posts() ) : the_post(); ?>
						<?php  
							$meta = get_post_meta( get_the_ID() );

							$exam_info = ( isset($meta['exam_info']) ) ? $meta['exam_info'][0]:'';
							$teacher_info = ( isset($meta['teacher_info']) ) ? $meta['teacher_info'][0]:'';
							$apply_form = ( isset($meta['apply_form']) ) ? $meta['apply_form'][0]:'';
							$service_process = ( isset($meta['service_process']) ) ? $meta['service_process'][0]:'';
						?>
						<div class="item">
							<div class="left">
								<img style="height:100%;" class="img-responsive" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large')[0]; ?>" alt="">
							</div> <!-- /.left -->
							<div class="right">
								<h3 class="page-title"><?php the_title();?> </h3>

								<?php if( !empty($exam_info) || !empty($teacher_info) ): ?>
                                		<div class=""><?php echo $exam_info; ?></div>
									<div class="well">			
										<div class=""><?php echo wp_trim_words($teacher_info, 100, ' ...'); ?></div>
									</div>
								<?php endif; ?>

								<div class="intro"><?php echo '<a href="'.$apply_form.'"><span style="top: 2px;" class="glyphicon glyphicon-download"></span> 下载申请表</a>'; ?></div>
								
								<div class="bottom">
									<div class="row">
										<div class="col-sm-6">
											<?php if( !empty($service_process) ): ?>
												<!-- <strong><?php echo $service_process; ?></strong> -->
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
		</div>
	</div>
</div> <!-- /. primary -->

<?php get_footer()?>