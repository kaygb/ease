<?php
$options = array(
    //开始第一个选项标签数组
    // array(
    //     'title' => '主题设置',//标签显示的文字
    //     'id'    => 'panel_general',//标签的ID
    //     'type'  => 'panelstart' //顶部标签的类型
    // ),
	// array(
    //     'name'  => '数字选择框',
    //     'desc'  => '这个是数字输入框',
    //     'id'    => 'git_linkpage_cat',
    //     'type'  => 'number',
    //     'std'   => '2'//最后一个数组不需要逗号
    // ),
	// array(
    //     'name'  => '选择选项',
    //     'desc'  => '勾选选项的描述文字',
    //     'id'    => 'git_thumbnail_b',
    //     'type'  => 'checkbox'//复选框
    // ),
	// array(
    //     'name'  => '单选项设置',
    //     'desc'  => '选择一个参数作为排序的根据，可以给与几个选择并且选择一个，可以预留选项',
    //     'id'    => 'git_hot_b',
    //     'type'  => 'radio',
    //     'options' => array(
    //         '选择一' => 'xuanze1',
    //         '选择二' => 'xuanze2',
	// 		'选择三' => 'xuanze3',
	// 		'选择四' => 'xuanze4',
	// 		'选择五' => 'xuanze5',
	// 		'选择六' => 'xuanze6',
	// 		'选择七' => 'xuanze7',
    //         '选择八' => 'xuanze8'
    //     ),
    //     'std'   => 'xuanze1'
    // ),
	// array(
    //     'name'  => '复选项设置',
    //     'desc'  => '',
    //     'id'    => 'git_hot_b4',
    //     'type'  => 'checkboxs',
    //     'options' => array(
    //         'xuanze14' => '选择一',
	// 		'xuanze24' => '选择二',
	// 		'xuanze34' => '选择三',
	// 		'xuanze44' => '选择四',
	// 		'xuanze54' => '选择五'
    //     ),
    //     'std'   => 'xuanze14'
    // ),
	// array(
    //     'name'  => '单选项设置',
    //     'desc'  => '选择一个参数作为排序的根据，可以给与几个选择并且选择一个，可以预留选项',
    //     'id'    => 'git_hot_b5',
    //     'type'  => 'select',
    //     'options' => array(
    //         'xuanze12' => '选择一',
	// 		'xuanze22' => '选择二',
	// 		'xuanze32' => '选择三',
	// 		'xuanze42' => '选择四',
	// 		'xuanze52' => '选择五'
    //     ),
    //     'std'   => 'xuanze52'
    // ),
	// array(
    //     'name'  => '密码选项输入框',
    //     'desc'  => '这是一个密码输入框，所以不可见',
    //     'id'    => 'git_wbpasd_b',
    //     'type'  => 'password',
    //     'std'   => ''
    // ),
    // array(
    //     'title' => '这是一个分段，也是一个二级标题',//二级标题，只显示文字，没有选项
    //     'type'  => 'subtitle'//二级标题的类型
    // ),
    // array(
    //     'name'  => '文字选项',
    //     'desc'  => '这里是输入框的描述文字',
    //     'id'    => 'hot_list_title',
    //     'type'  => 'text',
    //     'std'   => '主题预留文字'
    // ),
    // array(
    //     'name'  => '文本框选项',
    //     'desc'  => '这里是输入框的描述文字',//这里可以随便写的
    //     'id'    => '’git_tui',//ID是保存数据的值，保持唯一性
    //     'type'  => 'textarea',//设置选项的类型
    //     'std'   => '这里是选项的默认数据'//选项的默认数据
    // ),
    // array(
    //     'name'  => '文字选项设置',
    //     'desc'  => '选项的描述文字',
    //     'id'    => 'git_tougao_mailto',
    //     'type'  => 'text',
    //     'std'   => get_bloginfo( 'admin_email' ) //亮点是默认值里面可以用函数调用
    // ),
    // array(
    //     'type'  => 'panelend'//标签段的结束
    // ),
    array(
        'title' => 'SEO设置',
        'id'    => 'panel_ease_basic',
        'type'  => 'panelstart'
    ),
    array(
            'title' => '这里为head头部代码的设置',//二级标题，只显示文字，没有选项
            'type'  => 'subtitle'//二级标题的类型
        ),
    array(
        'name'  => '站点名称',
        'desc'  => '这里是输入博客的名称,将覆盖原有设置',
        'id'    => 'ease_blog_name',
        'type'  => 'text',
        'std'   => get_bloginfo( 'name' ) 
    ),
    array(
        'name'  => '博客标题描述',
        'desc'  => '显示在浏览器标签上',
        'id'    => 'ease_blog_description',
        'type'  => 'textarea',
        'std'   => ''
    ),
    array(
        'name'  => '博客描述',
        'desc'  => '显示首页logo下面',
        'id'    => 'ease_blog_description_a',
        'type'  => 'textarea',
        'std'   => ''
    ),
    array(
        'name'  => '博客关键字',
        'desc'  => '以英文逗号隔开',
        'id'    => 'ease_blog_keywords',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '备案号',
        'desc'  => '页脚备案号,不填则不显示',
        'id'    => 'ease_blog_beian',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'type'  => 'panelend'//标签段的结束
    ),
    array(
        'title' => '社交设置',
        'id'    => 'panel_ease_social',
        'type'  => 'panelstart'
    ),
    array(
        'name'  => 'QQ',
        'desc'  => '这里输入您的QQ号',
        'id'    => 'ease_blog_qq',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => 'QQ群加群链接',
        'desc'  => '这里输入QQ群加群链接',
        'id'    => 'ease_blog_qq_qun',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '邮箱',
        'desc'  => '这里输入您的邮箱地址',
        'id'    => 'ease_blog_mail',
        'type'  => 'text',
        'std'   => get_bloginfo( 'admin_email' ) //亮点是默认值里面可以用函数调用
    ),
    array(
        'name'  => '微博',
        'desc'  => '这里输入您的微博链接地址',
        'id'    => 'ease_blog_weibo',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '哔哩哔哩',
        'desc'  => '这里输入您的哔哩哔哩个人空间链接地址',
        'id'    => 'ease_blog_bilibili',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => '知乎',
        'desc'  => '这里输入您的知乎链接地址',
        'id'    => 'ease_blog_zhihu',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => 'GitHub',
        'desc'  => '这里输入您的GitHub链接地址',
        'id'    => 'ease_blog_github',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'name'  => 'Gitee',
        'desc'  => '这里输入您的码云链接地址',
        'id'    => 'ease_blog_gitee',
        'type'  => 'text',
        'std'   => ''
    ),
    array(
        'type'  => 'panelend'
    ),

);
//主题后台设置已完成，下面可以不用看了
function git_add_theme_options_page() {
    global $options;
    if ($_GET['page'] == basename(__FILE__)) {
        if ('update' == $_REQUEST['action']) {
            foreach($options as $value) {
                if (isset($_REQUEST[$value['id']])) {
                    update_option($value['id'], $_REQUEST[$value['id']]);
                } else {
                    delete_option($value['id']);
                }
            }
            update_option('git_options_setup', true);
            header('Location: themes.php?page=theme-options.php&update=true');
            die;
        } else if( 'reset' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
                delete_option($value['id']);
            }
            delete_option('git_options_setup');
            header('Location: themes.php?page=theme-options.php&reset=true');
            die;
        }
    }
    add_theme_page('Ease主题设置', 'Ease主题设置', 'edit_theme_options', basename(__FILE__) , 'git_options_page');
}
add_action('admin_menu', 'git_add_theme_options_page');
 
