<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">

        <script src="<?php echo get_template_directory_uri()?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php wp_head()?>
    </head>
    <body>

		<nav class="mobile visible-xs">
			<div class="container">
			<?php
				$head_navigation = array(
					'theme_location'  => 'header-menu',
					'menu'            => '',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav nav-pills',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => false,
					'before'          => '',
					'after'           => '',
					'link_before'     => '<span>',
					'link_after'      => '</span>',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new Bootsrap_two_langs()
				);

				wp_nav_menu( $head_navigation );
			?>
			</div>
		</nav>

		<div class="page">
			<div class="mobile-nav-mask mask-close"></div>
			<header>
				<div class="container">
					<div class="logo col-xs-6">
						<a href="">
							<img class="img-responsive" src="<?php echo get_template_directory_uri()?>/img/asset/logo.png" alt="logo">
						</a>
					</div>
					<div class="col-xs-6 text-right">
						<?php
							$phone_number = get_option('phone-number');
							if( $phone_number && !empty($phone_number) ):?>
						<a class="tel" href="tel:<?php echo get_option('phone-number')?>">

							<img class="hidden-xs" src="<?php echo get_template_directory_uri()?>/img/asset/tel.png" class="inline img-responsive" alt="tel">
							<span class="hidden-xs"><?php echo get_option('phone-number')?></span>

						</a>
						<?php endif; ?>
						<a href="" class="mobile-nav-trigger visible-xs"><span class="glyphicon glyphicon-align-justify"></span></a>
					</div>
				</div>
			</header>

			<nav class="main hidden-xs">
				<div class="container">
				<?php
					$head_navigation = array(
						'theme_location'  => 'header-menu',
						'menu'            => '',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'nav nav-pills',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => false,
						'before'          => '',
						'after'           => '',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => new Bootsrap_two_langs()
					);

					wp_nav_menu( $head_navigation );
				?>
				</div>
			</nav>