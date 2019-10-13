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
        'social' => __('测试菜单', 'ease'),
    )
);

// 开启后台友情链接选项卡
add_filter('pre_option_link_manager_enabled', '__return_true');

// 开启文章缩略图
add_theme_support('post-thumbnails');