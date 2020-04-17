<?php
// 前台隐藏工具条
if (!is_admin()) {
    add_filter('show_admin_bar', '__return_false');
}

// RSS 中添加查看全文链接防采集
function feed_read_more($content) {
    return $content . '<p><a rel="bookmark" href="'.get_permalink().'" target="_blank">查看全文</a></p>';
}
add_filter ('the_excerpt_rss', 'feed_read_more');

//注册导航栏
register_nav_menus(
    array(
        'top' => __('主菜单', 'ease'),
        // 'social' => __('测试菜单', 'ease'),
    )
);

// 开启后台友情链接选项卡
add_filter('pre_option_link_manager_enabled', '__return_true');

// 开启文章缩略图
add_theme_support('post-thumbnails');


// 禁止后台加载谷歌字体
function wp_remove_open_sans_from_wp_core() {
	wp_deregister_style( 'open-sans' );
	wp_register_style( 'open-sans', false );
	wp_enqueue_style('open-sans','');
}
add_action( 'init', 'wp_remove_open_sans_from_wp_core' );

// 禁用emoji
function disable_emojis() {
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'disable_emojis' );

// 移除表情
remove_action( 'wp_head' , 'print_emoji_detection_script', 7 );