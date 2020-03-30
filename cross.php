    <?php /*
        Template Name: 动态
        author: 秋叶
        url: http://www.mizuiren.com/141.html
        */
        get_header(); ?>
    <style type="text/css">
        #shuoshuo_content {
            /*background-color: #fff;*/
            padding: 10px;
            min-height: 500px;
        }
        /* shuo */
        body.theme-dark .cbp_tmtimeline::before {
            background: RGBA(255, 255, 255, 0.06);
        }
        ul.cbp_tmtimeline {
            padding: 0;
        }
        div class.cdp_tmlabel > li .cbp_tmlabel {
            margin-bottom: 0;
        }
        .cbp_tmtimeline {
            margin: 30px 0 0 0;
            padding: 0;
            list-style: none;
            position: relative;
        }
        /* The line */
        .cbp_tmtimeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: RGBA(0, 0, 0, 0.02);
            left: 80px;
            margin-left: 10px;
        }
        /* The date/time */
        .cbp_tmtimeline > li .cbp_tmtime {
            display: block;
            /* width: 29%; */
            /* padding-right: 110px; */
            max-width: 70px;
            position: absolute;
        }
        .cbp_tmtimeline > li .cbp_tmtime span {
            display: block;
            text-align: right;
        }
        .cbp_tmtimeline > li .cbp_tmtime span:first-child {
            font-size: 0.9em;
            color: #bdd0db;
        }
        .cbp_tmtimeline > li .cbp_tmtime span:last-child {
            font-size: 1.2em;
            color: #9BCD9B;
        }
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child {
            color: RGBA(255, 125, 73, 0.75);
        }
        div.cbp_tmlabel > p {
            margin-bottom: 0;
        }
        /* Right content */
        .cbp_tmtimeline > li .cbp_tmlabel {
            margin: 0 0 45px 65px;
            background: #9BCD9B;
            color: #fff;
            padding: .8em 1.2em .4em 1.2em;
            /* font-size: 1.2em; */
            font-weight: 300;
            line-height: 1.4;
            position: relative;
            border-radius: 5px;
            transition: all 0.3s ease 0s;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            display: block;
        }
        .cbp_tmlabel:hover {
            /* transform:scale(1.05); */
            transform: translateY(-3px);
            z-index: 1;
            -webkit-box-shadow: 0 15px 32px rgba(0, 0, 0, 0.15) !important
        }
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel {
            background: RGBA(255, 125, 73, 0.75);
        }
        /* The triangle */
        .cbp_tmtimeline > li .cbp_tmlabel:after {
            right: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-right-color: #9BCD9B;
            border-width: 10px;
            top: 4px;
        }
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after {
            border-right-color: RGBA(255, 125, 73, 0.75);
        }
        p.shuoshuo_time {
            margin-top: 10px;
            border-top: 1px dashed #fff;
            padding-top: 5px;
        }
        /* Media */
        @media screen and (max-width: 65.375em) {
            .cbp_tmtimeline > li .cbp_tmtime span:last-child {
                font-size: 1.2em;
            }
        }
        .shuoshuo_author_img img {
            border: 1px solid #ddd;
            padding: 2px;
            float: left;
            border-radius: 64px;
            transition: all 1.0s;
        }
        .avatar {
            -webkit-border-radius: 100% !important;
            -moz-border-radius: 100% !important;
            box-shadow: inset 0 -1px 0 #3333sf;
            -webkit-box-shadow: inset 0 -1px 0 #3333sf;
            -webkit-transition: 0.4s;
            -webkit-transition: -webkit-transform 0.4s ease-out;
            transition: transform 0.4s ease-out;
            -moz-transition: -moz-transform 0.4s ease-out;
        }
        .zhuan {
            transform: rotateZ(720deg);
            -webkit-transform: rotateZ(720deg);
            -moz-transform: rotateZ(720deg);
        }
        /* end */
    </style>
    </head>
    <body>
    <div id="primary" class="content-area wrap" style="">
        <main id="main" class="site-main" role="main">
            <div id="shuoshuo_content">
                <ul class="cbp_tmtimeline">
                    <?php query_posts("post_type=shuoshuo&post_status=publish&posts_per_page=-1");if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li> <span class="shuoshuo_author_img"><?php echo get_avatar(get_the_author_meta('email'), 50); ?>
                    <!-- <img src="" class="avatar avatar-48" width="48" height="48"> -->
                </span>
                        <a class="cbp_tmlabel" href="javascript:void(0)">
                            <p></p>
                            <p><?php the_title(); ?></p>
                            <p></p>
                            <p class="shuoshuo_time"><i class="fa fa-clock-o"></i>
                                <?php the_time('Y年 n月 j日 G:i'); ?>
                            </p>
                        </a>
                        <?php endwhile;endif; ?>
                    </li>
                </ul>
            </div>
        </main>
        <!-- .site-main -->
    </div>
    <script type="text/javascript">
        $(function () {
            var oldClass = "";
            var Obj = "";
            $(".cbp_tmtimeline li").hover(function () {
                Obj = $(this).children(".shuoshuo_author_img");
                Obj = Obj.children("img");
                oldClass = Obj.attr("class");
                var newClass = oldClass + " zhuan";
                Obj.attr("class", newClass);
            }, function () {
                Obj.attr("class", oldClass);
            })
        })
    </script>
    <?php get_footer();?>