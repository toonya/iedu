<?php 
/**
 * Template Name: News
 */

get_header(); ?>

<div class="current-navigation">
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="<?php bloginfo('url'); ?>">首页</a></li>
		  <?php 
		  	echo '<li class="active">'. get_the_title() .'</li>';
		  ?>
		</ol>
	</div>
</div>

<div class="primary custom-single main-content">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">新闻</div>
			<div class="panel-body">
			<div class="news-list">
			<?php $news_args = array(
							   		'post_type' => 'post'
				               ); 
				  $news_query = new WP_Query($news_args);

				  //print_r($news_query);

				  if ( $news_query->have_posts() ) {
				  	while ( $news_query->have_posts() ) {
				  		$news_query->the_post();
				  		
				  		echo '<div class="news-item"><a href="'.get_permalink().'"><span><i class="fa-rss fa"></i><span class="pd-l-sm">'.get_the_title().'</span></span></a>'.'<span class="time pull-right pd-l-sm">--'.get_the_date('m月d日').'</span><div class="clearfix"></div></div>';
				  	}
				  } else {
				  	
				  }
			?>
			</div> <!-- /. news-list -->
			</div> 
		</div>
	</div> <!-- /.container -->
</div> <!-- /. primary -->

<?php get_footer()?>

