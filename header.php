<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo get_bloginfo('charset'); ?>" />
	<!-- <meta http-equiv="refresh" content="30"> -->
	<title><?php  if (is_home()||is_search()) { ease_seo_name(); echo '-'; ease_seo_description();}else{wp_title(''); echo ' - '; ease_seo_name(); } ?> </title>
	<meta name="description" content="<?php ease_seo_description()?>" />
	<meta name="keywords" content="<?php echo get_option('ease_blog_keywords'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=[1.1.00]" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="icon" href="<?php echo get_option('ease_blog_icon'); ?>"/>
	<link href="<?php bloginfo('template_url'); ?>/static/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<style>
		<?php echo get_option( 'ease_blog_zdycss'); ?>
	</style>
	<?php echo get_option( 'ease_blog_zdyhead'); ?>
</head>
<body>
	<!-- header -->
    <div id="header" class="header">
    	<div id="head-logo" class="wrap">
    	    <!--<button id="navbutton" class="navbutton" type="button">菜单</button>-->
    		<span><a href="<?php echo get_option('home'); ?>"><?php ease_seo_name(); ?></a></span>
    		<div class="description"><?php ease_seo_description_a()?></div>
    		<input type="checkbox" id="chk">
    		<label for="chk" id="" class="show-menu-btn"><i class="fa fa-list"></i></label>
    	</div>
    </div>
    <!--nav-->
    <div class="main-nav wrap ease-bg-light" id="main-nav">
    	<?php 
    		// 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
    		wp_nav_menu( 
    			array(
    				'theme_location' => 'top', //指定显示的导航名，如果没有设置，则显示第一个
    				'menu' => 'header-menu',
    				'container' => 'nav', //最外层容器标签名
    				'container_class' => 'ease-c-head-nav', //最外层容器class名
    				'container_id' => 'ease-i-head-nav',//最外层容器id值
    				'menu_class' => 'ease-nav', //ul标签class
    				'menu_id' => 'nav-ul',//ul标签id
    				'depth' => 1,////显示的菜单层数，默认0，0是显示所有层
    			));
    	?>
    	<label for="chk" class="hide-menu-btn">
    	    <i class="fa fa-arrow-right"></i>
    	</label>
    	
    </div> 