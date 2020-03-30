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
                上一篇：
                <?php 
                    if(previous_post_link('%link') == ""){
                        // echo "没有了";
                        
                    }else{
                        previous_post_link('%link'); 
                    }
                ?>
                
            </div>
            <br>
            <div class="ease-previous-post-link">
                下一篇：
                <?php 
                    if(next_post_link('%link') == ""){
                        // echo "没有了";
                        // var_dump(next_post_link('%link')); 
                    }else{
                        next_post_link('%link'); 
                    }
                ?>
                
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
