<?php
/*
Template Name: 标签页面
*/
?>
<?php get_header();
?>

<div id="" class="wrap">
    <div id="main">

        <div class="single ease-bg-light">
            <h1>标签云</h1>
            <div class="ease-tags">
                <?php wp_tag_cloud('smallest=16&largest=16&unit=px&number=5000');
                ?>
                <!--//smallest是最小字号,largest是最大字号,unit是单位,number是显示关键词个数,默认是45个-->

            </div>
        </div>
        <div class="hitokoto ease-bg-light">
            <center><p id='hitokoto' style="padding: 10px;
    font-size: 20px;">
                <script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
            </p>
            </center>


        </div>
    </div>
</div>
<?php get_footer();
?>