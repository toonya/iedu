<?php get_header(); ?>

<div class="banner">
    <div id="carousel-banner" class="carousel slide" data-ride="carousel" data-interval="4000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <?php
            $banner_html = get_banner();
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

<section class="preferential slideshow">
	<div class="container">
		<div id="carousel-preferential" class="carousel slide" data-ride="carousel" data-interval="">
		  
		  <div class="section-header text-center">
		  	<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-preferential" data-slide="prev">
		  	    <span class="bg-icon-gray-left"></span>
		  	</a>
		  	<a class="right carousel-control" href="#carousel-preferential" data-slide="next">
		  	    <span class="bg-icon-gray-right"></span>
		  	</a>
		  	<h1>限时优惠</h1>
		  </div>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		      <div class="item active">
		      	<div class="row">
		      		<div class="col-sm-4"><a href="">
		      			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0.jpg" alt="">
		      			<h4>标题</h4>
		      			<div>
		      				<div class="pull-right tag">海景</div>
		      				<p class="describe">描述</p>
		      			</div>
		      		</a></div>
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
						<a class="img-resp-block type1" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/h-ed.jpg"></a>
					</div>
					<div class="col-sm-6">
						<a class="img-resp-block type1" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/20140505182153VCdYqR.jpg" class="img-responsive"></a>
					</div>
				</div>
				<div class="row-block"></div>
				<a class="img-resp-block type2" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/h-e-certification.jpg"></a>
			</div>
			<div class="col-sm-4">
				<a class="img-resp-block type3" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/20140505182239kWdisj.jpg"></a>
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
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0.jpg" alt=""></a><a href=""><h4>清迈别墅</h4></a></div>
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(1).jpg" alt=""></a><a href=""><h4>清迈公寓</h4></a></div>
		      		<div class="col-sm-4"><a href=""><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/uploads/0(2).jpg" alt=""></a><a href=""><h4>清迈酒店</h4></a></div>
		      	</div>
		      </div>
		  </div>
	</div>
</section>

<?php get_footer()?>