

<?php while ( have_posts() ) : the_post(); ?>
	<?php  
		$meta = get_post_meta( get_the_ID() );

		$meta_name = array('location', 'edu_sys', 'course_intro', 'fee', 'edu_info', 'requirement', 'fee_agreement', 'service_process', 'apply_form');

		foreach ($meta_name as $name) {
			$meta[$name] = ( isset($meta[$name]) ) ? $meta[$name][0] : '' ;
		}

		$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$coverpage = $full_image_url[0];
		$img_counter = 1;
		$meta_showcase = get_post_meta( $post->ID, 'showcase', true );
		if($meta_showcase){
			foreach($meta_showcase as $index => $imgSrc) {
				$img_counter += sizeof($img_counter);
				$meta_showcase[$index] = preg_replace('/-150x150/', '', $imgSrc);
			}
		}
	?>
	<div class="row">
		<div class="col-sm-9">
			<div class="row">
				<div class="col-sm-8">
					<h1><?php the_title(); ?></h1>
					<p class="sec-title"><?php echo $meta['location'] ?></p>
				</div>
				<div class="col-sm-4 text-right price">
					<strong><?php echo $meta['fee']; ?></strong>/人
				</div>
			</div>
		</div>
		<div class="col-sm-3">share-area</div>
	</div> <!-- /. row -->

	<div class="row">
		<div class="col-sm-9">
			<div id="carousel" class="carousel post-showcase slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel" data-slide-to="0" class="active"></li><?php
					for($i=1;$i<$img_counter;$i++)
			    		echo '<li data-target="#carousel" data-slide-to="'.$i.'"></li>';
			    ?>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img class="img-responsive" src="<?php echo $coverpage;?>?imageView2/0/w/1400/q/20" alt="cover page">
			    </div><?php
				    for($i=1;$i<$img_counter;$i++){
				    	$index = $i-1;
					    echo '<div class="item"><img class="img-responsive" src="'.$meta_showcase[$index].'?imageView/0/w/1400/h/800/q/20" alt="o"></div>';
				    }
			    ?>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div> <!-- /. carousel -->

			<div class="white-block-12"></div>
			<nav class="in-page-nav" data-spy="affix">
				<ul class="nav nav-pills nav-justified">
				  <li><a href="#main-content">学校介绍</a></li>
				  <?php  
				  		$content_list = array(
							'edu_info'=>'教学&详情', 
							'requirement' => '入学&要求', 
							'fee_agreement' => '费用&条款',
							'service_process' => '服务流程',
							'apply_form' => '申请表格' ); 
				  		foreach ($content_list as $key => $value) {
				  			echo '<li><a href="#'.$key.'">'.$value.'</a></li>';
				  		}
				  ?>
				</ul>
			</nav> <!-- /. nav -->

			<div class="white-block"></div>
			<div id="main-content">
				<?php the_content(); ?>
			</div>
			<hr>
			
			<?php foreach ($content_list as $key => $value) {
					if( ! empty($meta[$key]) ){ ?>
						<section id="<?php echo $key; ?>">
							<h2><?php echo $value ?></h2>
							<div class="section-content">
								<?php echo esc_html($meta[$key]); ?>
							</div>
						</section>	
					<?php ;}
				}
			?>

		</div>
		<div class="col-sm-3">
			<?php get_sidebar( 'single' ); ?>
			<?php get_sidebar( 'archive' ); ?>
		</div> <!-- /. sidebar -->
	</div>

<?php endwhile; // end of the loop. ?>


