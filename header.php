<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo bloginfo('name' ); ?></title>
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
        <div class="page">
            <div class="mobile-nav-mask mask-close"></div>
            
            <header>
                <div class="topbar"></div>
                <div class="topbar2">
                    <div class="container text-right">
                        <span class="phone icon-before"><a href="tel:400-9217-966"><span class="glyphicon glyphicon-earphone"></span>400-9217-966</a></span>
                        <span class="pd-lr-xs"> | </span>
                        <span class="help icon-before"><a href="">? 帮助</a></span>
                    </div>
                </div>
                <nav class="navbar simple-flat" role="navigation">
                    <div class="container">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="navbar-brand" href="<?php echo bloginfo('url' ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-lg.jpg" alt="">
                                </a>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-right" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control border-non radius-0" placeholder="Search">
                                    </div><button type="submit" class="btn btn-black btn-flat radius-0"><span class="glyphicon glyphicon-search"></span></button>
                                </form>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </div><!-- /.container-fluid -->
                </nav>
            </header> <!-- /. header -->

            <!-- <nav class="main hidden-xs">
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
            </nav> -->