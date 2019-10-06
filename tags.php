<?php
/*
Template Name: 标签页面
*/
?>
<?php get_header(); ?>
 
<div id="" class="wrap">
	<div id="main">
        <div class="single ease-bg-light">
            <div class="ease-tags">
                <?php wp_tag_cloud('smallest=16&largest=16&unit=px&number=5000');?>
            <!--//smallest是最小字号,largest是最大字号,unit是单位,number是显示关键词个数,默认是45个-->
                
            </div>
        </div>
	</div>
</div>
<?php get_footer(); ?>