function git_options_page() {
    global $options;
    $optionsSetup = get_option('git_options_setup') != '';
    if ($_REQUEST['update']) echo '<div class="updated"><p><strong>设置已保存。</strong></p></div>';
    if ($_REQUEST['reset']) echo '<div class="updated"><p><strong>设置已重置。</strong></p></div>';
?>
 
<div class="wrap">
    <h2>Ease主题设置</h2>
    <input placeholder="筛选主题选项…" type="search" id="theme-options-search" />
    <form method="post">
        <h2 class="nav-tab-wrapper">
<?php
$panelIndex = 0;
foreach ($options as $value ) {
    if ( $value['type'] == 'panelstart' ) echo '<a href="#' . $value['id'] . '" class="nav-tab' . ( $panelIndex == 0 ? ' nav-tab-active' : '' ) . '">' . $value['title'] . '</a>';
    $panelIndex++;
}
echo '<a href="#about_theme" class="nav-tab">关于Ease</a>';
 
?>
</h2>
<!-- 开始建立选项类型 -->
<?php
$panelIndex = 0;
foreach ($options as $value) {
switch ( $value['type'] ) {
    case 'panelstart'://最高标签
        echo '<div class="panel" id="' . $value['id'] . '" ' . ( $panelIndex == 0 ? ' style="display:block"' : '' ) . '><table class="form-table">';
        $panelIndex++;
        break;
    case 'panelend':
        echo '</table></div>';
        break;
    case 'subtitle':
        echo '<tr><th colspan="2"><h3>' . $value['title'] . '</h3></th></tr>';
        break;
    case 'text':
?>
<tr>
    <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
    <td>
        <label>
        <input name="<?php echo $value['id']; ?>" class="regular-text" id="<?php echo $value['id']; ?>" type='text' value="<?php if ( $optionsSetup || get_option( $value['id'] ) != '') { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?>" />
        <span class="description"><?php echo $value['desc']; ?></span>
        </label>
    </td>
</tr>
<?php
    break;
    case 'number':
?>
<tr>
    <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
    <td>
        <label>
        <input name="<?php echo $value['id']; ?>" class="small-text" id="<?php echo $value['id']; ?>" type="number" value="<?php if ( $optionsSetup || get_option( $value['id'] ) != '') { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
        <span class="description"><?php echo $value['desc']; ?></span>
        </label>
    </td>
</tr>
<?php
    break;
    case 'password':
?>
<tr>
    <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
    <td>
        <label>
        <input name="<?php echo $value['id']; ?>" class="regular-text" id="<?php echo $value['id']; ?>" type="password" value="<?php if ( $optionsSetup || get_option( $value['id'] ) != '') { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" />
        <span class="description"><?php echo $value['desc']; ?></span>
        </label>
    </td>
</tr>
<?php
    break;
    case 'textarea':
?>
<tr>
    <th><?php echo $value['name']; ?></th>
    <td>
        <p><label for="<?php echo $value['id']; ?>"><?php echo $value['desc']; ?></label></p>
        <p><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" rows="5" cols="50" class="large-text code"><?php if ( $optionsSetup || get_option( $value['id'] ) != '') { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?></textarea></p>
    </td>
</tr>
<?php
    break;
    case 'select':
?>
<tr>
    <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
    <td>
        <label>
            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                <?php foreach ($value['options'] as $option) : ?>
                <option value="<?php echo $option; ?>" <?php selected( get_option( $value['id'] ), $option); ?>>
                    <?php echo $option; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <span class="description"><?php echo $value['desc']; ?></span>
        </label>
    </td>
</tr>
 
<?php
    break;
    case 'radio':
?>
<tr>
    <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
    <td>
        <?php foreach ($value['options'] as $name => $option) : ?>
        <label>
            <input type="radio" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php echo $option; ?>" <?php checked( get_option( $value['id'] ), $option); ?>>
            <?php echo $name; ?>
        </label>
        <?php endforeach; ?>
        <p><span class="description"><?php echo $value['desc']; ?></span></p>
    </td>
</tr>
 
<?php
    break;
    case 'checkbox':
?>
<tr>
    <th><?php echo $value['name']; ?></th>
    <td>
        <label>
            <input type='checkbox' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="1" <?php echo checked(get_option($value['id']), 1); ?> />
            <span><?php echo $value['desc']; ?></span>
        </label>
    </td>
</tr>
 
<?php
    break;
    case 'checkboxs':
?>
<tr>
    <th><?php echo $value['name']; ?></th>
    <td>
        <?php $checkboxsValue = get_option( $value['id'] );
        if ( !is_array($checkboxsValue) ) $checkboxsValue = array();
        foreach ( $value['options'] as $id => $title ) : ?>
        <label>
            <input type="checkbox" name="<?php echo $value['id']; ?>[]" id="<?php echo $value['id']; ?>[]" value="<?php echo $id; ?>" <?php checked( in_array($id, $checkboxsValue), true); ?>>
            <?php echo $title; ?>
        </label>
        <?php endforeach; ?>
        <span class="description"><?php echo $value['desc']; ?></span>
    </td>
</tr>
<?php
    break;
}
}
?>
<!-- 结束建立选项类型 -->
<div class="panel" id="about_theme">
<h2>Ease主题 </h2>
    <b>version: 1.3</b>
    <p>Ease的英文意思：容易；安逸；自在；舒适
        <br>
        目的是创造出一个简单，快速，好看，用起来舒适的主题
    </p>
    <p>使用教程请访问<a href="https://kaygb.top">未来小趣</a></p>
    <hr>
<h2>更新日志</h2>
<hr>

<p>
<b>Ease 1.3</b>
        <br>
        2019-08-19
        <ul>
            <li>美化导航栏</li>
            <li>修复文章内区块显示错位的问题</li>
            <li>添加文章翻页</li>
            <li>优化404页面</li>
            <li>修复SEO问题</li>
        </ul>
</p>
<hr>


<p>
<b>Ease 1.2</b>
        <br>
        2019-08-18
        <ul>
            <li>添加简单SEO设置</li>
            <li>删除侧边栏</li>
            <li>优化评论模块</li>
        </ul>
</p>
<hr>


<p>
<b>Ease 1.1</b>
        <br>
        2019-08-02
        <ul>
            <li></li>
            <li>添加后台主题框架</li>
            <li></li>
        </ul>
</p>
<hr>


    <p>
        <b>Ease 1.0</b>
        <br>
        2019-08-02
        <ul>
            <li>初始版本</li>
            <li>构建基本框架</li>
            <li>构建基本样式</li>
        </ul>
        
</p>
    <hr>


</div>
<p class="submit">
    <input name="submit" type="submit" class="button button-primary" value="保存选项"/>
    <input type="hidden" name="action" value="update" />
</p>
</form>
<form method="post">
<p>
    <input name="reset" type="submit" class="button button-secondary" value="重置选项" onclick="return confirm('你确定要重置选项吗？重置之后您的全部设置将被清空，您确定您没有搞错？？ ');"/>
    <input type="hidden" name="action" value="reset" />
</p>
</form>
</div>
<style>.panel{display:none}.panel h3{margin:0;font-size:1.2em}#panel_update ul{list-style-type:disc}.nav-tab-wrapper{clear:both}.nav-tab{position:relative}.nav-tab i:before{position:absolute;top:-10px;right:-8px;display:inline-block;padding:2px;border-radius:50%;background:#e14d43;color:#fff;content:"\f463";vertical-align:text-bottom;font:400 18px/1 dashicons;speak:none}#theme-options-search{display:none;float:right;margin-top:-34px;width:280px;font-weight:300;font-size:16px;line-height:1.5}.updated+#theme-options-search{margin-top:-91px}.wrap.searching .nav-tab-wrapper a,.wrap.searching .panel tr,#attrselector{display:none}.wrap.searching .panel{display:block !important}#attrselector[attrselector*=ok]{display:block}</style>
<style id="theme-options-filter"></style>
<div id="attrselector" attrselector="ok" ></div>
<script>
jQuery(function ($) {
    $(".nav-tab").click(function () {
        $(this).addClass("nav-tab-active").siblings().removeClass("nav-tab-active");
        $(".panel").hide();
        $($(this).attr("href")).show();
        return false;
    });
 
    var themeOptionsFilter = $("#theme-options-filter");
    themeOptionsFilter.text("ok");
    if ($("#attrselector").is(":visible") && themeOptionsFilter.text() != "") {
        $(".panel tr").each(function (el) {
            $(this).attr("data-searchtext", $(this).text().replace(/\r|\n/g, '').replace(/ +/g, ' ').toLowerCase());
        });
 
        var wrap = $(".wrap");
        $("#theme-options-search").show().on("input propertychange", function () {
            var text = $(this).val().replace(/^ +| +$/, "").toLowerCase();
            if (text != "") {
                wrap.addClass("searching");
                themeOptionsFilter.text(".wrap.searching .panel tr[data-searchtext*='" + text + "']{display:block}");
            } else {
                wrap.removeClass("searching");
                themeOptionsFilter.text("");
            };
        });
    };
});
</script>
<?php
}
//启用主题后自动跳转至选项页面
global $pagenow;
    if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' )
    {
        wp_redirect( admin_url( 'themes.php?page=theme-options.php' ) );
    exit;
}
function git_enqueue_pointer_script_style( $hook_suffix ) {
    $enqueue_pointer_script_style = false;
    $dismissed_pointers = explode( ',', get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) );
    if( !in_array( 'git_options_pointer', $dismissed_pointers ) ) {
        $enqueue_pointer_script_style = true;
        add_action( 'admin_print_footer_scripts', 'git_pointer_print_scripts' );
    }
    if( $enqueue_pointer_script_style ) {
        wp_enqueue_style( 'wp-pointer' );
        wp_enqueue_script( 'wp-pointer' );
    }
}
add_action( 'admin_enqueue_scripts', 'git_enqueue_pointer_script_style' );
function git_pointer_print_scripts() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        var $menuAppearance = $("#menu-appearance");
        $menuAppearance.pointer({
            content: '<h3>恭喜，Ease主题安装成功！</h3><p>Ease主题支持自定义设置，请访问Ease主题选项页面进行配置。</p>',
            position: {
                edge: "left",
                align: "center"
            },
            close: function() {
                $.post(ajaxurl, {
                    pointer: "git_options_pointer",
                    action: "dismiss-wp-pointer"
                });
            }
        }).pointer("open").pointer("widget").find("a").eq(0).click(function() {
            var href = $(this).attr("href");
            $menuAppearance.pointer("close");
            setTimeout(function(){
                location.href = href;
            }, 700);
            return false;
        });
 
        $(window).on("resize scroll", function() {
            $menuAppearance.pointer("reposition");
        });
        $("#collapse-menu").click(function() {
            $menuAppearance.pointer("reposition");
        });
    });
    </script>
 
<?php
}