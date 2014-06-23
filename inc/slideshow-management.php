<?php
// ----------------------------------------
// ! add a admin page to edit the banner
//   slide images
// ----------------------------------------

add_action( 'admin_menu', 'home_images' );

function home_images() {
    add_menu_page( '首页图片', '首页图片', 'manage_options', 'slideshow_management', 'homeImagesPageBuilder', '', 60 );
}
function homeImagesPageBuilder() {
    $banner_list = get_option('bannerlist');
	$add_new_focus = false;
	if(!$banner_list)
		$add_new_focus = true;
?>

<div id="banner-option">
    <h1>首页图片管理</h1>
    <p class="text-info banner-img">注意，首页幻灯片图片长宽必须为1680px*550px。</p>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
    <?php if($banner_list) {
        foreach($banner_list as $key=>$item) {
            $num = $key+1;
            if($num==1)
            	echo '<li class="active"><a href="#'.$num.'" data-toggle="tab">'.$num.'</a></li>';
            else
         		echo '<li><a href="#'.$num.'" data-toggle="tab">'.$num.'</a></li>';
        }
    }
?>
        <li <?php if($add_new_focus) echo'class="active"';?>><a href="#addnew" data-toggle="tab">+</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content container tab-container">
    <?php if($banner_list) {
        foreach($banner_list as $key=>$item) {
            $num = $key+1;
            $img = $item['imgurl'];
            $url = $item['url'];
            $title = $item['title'];
            $describe = $item['describe'];
            ?>

        <div class="tab-pane <?php if($num==1) echo 'active'; ?>" id="<?php echo $num; ?>">
            <div class="col-sm-11">
                <!-- input area for store data -->
                <div class="info">
                    <input type="text" value="<?php echo $title; ?>" class="form-control title need" placeholder="输入标题" />
                    <input type="text" value="<?php echo $describe; ?>" class="form-control describe need" placeholder="输入描述" />
                    <input type="text" value="<?php echo $url; ?>" class="form-control url" placeholder="输入超链接" />
                    <input type="text" value="<?php echo $img; ?>" class="form-control imgurl need" placeholder="输入图片地址，或点击下面的按钮从图片库中选择" />
                </div>
                <!-- control area -->
                <div class="row control">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-danger btn-block open-media">选择图片</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-primary btn-block save">保存</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-warning btn-block delete">删除本新闻</button>
                    </div>
                    <div class="preview col-sm-9">
	                    <img class="img-responsive" src="<?php echo $img; ?>" alt="<?php echo $title; ?>" />
                    </div>
                </div>
            </div>
        </div>

            <?php
        }
    }
    ?>
        <div class="tab-pane <?php if($add_new_focus) echo 'active' ?>" id="addnew">
            <div class="col-sm-11">
                <!-- input area for store data -->
                <div class="info">
                    <input type="text" class="form-control title need" placeholder="输入标题" />
                    <input type="text" class="form-control describe need" placeholder="输入描述" />
                    <input type="text" class="form-control url" placeholder="输入超链接" />
                    <input type="text" class="form-control imgurl need"  placeholder="输入图片地址，或点击下面的按钮从图片库中选择" />
                </div>
                <!-- control area -->
                <div class="row control">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-danger btn-block open-media">选择图片</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-block add">保存新闻</button>
                    </div>
                    <div class="preview col-sm-9">
	                    <img src="" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }


// ----------------------------------------
// ! load some info for js.file
// ----------------------------------------
function loadBannerAjax() {

	$screen = get_current_screen();

	if ( in_array( 'toplevel_page_slideshow_management', array( $screen->id ) ) )
	{

		wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/inc/css/admin.css' );
		wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'admin-javascript', get_template_directory_uri() . '/inc/js/admin.js', array('jquery'), '1.0.0', true );

	    wp_enqueue_script('slideshow-management',get_template_directory_uri().'/inc/js/slideshow-management.js',array('jquery'), '1.0.0', true);

	    $banner_option_ajax_nonce = wp_create_nonce("banner-option-nonce");

	    wp_localize_script( 'slideshow-management', 'banner_option',
			array( 'url' => admin_url( 'admin-ajax.php' ), 'action'=>'save_banner_option' , 'security'=>$banner_option_ajax_nonce , 'baseurl'=> wp_upload_dir()['baseurl'] ));

		wp_enqueue_media();
	}
}

add_action( 'admin_enqueue_scripts', 'loadBannerAjax' );

// ----------------------------------------
// ! save banner option
// ----------------------------------------
function save_banner_option() {
    //check nonce
    check_ajax_referer( 'banner-option-nonce', 'security' );

    $results = '';

    $banner_list = $_POST['bannerlist'];
    update_option( 'bannerlist', $banner_list );
    $bannerlistval =  get_option('bannerlist') ;


    if ( $bannerlistval )
    {
        $results = $bannerlistval ;
    }
    else {
        $results = false ;
    }
    // Return the String
    wp_send_json($results);
}
add_action('wp_ajax_nopriv_save_banner_option', 'save_banner_option');
add_action('wp_ajax_save_banner_option', 'save_banner_option');

?>