<?php
//获取文章第一张图片
if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');
function catch_first_image() {
    global $post, $posts;
    $first_img = '';
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
function ease_seo_name() {
    $ease_seo_name = get_option('ease_blog_name');

    if ($ease_seo_name == "") {
        echo bloginfo('name');
    } else {
        echo $ease_seo_name;
    }
}
function ease_seo_description() {
    $ease_seo_description = get_option('ease_blog_description');

    if ($ease_seo_description == "") {
        echo bloginfo('description');
    } else {
        echo $ease_seo_description;
    }
}
// head-ease-sescription-a
function ease_seo_description_a() {
    $ease_seo_description_a = get_option('ease_blog_description_a');

    if ($ease_seo_description_a == "") {
        echo bloginfo('description');
    } else {
        echo $ease_seo_description_a;
    }
}
//面包屑导航生成函数
function ease_breadcrumbs() {
    if (is_single()){
    
    $categorys = get_the_category();
    $category = $categorys[0];
    return '
	      <div class="breadcrumbs ease-bg-light">当前位置：<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a> <small>></small> '.get_category_parents($category->term_id, true, ' <small>></small> ').get_the_title().'</div>';
    }
}

//判断single还是page调用文章下方的作者和分类信息
function EaseSingleTag() {
    if (is_single()) {
        echo '<span class="post-meta-time">';
        the_category();
        echo '</span>';
        echo '<span class="post-meta-category">';
        the_time('Y-n-j');
        echo '</span>';
    } else {
        echo '<span class="post-meta-author">';
        the_author();
        echo '</span><span class="post-meta-time">';
        the_time('Y-n-j');
        echo '</span>';
    }
}

// 分页导航菜单
function par_pagenavi($range = 9) {
    global $paged, $wp_query;
    if (!$max_page) {
        $max_page = $wp_query->max_num_pages;
    }
    if ($max_page > 1) {
        if (!$paged) {
            $paged = 1;
        }
        if ($paged != 1) {
            echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 首页 </a>";
        }
        previous_posts_link(' 上页 ');
        if ($max_page > $range) {
            if ($paged < $range) {
                for ($i = 1; $i <= ($range + 1); $i++) {
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if ($i == $paged)echo " class='current'";echo ">$i</a>";
                }} elseif ($paged >= ($max_page - ceil(($range/2)))) {
                for ($i = $max_page - $range; $i <= $max_page; $i++) {
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if ($i == $paged)echo " class='current'";echo ">$i</a>";
                }} elseif ($paged >= $range && $paged < ($max_page - ceil(($range/2)))) {
                for ($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2)));
                    $i++) {
                    echo "<a href='" . get_pagenum_link($i) ."'";if ($i == $paged) echo " class='current'";echo ">$i</a>";
                }}} else {
            for ($i = 1; $i <= $max_page; $i++) {
                echo "<a href='" . get_pagenum_link($i) ."'";
                if ($i == $paged)echo " class='current'";echo ">$i</a>";
            }}
        next_posts_link(' 下页 ');
        if ($paged != $max_page) {
            echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 尾页 </a>";
        }}
}

//  --自助友链--
function ease_auto_flink(){
    if (isset($_POST['blink_form']) && $_POST['blink_form'] == 'send') {
		global $wpdb;
	
		// 表单变量初始化
		$link_name = isset($_POST['blink_name']) ? trim(htmlspecialchars($_POST['blink_name'], ENT_QUOTES)) : '';
		$link_url = isset($_POST['blink_url']) ? trim(htmlspecialchars($_POST['blink_url'], ENT_QUOTES)) : '';
		$link_description = isset($_POST['blink_lianxi']) ? trim(htmlspecialchars($_POST['blink_lianxi'], ENT_QUOTES)) : '';
		$link_image = isset($_POST['blink_image']) ? trim(htmlspecialchars($_POST['blink_image'], ENT_QUOTES)) : '';
		
		// 联系方式
		$link_target = "_blank";
		$link_visible = "N";
		
		// 表示链接默认不可见
	
		// 表单项数据验证
		if (empty($link_name) || mb_strlen($link_name) > 20) {
			wp_die('链接名称是必填项哦，长度不能超过30字<br><a href="javascript:history.go(-1);">点此返回</a>');
		}
	
		if (empty($link_url) || strlen($link_url) > 60 || !preg_match("/^(https?:\/\/)?(((www\.)?[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)?\.([a-zA-Z]+))|(([0-1]?[0-9]?[0-9]|2[0-5][0-5])\.([0-1]?[0-9]?[0-9]|2[0-5][0-5])\.([0-1]?[0-9]?[0-9]|2[0-5][0-5])\.([0-1]?[0-9]?[0-9]|2[0-5][0-5]))(\:\d{0,4})?)(\/[\w- .\/?%&=]*)?$/i", $link_url)) {
			//验证url
			wp_die('链接地址必须填写<br><a href="javascript:history.go(-1);">点此返回</a>');
		}
	
		$sql_link = $wpdb->insert(
			$wpdb->links,
			array(
				'link_name' => '【待审核】- '.$link_name,
				// 'link_name' => $link_name,
				'link_url' => $link_url,
				'link_target' => $link_target,
				'link_description' => $link_description,
				'link_visible' => $link_visible,
				
			)
		);
	
		$result = $wpdb->get_results($sql_link);
	
		wp_die('链接提交成功，请耐心等待站长审核！<br><style>
		a {
		    color:#1a1a1a;
		}
		</style><a href="javascript:history.go(-1);" style="color:red;" >点此返回</a>', '提交成功');
	
	}
}
	