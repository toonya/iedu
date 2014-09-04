
<?php $news_args = array(
				   		'post_type' => 'post'
	               ); 
	  $news_html = [];
	  $news_count = 0;
	  $news_query = new WP_Query($news_args);

	  //print_r($news_query);

	  if ( $news_query->have_posts() ) {
	  	while ( $news_query->have_posts() ) {
	  		$news_query->the_post();
	  		
	  		$news_html[] = '<div class="news-item"><a href="'.get_permalink().'"><span><i class="fa-rss fa"></i><span class="pd-l-sm">'.get_the_title().'</span></span></a>'.'<span class="time pull-right pd-l-sm">--'.get_the_date('m月d日').'</span><div class="clearfix"></div></div>';
	  		$news_count = $news_count + 1;
	  	}
	  } else {
	  	
	  }
?>

<div class="sidebar">
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					<h4 class="panel-title">新闻 <span class="badge pull-right"><?php echo $news_count ?></span></h4>
			    </a>
			</div>
			<div id="collapseOne" class="panel-collapse collapse <?php if (!wp_is_mobile()) echo 'in'; ?>">
				<div class="news-list">
					<?php foreach ($news_html as $key => $news) {		
						echo $news;
					} ?>
				</div> <!-- /. news-list -->
			</div> 
		</div>
	</div>
</div>