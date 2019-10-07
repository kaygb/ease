<?php 
// 任何添加于主题目录functions文件夹内的php文件都被调用到这里
define('functions', TEMPLATEPATH.'/functions');
IncludeAll( functions );
function IncludeAll($dir){
    $dir = realpath($dir);
    if($dir){
        $files = scandir($dir);
        sort($files);
        foreach($files as $file){
            if($file == '.' || $file == '..'){
                continue;
            }elseif(preg_match('/.php$/i', $file)){
                include_once $dir.'/'.$file;
            }
        }
    }
}
// 分页导航菜单
function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 首页 </a>";}
	previous_posts_link(' 上页 ');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link(' 下页 ');
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 尾页 </a>";}}
}

// 主题框架
require get_template_directory() . '/admin/theme-options.php';
require get_template_directory() . '/admin/post-options.php';
// This theme uses wp_nav_menu() in one location.
register_nav_menus();

// 开启后台友情链接选项卡
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

//判断single还是page调用文章下方的作者和分类信息
function EaseSingleTag(){
    if(is_single()) {echo '<span class="post-meta-category">'; the_category( ); echo '</span>';
                            echo '<span class="post-meta-time">'; the_time('Y 年 n 月 j 日'); echo '</span>';
                        }
                        else {echo '<span class="post-meta-author">'; the_author(); echo '</span><span class="post-meta-time">'; the_time('Y 年 n 月 j 日'); echo '</span>';} 
}
// 开启文章缩略图
add_theme_support( 'post-thumbnails' ); 
//获取文章第一张图片
if ( function_exists('add_theme_support') )
 add_theme_support('post-thumbnails');
function catch_first_image() 
{
	global $post, $posts;$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	//判断图片是否过小
// 	if(!empty($first_img))
// 	{
// 		$image_size = getimagesize($first_img);
// 		$image_width = $image_size[0];
// 	}
	//如果第一张图不存在或过小，则返回随机图片
// 	if(empty($first_img) || $image_width<50){
// 		$first_img = '';
// 		//从 2 张图中随机选择，可根据自己的图片数量设置
// 		$random = mt_rand(1, 2);
// // 		echo get_bloginfo ( 'stylesheet_directory' );
// // 		echo '/images/random/'.$random.'.JPG';
//     // echo('没有图片');
// 		}
  return $first_img;
}
// 获取EASE设置
	function ease_seo_name(){
		$ease_seo_name = get_option('ease_blog_name');
		
		if ($ease_seo_name == "") {
			echo bloginfo('name');
		}else{
			echo $ease_seo_name;
		}
	}
	function ease_seo_description(){
		$ease_seo_description = get_option('ease_blog_description');
		
		if ($ease_seo_description == "") {
			echo bloginfo('description');
		}else{
			echo $ease_seo_description;
		}
	}
// head-ease-sescription-a
function ease_seo_description_a(){
	$ease_seo_description_a = get_option('ease_blog_description_a');
	
	if ($ease_seo_description_a == "") {
		echo bloginfo('description');
	}else{
		echo $ease_seo_description_a;
	}
}
