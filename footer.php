<!--制作不易，请保留版权-->
<div class="footer">Copyright&nbsp&copy&nbsp<?php echo get_option( 'ease_blog_begintime'); ?>&nbsp-&nbsp<?php echo date( "Y"); ?>&nbsp<a href="<?php echo get_option('home'); ?>">
        <?php bloginfo( 'name'); ?>
    </a>
    
    <br>Theme: <a href="https://github.com/kaygb/ease" target="_blank">Ease</a> Made by <a href="https://eas1.cn" target="_blank">风也</a> with heart!
    <br/>
    <a href="http://beian.miit.gov.cn" target="_blank" rel="nofollow">
        <?php echo get_option( 'ease_blog_beian'); ?>
    </a>

    <center>
        <?php //echo get_option('ease_blog_statistcs'); ?>
    </center>
</div>
<!--返回顶部-->
<div id="ease-target"><span id="ease_top"><i class="fa fa-chevron-up"></i></span>
</div>
<!--end-返回顶部-->
<!-- highlightjs -->
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/highlight.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/highlightjs-line-numbers.js@2.7.0/dist/highlightjs-line-numbers.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
<script>
window.theme_url = "<?php echo get_template_directory_uri(); ?>";
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wp-heightlight.js" type="text/javascript"></script>



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/static/js/click.js"></script>
<?php
    echo get_option( 'ease_blog_zdybbody');
    ?>
<script>
    <?php
    echo get_option( 'ease_blog_zdyjs');
    ?>
</script>
</body>

</html>
