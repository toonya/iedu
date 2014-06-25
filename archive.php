<?php get_header();?>

<?php get_sidebar( 'archive' ); ?>

<div class="primary">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1 class="page-title">
				<?php the_title();?>
			</h1>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>

<?php get_footer()?>