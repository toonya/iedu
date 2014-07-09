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
    	<div class="archive-title"><img src="<?php echo get_template_directory_uri(); ?>/images/title-iedu-international-visit.png"></div>
		<div class="row">
			<div class="col-sm-3">
				<?php get_sidebar( 'archive' ); ?>
			</div> <!-- /. sidebar -->
			<div class="col-sm-9">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php  
						$meta = get_post_meta( get_the_ID() );

						$location = ( isset($meta['location']) ) ? $meta['location'][0]:'';
						$num_of_people = ( isset($meta['num_of_people']) ) ? $meta['num_of_people'][0]:'';
						$language = ( isset($meta['language']) ) ? $meta['language'][0]:'';
						$fee = ( isset($meta['fee']) ) ? $meta['fee'][0]:'';
					?>
					<div class="archive-item-list">
						<div class="item">
							<div class="left">
								<img style="height:100%;" class="img-responsive" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large')[0]; ?>" alt="">
							</div> <!-- /.left -->
							<div class="right">
								<h3 class="page-title"><?php the_title();?> </h3>

								<?php if( !empty($location) || !empty($num_of_people) ): ?>
									<div class="well">
										<div class="">目的地：<?php echo $location; ?></div>
										<div class="">参团人数：<?php echo $num_of_people; ?></div>
									</div>
								<?php endif; ?>

								<div class="intro"><?php echo $language; ?></div>

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
					</div>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div> <!-- /. primary -->

<?php get_footer()?>