<?php get_header(); ?>
<div id="" class="wrap">
    <!--<div  class="ease-alert-d">-->
    <!--	    -->
    <!--</div>-->
    <div class="swiper">
        
    </div>
	<div id="main">

		<!--文章列表-->
		<div class="posts">
			<?php
			if( have_posts() ){
				while( have_posts() ){

					//获取下一篇文章的信息，并且将信息存入全局变量 $post 中
					the_post();
					?>
					<div class="post-item ease-bg-light">
						<div class="post-title"><h2 class="post-title-t"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
						
						
						<div class="post-excerpt"><?php the_excerpt(); ?></div>
						<div class="post-meta">
						    <span class="post-meta-time">
								<?php the_time( 'Y-m-d' ); ?>
								</span>
								<span class="post-meta-category">
								<?php the_category(','); ?>
								</span>
								<!--<span class="post-meta-author">-->
								<!--<?php the_author(); ?>-->
								<!--</span>-->
								<span class="post-meta-edit">
								<?php edit_post_link('修改', '', '' ); ?>
								</span>
						</div>
					</div>
					<?php
				}
			}else{ ?>
				 <!-- echo '没有日志可以显示'; -->
				<div class="_404 ease-bg-light">
						<?php if(is_search()){ ?>
						<h2 class="entry-title">姿势不对？换个词搜一下~</h2>
						<div class="entry-content">
							抱歉，没有找到“<?php echo $s; ?>”的相关内容
						</div>
						<?php } elseif(is_404()) { ?>
						<h2 class="entry-title">抱歉，这个页面不存在！</h2>
						<div class="entry-content">
							它可能已经被删除，或者您访问的URL是不正确的。也许您可以试试搜索？
						</div>
						<?php }else{?>
						<h1 class="entry-title">暂无文章</h1>
						<?php } ?>
						<?php if(is_search() || is_404()){ ?>
						<form method="get" class="search-form inline" action="<?php bloginfo('url'); ?>">
							<input class="search-field inline-field" placeholder="输入关键词进行搜索…" autocomplete="off" value="" name="s" required="true" type="search">
							<button type="submit" class="search-submit">搜索</button>
						</form>
						<?php } ?>
					<div class="hitokoto">
            <center><p id='hitokoto' style="padding: 10px;
    font-size: 20px;">
                <script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
            </p>
            </center>
            


        </div>
					</div>
			<?php } ?>
		<div class="page_navi"><?php par_pagenavi(2); ?></div>
		</div>
	</div>
	<div class="social-bar ease-bg-light">
    <ul>
    <li>友情链接：</li><?php wp_list_bookmarks('title_li=&categorize=0'); ?>
    </ul>
</div>
</div>
<?php get_footer(); ?>
