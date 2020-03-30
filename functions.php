<?php
// 任何添加于主题目录functions文件夹内的php文件都被调用到这里
define('functions', TEMPLATEPATH.'/functions');
IncludeAll(functions);
function IncludeAll($dir) {
    $dir = realpath($dir);
    if ($dir) {
        $files = scandir($dir);
        sort($files);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            } elseif (preg_match('/.php$/i', $file)) {
                include_once $dir.'/'.$file;
            }
        }
    }
}
// 主题框架
require get_template_directory() . '/admin/theme-options.php';
require get_template_directory() . '/admin/post-options.php';
// This theme uses wp_nav_menu() in one location.
register_nav_menus();
//动态
        add_action('init', 'my_custom_init'); function my_custom_init() { $labels = array( 'name' => '动态', 'singular_name' => 'singularname', 'add_new' => '发表动态', 'add_new_item' => '发表动态', 'edit_item' => '编辑动态', 'new_item' => '新动态', 'view_item' => '查看动态', 'search_items' => '搜索动态', 'not_found' => '暂无动态', 'not_found_in_trash' => '没有已遗弃的动态', 'parent_item_colon' => '', 'menu_name' => '动态' ); $args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true, 'show_in_menu' => true, 'query_var' => true, 'rewrite' => true, 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false, 'menu_position' => null, 'supports' => array('title','editor','author') ); register_post_type('shuoshuo',$args); }

/*gravatar使用V2EX CDN*/
function replace_gravatar($avatar) {
    $ease_gr = get_option('ease_blog_gravatar');
    
    $avatar = str_replace(array("//gravatar.com/", "//secure.gravatar.com/", "//www.gravatar.com/", "//0.gravatar.com/", 
    "//1.gravatar.com/", "//2.gravatar.com/", "//cn.gravatar.com/"), "//".$ease_gr, $avatar);
    return $avatar;}
    add_filter( 'get_avatar', 'replace_gravatar' );