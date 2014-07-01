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
		<div class="white-block"></div>

		<form id="contact" class="simple" role="form">
			<div class="row">
				<div class="col-md-9" style="padding-right:70px;">
					<div class="form-group" data-required>
						<label for="name" class="control-label">姓名 <span class="text-danger v-middle">*</span></label>
						<div class="row">
							<div class="col-md-7">
								<input tabindex="1" type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
					    </div>
					</div>
					<div class="form-group" data-required>
						<label for="email" class=" control-label">Email <span class="text-danger v-middle">*</span></label>
						<div class="row">
							<div class="col-md-7">
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
                <div class="col-md-3" style="border-left:1px solid #f1f1f1;">
                	<div class="contact-item"><i class="icon icon1"></i><i>400-9217-966</i></div>
                    <div class="contact-item"><i class="icon icon2"></i><i>admin@lukaslla.com</i></div>
                    <div class="contact-item"><i class="icon icon3"></i><i>泰国，清迈，某某区某某路某号，某大厦</i></div>
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