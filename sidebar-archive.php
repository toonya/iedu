<div class="sidebar">
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
</div>