<?php get_header(); ?>
<div id="" class="wrap">
	<div id="main">
	    <?php echo ease_breadcrumbs() ?>
	    
        <div class="single ease-bg-light"> 
        
            <article class="posts">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="meta">
                    <!--判断是否single以显示文章分类-->
                    <?php EaseSingleTag(); ?>
                </div>
                <br>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                
                <?php endwhile; ?>
                <?php else : ?>
                <?php echo( '没有文章，去发布你的第一篇文章吧！'); ?>
                <?php endif; ?>
                
            </article>
        </div>
        <?php
            if(is_single()){  ?>
                <div class="ease-post-links ease-bg-light">
            <div class="ease-next-post-link">
            <?php if (get_previous_post()) { previous_post_link('上一篇: %link');} else {echo "上一篇: 没有了！";} ?>
                
            </div>
            <br>


            <div class="ease-previous-post-link">
            <?php if (get_next_post()) { next_post_link('下一篇: %link');} else {echo "下一篇: 已是最新文章";} ?>
                
            </div>
        </div>
            <?php  }else{ ?>
            
        <?php } ?>
        
        <div class="ease-comment ease-bg-light">
        <?php comments_template(); ?>
        </div>
	</div>
</div>
<?php get_footer(); ?>
