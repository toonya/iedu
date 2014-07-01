<?php

add_action( 'admin_menu', 'add_setting' );

function add_setting() {
    add_menu_page( '设置', '设置', 'manage_options', 'add-setting', 'add_setting_page', '', 110 );
}
function add_setting_page() {
    //setting option
?>

<div id="add-setting" class="admin-page">
    <h1>设置</h1>

    <form action="options.php" method="post">
        <?php
		    settings_fields('add-setting');
		    do_settings_sections('add-setting');
		    submit_button();
        ?>
    </form>
</div>

<?php }
function add_setting_func() {
    // Add the section to reading settings so we can add our
    // fields to it
    add_settings_section('add_setting',
                         '',
                         'add_setting_section',
                         'add-setting');

    // Add the field with the names and function to use for our new
    // settings, put it in our new section
    add_settings_field('states',
                       '统计代码',
                       'add_setting_stats',
                       'add-setting',
                       'add_setting');
    add_settings_field('mail-reciver',
                       '接收邮件地址(多个Email使用空格区分)',
                       'mail_reciver_stats',
                       'add-setting',
                       'add_setting');
    add_settings_field('phone-number',
                       '联系电话（填写后，前台会出现相应模块）',
                       'phone_number',
                       'add-setting',
                       'add_setting');

    add_settings_field('qr-code',
                       '微信二维码图片地址（可上传到媒体中心后，复制链接）',
                       'qr_code',
                       'add-setting',
                       'add_setting');
    add_settings_field('qq-contact',
                       'qq联系代码',
                       'qq_contact',
                       'add-setting',
                       'add_setting');


    // Register our setting so that $_POST handling is done for us and
    // our callback function just has to echo the <input>
    register_setting('add-setting','states');
    register_setting('add-setting','mail-reciver');
    register_setting('add-setting','phone-number');
    register_setting('add-setting','qr-code');
    register_setting('add-setting','qq-contact');

}// eg_settings_api_init()

add_action('admin_init', 'add_setting_func');

function add_setting_section() {
}

function add_setting_stats() {
	echo '<textarea name="51la" value="" class="form-control" cols="50" rows="3">'.esc_attr(get_option('states')).'</textarea>';
}

function mail_reciver_stats() {
	echo '<textarea name="mail-reciver" value="" class="form-control" cols="50" rows="3">'.esc_attr(get_option('mail-reciver')).'</textarea>';
}

function phone_number() {
  echo '<input name="phone-number" type="text" class="form-control" value="'.esc_attr(get_option('phone-number')).'" />';
}

function qr_code() {
	echo '<input name="qr-code" type="text" class="form-control" value="'.esc_attr(get_option('qr-code')).'" />';
}

function qq_contact() {
  echo '<textarea name="qq-contact" value="" class="form-control" cols="50" rows="3">'.esc_attr(get_option('qq-contact')).'</textarea>';
}
?>