<div class="banner">
    <div id="carousel-banner" class="carousel slide" data-ride="carousel" data-interval="4000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <?php
            $banner_html = get_banner('cover');
            //echo $banner_html[0];
          ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <?php echo $banner_html[1];?>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-banner" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-banner" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
</div>


<section class="strong">
	<div class="container">
		<div class="strong-type">
		    <div class="items">
		        <h3><img src="<?php echo get_template_directory_uri(); ?>/images/title01.jpg" alt=""> 个性</h3>
		        <p>更大、更私密空间， 能够满足您不同场景下的个性化需求。</p>
		    </div>
		    <div class="items">
		        <h3><img src="<?php echo get_template_directory_uri(); ?>/images/title03.jpg" alt=""> 品质</h3>
		        <p>专人定期现场检查，保证无与伦比的住宿品质。</p>
		    </div>
		    <div class="items">
		        <h3><img src="<?php echo get_template_directory_uri(); ?>/images/title02.jpg" alt=""> 超值</h3>
		        <p>人均价格及附加服务使得别墅比高端酒店性价比更高。</p>
		    </div>
		    <div class="clearfix"></div>
		</div>
	</div>
</section>


<?php

// The Query
$discount_args = array(
	'post_type' => array('iedu_school', 'iedu_ed', 'iedu_visit', 'iedu_camp', 'iedu_certification', 'iedu_hotel'),
	'meta_query' => array(
		array(
			'key' => 'is_discount',
			'value' => '1'
		)
	)
);
$the_query = new WP_Query($discount_args);
$if_empty = '';
$if_one = '';
$discount_html = [];
$html_temp = '';

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		
		$html_temp = '<div class="col-sm-4"><a href="'.get_permalink().'">
		      			<div class="img-wrapper">
			      			<img class="img-responsive" src="'.wp_get_attachment_url( get_post_thumbnail_id() ).'" alt="'.get_the_title().'">
			      		</div>
		      			<h4>'.get_the_title().'</h4>
		      			<div>
		      				<div class="pull-right count-down" data-type="countDown" data-time="'.get_post_meta( get_the_ID(), 'discount_finish', true ).'"></div>
		      			</div>
		      		</a></div>';

		$discount_html[] = $html_temp;
	}
} else {
	$if_empty = 'hide';
}

if( !empty($discount_html) && (count($discount_html) <= 3) )
	$if_one = 'hide';

/* Restore original Post Data */
wp_reset_postdata();
?>
<section class="discount <?php echo $if_empty; ?> slideshow">
	<div class="container">
		<div id="carousel-discount" class="carousel slide" data-ride="carousel" data-interval="">
		  
		  <div class="section-header text-center">
		  	<!-- Controls -->
		  	<a class="left <?php echo $if_one; ?> carousel-control" href="#carousel-discount" data-slide="prev">
		  	    <span class="bg-icon-gray-left"></span>
		  	</a>
		  	<a class="right <?php echo $if_one; ?> carousel-control" href="#carousel-discount" data-slide="next">
		  	    <span class="bg-icon-gray-right"></span>
		  	</a>
		  	<h1>限时优惠</h1>
		  </div>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
	      	<?php  $row_counter = 0;

	      		foreach ($discount_html as $key => $value) {

	      			$if_active = ($key==0)? ' active':'';
	      			
	      			switch ($row_counter) {
	      				case 0:
	      					echo '<div class="item'.$if_active.' "><div class="row">';
	      					echo $value;
	      					break;
	      				case 1:
	      					echo $value;
	      					break;
	      				case 2:
	      					echo $value;
	      					echo '</div></div>';
	      					break;
	      				
	      				default:
	      					break;
	      			}

	      			( $row_counter >= 2 )? $row_counter = 0 : $row_counter = $row_counter + 1;
	      		}

	      	?>

		  </div>
		</div>
	</div>
</section>

<section class="topic">
	<div class="container">
		<div class="section-header">
			<h1>游学主题</h1>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-6">
						<a class="img-resp-block type1" href="<?php echo get_post_type_archive_link( 'iedu_ed' );?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/h-ed.jpg"></a>
					</div>
					<div class="col-sm-6">
						<a class="img-resp-block type1" href="<?php echo get_post_type_archive_link( 'iedu_visit' );?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/20140505182153VCdYqR.jpg" class="img-responsive"></a>
					</div>
				</div>
				<div class="row-block"></div>
				<a class="img-resp-block type2" href="<?php echo get_post_type_archive_link( 'iedu_certification' );?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/h-e-certification.jpg"></a>
			</div>
			<div class="col-sm-4">
				<a class="img-resp-block type3" href="<?php echo get_post_type_archive_link( 'iedu_camp' );?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/20140505182239kWdisj.jpg"></a>
			</div>
		</div>
	</div>
</section>

<!--<section class="hotel slideshow">
	<div class="container">
		<div id="carousel-hotel" class="carousel slide" data-ride="carousel" data-interval="">
		  
		  <div class="section-header text-center">
		  	<!-- Controls 
		  	<a class="left carousel-control" href="#carousel-hotel" data-slide="prev">
		  	    <span class="bg-icon-gray-left"></span>
		  	</a>
		  	<a class="right carousel-control" href="#carousel-hotel" data-slide="next">
		  	    <span class="bg-icon-gray-right"></span>
		  	</a>
		  	<h1>清迈住宿</h1>
		  </div>
		  <!-- Wrapper for slides 
		  <div class="carousel-inner">
		      <div class="item active">
		      	<div class="row">
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0.jpg" alt=""></a></div>
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(1).jpg" alt=""></a></div>
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(2).jpg" alt=""></a></div>
		      	</div>
		      </div>
		      <div class="item">
		      	<div class="row">
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0.jpg" alt=""></a></div>
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(1).jpg" alt=""></a></div>
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(2).jpg" alt=""></a></div>
		      	</div>
		      </div>
		  </div>
		</div>
	</div>
</section>-->

<section class="hotel slideshow">
	<div class="container">  
		  <div class="section-header text-center">
		  	<h1>清迈游学住宿</h1>
		  </div>

		      <div class="item active">
		      	<div class="row">
		      		<div class="col-sm-4"><a href="<?php echo get_term_link('villa', 'hotel_tax');?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0.jpg" alt=""><h4>清迈别墅</h4></a></div>
		      		<div class="col-sm-4"><a href="<?php echo get_term_link('apartment', 'hotel_tax');?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(1).jpg" alt=""><h4>清迈公寓</h4></a></div>
		      		<div class="col-sm-4"><a href="<?php echo get_term_link('hotel', 'hotel_tax');?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(2).jpg" alt=""><h4>清迈酒店</h4></a></div>
		      	</div>
		      </div>
		  </div>
	</div>
</section>