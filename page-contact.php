<?php 
/**
 * Template Name: Contact Page
 */

get_header();?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		$meta = get_post_meta( get_the_ID());
?>

<div class="primary" style="background:#fff">
	<div class="container">
		<div class="white-block hidden-xs"></div>

		<form id="contact" class="simple" role="form">
			<div class="row">
				<div class="col-md-3 col-xs-12 row visible-xs right">
					<div class="contact-item hidden-xs"><i class="icon icon1"></i><i><?php echo esc_html( get_option( 'phone-number' ) ); ?></i></div>
				    <div class="contact-item col-xs-6"><i class="icon icon2"></i><i>admin@lukasila.com</i></div>
				    <div class="contact-item col-xs-6"><i class="icon icon3"></i><i>泰国清迈宁曼路（近MAYA商城）</i></div>
				</div>
				<div class="col-md-9 col-xs-12 left">
					<div class="form-group" data-required>
						<label for="name" class="control-label">姓名 <span class="text-danger v-middle">*</span></label>
						<div class="row">
							<div class="col-md-7 col-xs-12">
								<input tabindex="1" type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
					    </div>
					</div>
					<div class="form-group" data-required>
						<label for="email" class=" control-label">Email <span class="text-danger v-middle">*</span></label>
						<div class="row">
							<div class="col-md-7 col-xs-12">
								<input tabindex="2" type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
					    </div>
					</div>
					<div class="form-group" data-required>
						<label for="subject" class=" control-label">标题 <span class="text-danger v-middle">*</span></label>
						<div class="">
							<input tabindex="3" type="text" class="form-control" id="subject" name="subject" placeholder="Title">
					    </div>
					</div>
					<div class="form-group" data-required>
						<label for="content" class=" control-label">描述 <span class="text-danger v-middle">*</span></label>
						<div class="">
							<textarea tabindex="4" class="form-control" rows="8" id="content" name="content" placeholder="Content"></textarea>
					    </div>
					</div>
				</div>
                <div class="col-md-3 col-xs-12 hidden-xs right">
                	<div class="contact-item"><i class="icon icon1"></i><i><?php echo esc_html( get_option( 'phone-number' ) ); ?></i></div>
                    <div class="contact-item"><i class="icon icon2"></i><i>admin@lukasila.com</i></div>
                    <div class="contact-item"><i class="icon icon3"></i><i>泰国清迈宁曼路（近MAYA商城）</i></div>
                </div>
			</div>
			<div class="mail-state">
				<div class="text-success hide" data-sending>
					<span class="glyphicon glyphicon-refresh"></span> 正在发送
				</div>
				<div class="text-success hide" data-done>
					<span class="glyphicon glyphicon-ok"></span> 正在发送
				</div>
				<div class="text-danger hide" data-error>
					<span class="glyphicon glyphicon-remove"></span> 发送失败, 请稍候再试。
				</div>
			</div>
			<button class="contact-submit" type="submit" disabled>提 交</button>
		</form>
		<div class="white-block"></div>
	</div>
</div>

<?php
	endwhile;
else :
	echo wpautop( '正在添加' );
endif;
?>


<?php get_footer()?>