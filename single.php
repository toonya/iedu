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
	<?php while ( have_posts() ) : the_post(); ?>
		<?php  
			$meta = get_post_meta( get_the_ID() );

			$meta_name = array('location', 'edu_sys', 'course_intro', 'fee', 'edu_info', 'requirement', 'fee_agreement', 'service_process', 'apply_form', 'student_num', 'teacher_num', 'grade_area');

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
					<div class="col-xs-8">
						<h1><?php the_title(); ?></h1>
						<p class="sec-title"><?php echo $meta['location'] ?></p>
					</div>
					<div class="col-xs-4 text-right price">
						<strong><?php echo $meta['fee']; ?></strong>/人
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<?php get_template_part( 'content', 'share' ); ?>
			</div>
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
				<nav class="in-page-nav">
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
									<?php 
									switch ($key) {
											case 'apply_form':
												echo '<a href="'.$meta[$key].'"><span style="top: 2px;" class="glyphicon glyphicon-download"></span> 下载</a>';
												break;
											
											default:
												echo wpautop($meta[$key]);
												break;
										}	
									?>
								</div>
							</section>	
						<?php ;}
					}
				?>

			</div>
			<div class="col-sm-3">

				<div class="sidebar">
					<div class="panel panel-default">
					  <div class="panel-body">
					    <div class="sidebar-items">
					    	<?php   $sidebar_list = array(
					    	    		'edu_sys' => '教学系统',
					    	    		'student_num' => '学生人数',
					    	    		'teacher_num' => '老师人数',
					    	    		'grade_area' => '教学年级'
					    			 					    	);
					    
					    			foreach ( $sidebar_list as $key => $value ) {
					    				echo '<div class="item">
					    						<div class="row">
					    							<div class="col-sm-6">' .$value. ' :</div>
					    							<div class="text-right col-sm-6">
					    								<strong>' .$meta[$key]. '</strong>
					    							</div>
					    						</div>
					    					  </div>';
					    			}
					    	?>
					    </div>
					  </div>
					</div>
				</div>

				<!-- get news sidebar -->
				<?php get_sidebar( 'archive' ); ?>
			</div> <!-- /. sidebar -->
		</div>
	</div>
</div> <!-- /. primary -->
<?php endwhile; // end of the loop. ?>


<?php get_footer()?>

