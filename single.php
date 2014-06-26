<?php get_header(); ?>

<div class="current-navigation">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="<?php bloginfo('url'); ?>">首页</a></li>
		  <?php 
		  	$obj = get_post_type_object( get_post_type() );
		  	if( $obj ) {
		  		echo '<li class="active"><a href="' . get_post_type_archive_link( get_post_type() ) . '">'. $obj->labels->singular_name .'</a></li>';
		  		//echo '<li class="active">'. $obj->labels->singular_name .'</li>';
		  	}

		  	echo '<li class="active">'. get_the_title() .'</li>';
		  ?>
		</ol>
	</div>
</div>

<div class="primary custom-single <?php echo get_post_type(); ?>">
	<div class="container">
		<?php get_template_part( 'content', 'single'); ?>
	</div>
</div> <!-- /. primary -->

<?php get_footer()?>