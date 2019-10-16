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
//说说
        add_action('init', 'my_custom_init'); function my_custom_init() { $labels = array( 'name' => '说说', 'singular_name' => 'singularname', 'add_new' => '发表说说', 'add_new_item' => '发表说说', 'edit_item' => '编辑说说', 'new_item' => '新说说', 'view_item' => '查看说说', 'search_items' => '搜索说说', 'not_found' => '暂无说说', 'not_found_in_trash' => '没有已遗弃的说说', 'parent_item_colon' => '', 'menu_name' => '说说' ); $args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true, 'show_in_menu' => true, 'query_var' => true, 'rewrite' => true, 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false, 'menu_position' => null, 'supports' => array('title','editor','author') ); register_post_type('shuoshuo',$args); }