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