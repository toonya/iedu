<?php get_header(); ?>

<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
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
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
</div>


<section class="strong">
	<div class="container">
		<div class="strong-type">
		    <div class="items">
		        <h3>个性</h3>
		        <p>更大、更私密空间， 能够满足您不同场景下的个性化需求。</p>
		    </div>
		    <div class="items">
		        <h3>品质</h3>
		        <p>专人定期现场检查，保证无与伦比的住宿品质。</p>
		    </div>
		    <div class="items">
		        <h3>超值</h3>
		        <p>人均价格及附加服务使得别墅比高端酒店性价比更高。</p>
		    </div>
		</div>
	</div>
</section>


<?php get_footer('home')?>