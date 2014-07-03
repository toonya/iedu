<?php get_header(); ?>

<div class="current-navigation">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="<?php bloginfo('url'); ?>">首页</a></li>
		  <?php 
		  	echo '<li class="active"><a href="' . get_permalink( get_page_by_title('新闻') ) . '">新闻</a></li>';

		  	echo '<li class="active">'. get_the_title() .'</li>';
		  ?>
		</ol>
	</div>
</div>

<div class="primary custom-single <?php echo get_post_type(); ?>">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-sm-8">
				<h1><?php the_title(); ?></h1>
				<div class="text-right"><?php echo '--'.get_the_date('m月d日'); ?></div>
			</div>
			<div class="col-sm-3">
				<?php get_template_part( 'content', 'share' ); ?>
			</div>
		</div> <!-- /. row -->

		<div class="row">
			<div class="col-sm-9">
				<div id="main-content">
					<div class="white-block"></div>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-sm-3">
				<!-- get news sidebar -->
				<div class="white-block"></div>
				<?php get_sidebar( 'archive' ); ?>
			</div> <!-- /. sidebar -->
		</div>
		<?php endwhile; // end of the loop. ?>
	</div> <!-- /.container -->
</div> <!-- /. primary -->

<?php get_footer()?>

