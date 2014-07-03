<?php get_header(); ?>

<?php  
	if ( wp_is_mobile() )
		get_template_part( 'mobile', 'home' );
	else 
		get_template_part( 'desktop', 'home' );
?>

<?php get_footer()?>