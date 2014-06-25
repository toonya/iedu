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
		<div class="row">
			<div class="col-sm-3">
				<?php get_sidebar( 'archive' ); ?>
			</div> <!-- /. sidebar -->
			<div class="col-sm-9">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php  
						$meta = get_post_meta( get_the_ID() );

						$location = ( isset($meta['location']) ) ? $meta['location'][0]:'';
						$edu_sys = ( isset($meta['edu_sys']) ) ? $meta['edu_sys'][0]:'';
					?>
					<div class="archive-item-list">
						<div class="item">
							<div class="left">
								<?php echo get_the_post_thumbnail(get_the_ID(), 'large') ?>
							</div> <!-- /.left -->
							<div class="right">
								<h3 class="page-title"><?php the_title();?> </h3>
								<div class="well">
									<div class="location"><?php echo $location; ?></div>
									<div class="edu_sys"><?php echo $edu_sys; ?></div>
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