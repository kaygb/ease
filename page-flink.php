<?php
/*
Template Name: 自助友情链接
*/
get_header();
ease_auto_flink()
?>
<div id="" class="wrap">
	<div id="main">
        <div class="single ease-bg-light">
            <article class="posts">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="meta">
                    <?php EaseSingleTag(); ?>
                </div>
                <br>
                <div class="entry-content">
                    <div class="my-friend-links">
                        <h3>我的好友</h3>
                        <ul>
                        <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
                        </ul>
                    </div>
                    <?php the_content(); ?>
                    
                    
                <!--表单开始-->
                <div class="comments-area">
                    <h3>自助申请友链</h3>
                    <form method="post" class="mt20" action="<?php echo $_SERVER["REQUEST_URI"];
                        ?>">
                        <input type="text" size="40" value="" class="flink-text-input" id="blink_name" placeholder="站点名称（必填，30字以内）" name="blink_name" />
                        <input type="text" size="40" value="" class="flink-text-input" id="blink_url" placeholder="站点域名（必填）" name="blink_url" />

                        <input type="text" size="40" value="" class="flink-text-input" id="blink_lianxi" placeholder="站点介绍" name="blink_lianxi" />
                        <!--<input type="text" size="40" value="" class="flink-text-input" id="blink_image" placeholder="QQ号码（用来显示链接头像）PS:正在调试，暂不可用" name="blink_image" />-->
                        <input type="hidden" value="send" name="blink_form" />
                        <button type="submit" class="flink-submit">提交申请</button>
                        <button type="reset" class="flink-submit">重新填写</button>
                    </form>
                </div>
                <!--表单结束-->
                </div>
                
                <?php endwhile; ?>
                <?php else : ?>
                <?php echo( '没有文章，去发布你的第一篇文章吧！'); ?>
                <?php endif; ?>
                
            </article>
        </div>
        <div class="ease-comment ease-bg-light">
        <?php comments_template(); ?>
        </div>
	</div>
</div>
	<?php get_footer(); ?>


