<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div id="page" class="homepage">
    <div id="banner_top_site">
        <div class="container">
            <div class="text-center"><img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/graphics/img_960x120.jpg" alt=""/>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo_site">&nbsp;</a>
        </div>
    </div>

    <header class="hidden-sm hidden-xs">
        <div id="wrapper_header" class="width_common">
            <div class="container">
                <div class="relative">
                    <div id="main_menu">
                        <div class="">
                            <?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'menu_web')); ?>
                        </div>
                    </div>
                    <div class="block_search_header">
                        <div class="relative">

                            <form role="search" method="get" class="search-form"
                                  action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="text" placeholder="Tìm Kiếm ..."
                                       value="<?php echo get_search_query(); ?>" name="s">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="menu_tablet" class="width_common hidden-lg hidden-md"><a href="#" class="logo"><img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/graphics/logo_site.png" alt=""/></a>
        <div class="block_hamber_menu">
            <div class="hamber"><span>&nbsp;</span> <span>&nbsp;</span> <span>&nbsp;</span></div>
            <div class="block_menu">
                <div class="width_common">
                    <ul>
                        <li class="active"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Giải pháp </a></li>
                        <li><a href="#"> Nghiên cứu</a></li>
                        <li><a href="#">Hỗ trợ</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper_container">
        <div class="container">
            <div class="row">
                <div id="box_moinhat" class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-tn-12 space_bottom_10">
                    <div class="title_box"><h3><a href="#">Bài viết mới nhất</a></h3></div>
                    <div class="content_box">
                        <div class="block_news width_common">
                            <?php $the_query = new WP_Query('posts_per_page=3');
                            $stt = 0; ?>
                            <?php if (have_posts()):while ($the_query->have_posts()) :
                            $the_query->the_post();
                            if ($stt == 0){ ?>
                            <div class="block_thumb_news">
                                <a class="thunb_image thumb_5x3" href="<?php echo get_permalink() ?>"><img
                                            alt="no image"
                                            src="<?php the_post_thumbnail() ?>"></a>
                            </div>
                            <h2 class="title_box_news">
                                <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
                            </h2>
                            <h4 class="lead_box_news"><?php the_excerpt() ?></h4>
                        </div>

                        <div class="list_sub_news width_common">
                            <?php } else { ?>
                                <div class="item_sub_news">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="<?php echo get_permalink() ?>"><img
                                                    alt="no image"
                                                    src="<?php the_post_thumbnail() ?>"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
                                    </h2>
                                </div>
                                <?php
                            } $stt++;
                            endwhile ?>
                        </div>
                        <?php endif ?>


                        <div class="block_xemthem text-center">
                            <a href="#" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
                        </div>
                    </div>
                </div>

                <?php global $post;
                $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => TINXEMNHIEU);
                $category = get_term(TINXEMNHIEU, 'category');
                $category_link = get_category_link(TINXEMNHIEU); ?>
                <div id="box_tinxemnhieu" class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-tn-12 space_bottom_10">
                    <div class="title_box"><h3><a
                                    href="<?php echo esc_url($category_link); ?> "><?php echo $category->name ?></a>
                        </h3></div>
                    <div class="content_box">
                        <div class="block_news width_common">
                            <?php $postslist = get_posts($args);
                            $stt = 0; ?>
                            <?php foreach ($postslist as $post) :
                            setup_postdata($post);
                            if ($stt == 0){ ?>
                            <div class="block_thumb_news">
                                <a class="thunb_image thumb_5x3" href="<?php echo get_permalink() ?>"><img
                                            alt="no image"
                                            src="<?php the_post_thumbnail() ?>"></a>
                            </div>
                            <h2 class="title_box_news">
                                <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
                            </h2>
                            <h4 class="lead_box_news"><?php the_excerpt() ?></h4>
                        </div>

                        <div class="list_sub_news width_common">
                            <?php } else { ?>
                                <div class="item_sub_news">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="<?php echo get_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
                                    </h2>
                                </div>
                            <?php }
                            $stt++;
                            endforeach;
                            wp_reset_postdata(); ?>
                        </div>

                        <div class="block_xemthem text-center">
                            <a href="<?php echo esc_url($category_link); ?>" class="txt_666"><i
                                        class="fa fa-caret-down"></i> Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div id="box_slider_banner" class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-tn-12 space_bottom_10">
                    <div class="content_box_video width_common">
                        <?php global $post;
                        $args = array('posts_per_page' => 4, 'order' => 'ASC', 'orderby' => 'title', 'category' => SLIDERIGHT); ?>
                        <div class="flexslider">
                            <ul class="slides">
                                <?php $postslist = get_posts($args); ?>
                                        <?php foreach ($postslist as $post) :setup_postdata($post); ?>
                                <li><a href="<?php echo the_permalink() ?>"><?php the_post_thumbnail() ?></a></li>
                                        <?php endforeach; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-tn-12">
                    <?php global $post;
                    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => KIENTHUCHANLAM);
                    $category = get_term(KIENTHUCHANLAM, 'category');
                    $category_link = get_category_link(KIENTHUCHANLAM); ?>
                    <div id="box_kienthuc_hanlam" class="box_common_site">
                        <div class="title_box_common">
                            <h3 class="wap_title_box relative">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_non.png"
                                     class="icon_title">
                                <a class="text_title_box"
                                   href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a>
                            </h3>
                        </div>
                        <div class="content_box_common width_common">
                            <?php $postslist = get_posts($args);
                            $stt = 0; ?>
                            <?php foreach ($postslist as $post) :
                            setup_postdata($post);
                            if ($stt == 0){ ?>
                            <div class="block_news width_common">
                                <div class="block_thumb_news">
                                    <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                </div>
                                <h2 class="title_box_news">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?>/a>
                                </h2>
                                <h4 class="lead_box_news"><?php the_excerpt(); ?></h4>
                            </div>
                            <div class="list_sub_news width_common dot_list_sub">
                                <?php } else { ?>
                                    <div class="item_sub_news">
                                        <h2 class="title_box_news">
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        </h2>
                                    </div>
                                <?php }
                                $stt++;
                                endforeach;
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>

                    <?php global $post;
                    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => KIENTHUCBENHHOC);
                    $category = get_term(KIENTHUCBENHHOC, 'category');
                    $category_link = get_category_link(KIENTHUCBENHHOC); ?>
                    <div id="box_kienthuc_benhhoc" class="box_common_site">
                        <div class="title_box_common">
                            <h3 class="wap_title_box relative">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_sach.png"
                                     class="icon_title">
                                <a class="text_title_box"
                                   href="<?php esc_url($category_link) ?>"><?php echo $category->name; ?></a>
                            </h3>
                        </div>
                        <?php global $post;
                        $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => TUANHOANNAO);
                        $category = get_term(TUANHOANNAO, 'category');
                        $category_link = get_category_link(TUANHOANNAO); ?>
                        <div class="item_box_kienthuc">
                            <h2 class="block_text_info_box">
                                <a href="<?php esc_url($category_link) ?>"><?php echo $category->name; ?></a>
                            </h2>
                            <div class="content_box_common width_common">
                                <div class="block_news width_common">
                                    <?php $postslist = get_posts($args);
                                    $stt = 0; ?>
                                    <?php foreach ($postslist as $post) :
                                    setup_postdata($post);
                                    if ($stt == 0){ ?>
                                    <div class="block_news width_common">
                                        <div class="block_thumb_news">
                                            <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                        </div>
                                        <h2 class="title_box_news">
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?>/a>
                                        </h2>
                                        <h4 class="lead_box_news"><?php the_excerpt(); ?></h4>
                                    </div>
                                    <div class="list_sub_news width_common dot_list_sub">
                                        <?php } else { ?>
                                            <div class="item_sub_news">
                                                <h2 class="title_box_news">
                                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                                </h2>
                                            </div>
                                        <?php }
                                        $stt++;
                                        endforeach;
                                        wp_reset_postdata(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php global $post;
                        $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => TUANHOANNGOAIVI);
                        $category = get_term(TUANHOANNGOAIVI, 'category');
                        $category_link = get_category_link(TUANHOANNGOAIVI); ?>
                        <div class="item_box_kienthuc">
                            <h2 class="block_text_info_box">
                                <a href="<?php esc_url($category_link) ?>"><?php echo $category->name; ?></a>
                            </h2>
                            <div class="content_box_common width_common">
                                <div class="block_news width_common">
                                    <?php $postslist = get_posts($args);
                                    $stt = 0; ?>
                                    <?php foreach ($postslist as $post) :
                                    setup_postdata($post);
                                    if ($stt == 0){ ?>
                                    <div class="block_news width_common">
                                        <div class="block_thumb_news">
                                            <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                        </div>
                                        <h2 class="title_box_news">
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?>/a>
                                        </h2>
                                        <h4 class="lead_box_news"><?php the_excerpt(); ?></h4>
                                    </div>
                                    <div class="list_sub_news width_common dot_list_sub">
                                        <?php } else { ?>
                                            <div class="item_sub_news">
                                                <h2 class="title_box_news">
                                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                                </h2>
                                            </div>
                                        <?php }
                                        $stt++;
                                        endforeach;
                                        wp_reset_postdata(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php global $post;
                        $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => SOVUADONGMACH);
                        $category = get_term(SOVUADONGMACH, 'category');
                        $category_link = get_category_link(SOVUADONGMACH); ?>
                        <div class="item_box_kienthuc">
                            <h2 class="block_text_info_box">
                                <a href="<?php esc_url($category_link) ?>"><?php echo $category->name; ?></a>
                            </h2>
                            <div class="content_box_common width_common">
                                <div class="block_news width_common">
                                    <?php $postslist = get_posts($args);
                                    $stt = 0; ?>
                                    <?php foreach ($postslist as $post) :
                                    setup_postdata($post);
                                    if ($stt == 0){ ?>
                                    <div class="block_news width_common">
                                        <div class="block_thumb_news">
                                            <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                        </div>
                                        <h2 class="title_box_news">
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?>/a>
                                        </h2>
                                        <h4 class="lead_box_news"><?php the_excerpt(); ?></h4>
                                    </div>
                                    <div class="list_sub_news width_common dot_list_sub">
                                        <?php } else { ?>
                                            <div class="item_sub_news">
                                                <h2 class="title_box_news">
                                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                                </h2>
                                            </div>
                                        <?php }
                                        $stt++;
                                        endforeach;
                                        wp_reset_postdata(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-tn-12">
                    <?php global $post;
                    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => SUCKHOELAMDEP);
                    $category = get_term(SUCKHOELAMDEP, 'category');
                    $category_link = get_category_link(SUCKHOELAMDEP); ?>
                    <div id="box_dieutri" class="box_common_site">
                        <div class="title_box_common">
                            <h3 class="wap_title_box relative">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_dieutri.png"
                                     class="icon_title">
                                <a class="text_title_box"
                                   href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a>
                            </h3>
                        </div>
                        <div class="content_box_common width_common">
                            <div class="block_news width_common">
                                <?php $postslist = get_posts($args);
                                $stt = 0; ?>
                                <?php foreach ($postslist as $post) :
                                setup_postdata($post);
                                if ($stt == 0){ ?>
                                <div class="block_news width_common">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><img alt=""
                                                                                                              src="<?php the_post_thumbnail() ?>"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?>/a>
                                    </h2>
                                    <h4 class="lead_box_news"><?php the_excerpt(); ?></h4>
                                </div>
                                <div class="list_sub_news width_common dot_list_sub">
                                    <?php } else { ?>
                                        <div class="item_sub_news">
                                            <h2 class="title_box_news">
                                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                            </h2>
                                        </div>
                                    <?php }
                                    $stt++;
                                    endforeach;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>

                        <div id="box_tuvan" class="box_common_site">
                            <div class="title_box_common">
                                <h3 class="wap_title_box relative">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_tuvan.png"
                                         class="icon_title">
                                    <a class="text_title_box" href="#">tư vấn - chia sẻ</a>
                                </h3>
                            </div>
                            <div class="content_box_common width_common">
                                <div class="list_tuvan width_common">
                                    <div class="item_tuvan width_common">
                                        <div class="user_tuvan"><i class="fa fa-question-circle-o"
                                                                   aria-hidden="true"></i> <strong class="txt_666">Hoàng
                                                Phương</strong> - <span class="txt_aaa">viêm khớp</span></div>
                                        <div class="block_question">
                                            Mẹ tôi năm nay 47t, gần đây mẹ hay bị ra mồ hôi và người nóng bừng lên làm
                                            mẹ mệt mỏi và khó ngủ. Em có thể mua Amanda cho mẹ uống lâu dài đc không?
                                        </div>
                                        <div class="block_answear">
                                            <i class="fa fa-caret-up"></i>
                                            <i>Mẹ tôi năm nay 47t, gần đây mẹ hay bị ra mồ hôi và người nóng bừng lên
                                                làm mẹ mệt mỏi và khó ngủ...</i> <a href="#" class="txt_999">Xem đầy
                                                đủ</a>
                                            <div class="author_answear">TS.PGS Nguyễn Văn A</div>
                                        </div>
                                    </div>
                                    <div class="item_tuvan width_common">
                                        <div class="user_tuvan"><i class="fa fa-question-circle-o"
                                                                   aria-hidden="true"></i> <strong class="txt_666">Hoàng
                                                Phương</strong> - <span class="txt_aaa">viêm khớp</span></div>
                                        <div class="block_question">
                                            Mẹ tôi năm nay 47t, gần đây mẹ hay bị ra mồ hôi và người nóng bừng lên làm
                                            mẹ mệt mỏi và khó ngủ. Em có thể mua Amanda cho mẹ uống lâu dài đc không?
                                        </div>
                                        <div class="block_answear">
                                            <i class="fa fa-caret-up"></i>
                                            <i>Mẹ tôi năm nay 47t, gần đây mẹ hay bị ra mồ hôi và người nóng bừng lên
                                                làm mẹ mệt mỏi và khó ngủ...</i> <a href="#" class="txt_999">Xem đầy
                                                đủ</a>
                                            <div class="author_answear">TS.PGS Nguyễn Văn A</div>
                                        </div>
                                    </div>
                                    <div class="item_tuvan width_common">
                                        <div class="user_tuvan"><i class="fa fa-question-circle-o"
                                                                   aria-hidden="true"></i> <strong class="txt_666">Hoàng
                                                Phương</strong> - <span class="txt_aaa">viêm khớp</span></div>
                                        <div class="block_question">
                                            Mẹ tôi năm nay 47t, gần đây mẹ hay bị ra mồ hôi và người nóng bừng lên làm
                                            mẹ mệt mỏi và khó ngủ. Em có thể mua Amanda cho mẹ uống lâu dài đc không?
                                        </div>
                                        <div class="block_answear">
                                            <i class="fa fa-caret-up"></i>
                                            <i>Mẹ tôi năm nay 47t, gần đây mẹ hay bị ra mồ hôi và người nóng bừng lên
                                                làm mẹ mệt mỏi và khó ngủ...</i> <a href="#" class="txt_999">Xem đầy
                                                đủ</a>
                                            <div class="author_answear">TS.PGS Nguyễn Văn A</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block_txt_datcauhoi text-center"><a href="#"
                                                                                class="text-uppercase txt_16 txt_site"><b>đặt
                                            câu hỏi</b></a></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-tn-12">
                        <div id="box_video" class="width_common space_bottom_20">
                            <?php global $post;
                            $args = array('posts_per_page' => 6, 'order' => 'ASC', 'orderby' => 'title', 'category' => KHOVIDEO);
                            $category = get_term(KHOVIDEO, 'category');
                            $category_link = get_category_link(KHOVIDEO); ?>
                            <div class="title_box_video width_common">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_video.png"
                                     class="icon_title">
                                <a class="text_title_box" href="<?php echo esc_url($category_link) ?>"><?php echo $category->name; ?></a>
                            </div>
                            <div class="content_box_video width_common">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <?php $postslist = get_posts($args); ?>
                                        <?php foreach ($postslist as $post) :
                                            setup_postdata($post); ?>
                                            <li>
                                                <div class="item_video">
                                                    <div class="thumb_video relative">
                                                        <div class="thunb_image thumb_5x3"><img
                                                                    src="<?php the_post_thumbnail() ?>"
                                                                    alt=""/></div>
                                                        <a href="<?php the_permalink() ?>" class="masking_video1"> &nbsp;</a>
                                                        <a href="<?php the_permalink() ?>" class="masking_video2"> &nbsp;</a>
                                                    </div>
                                                    <h2 class="title_video"><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                                    </h2>
                                                </div>
                                            </li>
                                            <?php
                                        endforeach;
                                        wp_reset_postdata(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block_banner_960x90 width_common text-center space_bottom_20">
                    <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/graphics/img_960x90.jpg"
                                     alt=""/></a>
                </div>
            </div>
        </div>

        <div id="menu_footer">
            <?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'menu_footer')); ?>
        </div>
        <footer id="wrapper_footer">
            <div class="container">
                <div id="footer" class="width_common">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                            <div class="title_footer">Công ty Dược phẩm Nhất Nhất</div>
                            <div class="item_footer"><i class="fa fa-map-marker" aria-hidden="true"></i> 6A/508 Đường
                                Láng, Quận Đống Đa, Hà Nội, Việt Nam
                            </div>
                            <div class="item_footer"><i class="fa fa-phone" aria-hidden="true"></i> 04.35 62 5766</div>
                            <div class="item_footer"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">lienhe@nhatnhat.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                            <div class="title_footer">Hỗ trợ khách hàng</div>
                            <div class="item_footer"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a
                                        href="#">Tuyển dụng</a></div>
                            <div class="item_footer"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a
                                        href="#">Chương trình khuyến mãi</a></div>
                            <div class="item_footer"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a
                                        href="#">Tra cứu thông tin sản phẩm chính hãng</a></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-tn-12">
                            <div class="title_footer">Chia sẻ &nbsp; <a href="#" class="item_share_footer"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"
                                                                                                  class="item_share_footer"><i
                                            class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#"
                                                                                                     class="item_share_footer"><i
                                            class="fa fa-youtube" aria-hidden="true"></i></a></div>
                            <div class="space_bottom_10">Đăng ký nhận bản tin</div>
                            <div class="space_bottom_10">
                                <div class="block_search_footer">
                                    <div class="relative">
                                        <input type="text" value="Email">
                                        <button>Đăng ký</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="coppy_right">
                <div class="container">
                    <p>Giấy phép số: 540/GP-TTĐT ngày 09/03/2015 của Sở thông tin và truyền thông, UBND TP Hà Nội</p>
                    <p>Bản quyền @2013 thuộc về CÔNG TY TNHH NHẤT NHẤT </p>
                </div>
            </div>

        </footer>
    </div>
    <!-- /page -->

<?php get_footer();
