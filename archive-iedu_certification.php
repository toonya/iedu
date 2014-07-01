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

<div class="primary custom-post-type <?php echo get_post_type(); ?>">
	<div class="container">
    	<div class="archive-title"><img src="<?php echo get_template_directory_uri(); ?>/images/title-iedu-english-certification.png"></div>
		<div class="row">
			<div class="col-sm-3">
				<?php get_sidebar( 'archive' ); ?>
			</div> <!-- /. sidebar -->
			<div class="col-sm-9">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php  
						$meta = get_post_meta( get_the_ID() );

						$exam_info = ( isset($meta['exam_info']) ) ? $meta['exam_info'][0]:'';
						$teacher_info = ( isset($meta['teacher_info']) ) ? $meta['teacher_info'][0]:'';
						$apply_form = ( isset($meta['apply_form']) ) ? $meta['apply_form'][0]:'';
						$service_process = ( isset($meta['service_process']) ) ? $meta['service_process'][0]:'';
					?>
					<div class="archive-item-list">
						<div class="item">
							<div class="left">
								<?php echo get_the_post_thumbnail(get_the_ID(), 'large') ?>
							</div> <!-- /.left -->
							<div class="right">
								<h3 class="page-title"><?php the_title();?> </h3>

								<?php if( !empty($exam_info) || !empty($teacher_info) ): ?>
									<div class="well">
										<div class=""><?php echo $exam_info; ?></div>
										<div class=""><?php echo $teacher_info; ?></div>
									</div>
								<?php endif; ?>

								<div class="intro"><?php echo $apply_form; ?></div>

								<div class="bottom">
									<div class="row">
										<div class="col-sm-6">
											<?php if( !empty($service_process) ): ?>
												<strong><?php echo $service_process; ?></strong>
											<?php endif; ?>
										</div>
										<div class="col-sm-6 text-right">
											<a href="<?php the_permalink(); ?>" class="detail">查看详情 <span class="glyphicon glyphicon-chevron-right"></span></a>
										</div>
									</div>
								</div>
							</div> <!-- /.right -->
						</div>
					</div>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div> <!-- /. primary -->

<?php get_footer()?>