<?php get_header();?>

<div class="primary">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1 class="page-title">
				<?php the_title();?>
				<small>
					<?php
						if(!empty($meta["second_title"]))
							echo $meta["second_title"][0];
					?>
				</small>
			</h1>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>

<?php get_footer()?>