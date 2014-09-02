			<?php if ( ! wp_is_mobile() ): ?>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-xs-1 visible-xs"></div>
						<div class="col-md-6 col-xs-10 col-sm-12">
							<div class="row">
								<div class="col-xs-4 visible-xs"></div>
								<div class="col-xs-4">
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo-sm.png" alt="">
								</div>
								<div class="col-xs-4 visible-xs"></div>
								<div class="white-block col-xs-12 visible-xs"></div>
								<div class="col-xs-12 col-sm-8">
									<p>Lukasila路加国际成立于泰国清迈，致力于为国内学生提供K12教育咨询与学业规划，让更多中国人近距离地了解真正的欧美教学体制。作为泰国第二大都市，清迈具备了优质的教育资源，享有“泰北玫瑰”美誉，中英泰三语环境东西方文化在这座旅游城市里和谐交融，数十家专业国际性的高等学府在此建立分校，物美价廉的生活成本、简单健康的生活环境。让孩子接受单纯的、纯正的、地道的欧美教育。</p>
								</div>
							</div>
						</div>
						<div class="col-xs-1 visible-xs"></div>
						<div class="white-block col-xs-12 visible-xs visible-sm"></div>
						<div class="col-xs-1 visible-xs"></div>
						<div class="col-md-4 col-sm-8 col-xs-10">
							<div class="row">
								<div class="col-md-lg hidden-sm hidden-xs"></div>
								<div class="col-xs-3 visible-xs"></div>
								<div class="col-md-4 col-lg-5 col-xs-6">
									<h3>关于我们</h3>
									<ul>
										<li><a href="?page_id=60">&gt;&nbsp; <span class="pd-l-xs">关于路加</span></a></li>
										<li><a href="?page_id=65">&gt;&nbsp; <span class="pd-l-xs">服务团队</span></a></li>
									</ul>
								</div>
								<div class="col-xs-3 visible-xs"></div>
								<div class="white-block col-xs-12 visible-xs"></div>
								<div class="col-xs-3 visible-xs"></div>
								<div class="col-md-8 col-lg-7 col-xs-6">
									<h3>联系我们</h3>
									<div class="item">
										<span class="glyphicon glyphicon-earphone"></span>
										<span class="content"><span class="pd-l-xs">（+66）088-113-1130</span></span>
									</div>
									<div class="item">
										<span class="content" style="padding-left:16px;"><span class="pd-l-xs">（+86）139 5800 1556</span></span>
									</div>
									<div class="item">
										<span class="fa fa-qq"></span>
										<span class="content"><span class="pd-l-xs">1990139999</span></span>
									</div>
									<div class="item">
										<span class="content" style="padding-left:16px;"><span class="pd-l-xs">2561611309</span></span>
									</div>
									<div class="item">
										<span class="content" style="padding-left:16px;"><span class="pd-l-xs">2847842178</span></span>
									</div>
									<div class="item">
										<span class="fa fa-map-marker" style="padding-left:4px;"></span>
										<span class="content"><span class="pd-l-xs">泰国清迈古城边</span></span>
									</div>
									<!--<div class="item">
										<span class="glyphicon glyphicon-envelope"></span>
										<span class="content"><span class="pd-l-xs">service@senseluxury.com</span></span>
									</div>-->
								</div>
								<div class="col-xs-3 visible-xs"></div>
							</div>
						</div>
						<div class="col-xs-1 visible-xs"></div>
						<div class="white-block col-xs-12 visible-xs"></div>
						<div class="col-sm-2 visible-sm"></div>
						<div class="col-xs-4 visible-xs"></div>
						<div class="col-md-2 col-sm-2 col-xs-4">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-9">
									<?php if( get_option( 'qr-code' ) ):; ?>
									<img class="img-responsive" src="<?php echo esc_attr( get_option( 'qr-code' ) ); ?>" alt="">
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div> <!-- /. row -->
				</div>
				<div class="copyright"><div class="container">
					<p>Copyright © 2014 Lukasila.</p>
				</div></div>
			</footer>
			<?php get_sidebar('contact'); ?>
			<?php endif; ?>
		</div>
		<?php if ( wp_is_mobile() ):  ?>

		<div class="mobile-footer">
			<a href="tel:<?php echo get_option( 'phone-number' ); ?>" class="phone-call"><span class="glyphicon glyphicon-earphone"></span></a>
		</div>
		
		<?php endif; ?>
    	<script src="<?php echo get_template_directory_uri()?>/js/vendor/jquery-1.11.0.min.js"></script>
    	
        <script src="<?php echo get_template_directory_uri()?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/moment.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/twix.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/bootstrap-hover-dropdown.min.js"></script>

        <script src="<?php echo get_template_directory_uri()?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/inc/js/jquery.cookie.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>

        <script src="http://localhost:1337/livereload.js"></script>

        <?php wp_footer()?>
    </body>
</html>