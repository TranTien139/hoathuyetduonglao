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

    <div id="wrapper_container">
        <div class="container">
            <div class="row">
                <div id="box_moinhat" class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-tn-12 space_bottom_10">
                    <div class="title_box"><h3><a href="<?php echo get_site_url() ?>/category/bai-viet-moi-nhat">Bài viết mới nhất</a></h3></div>
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
                                <a href="<?php echo get_permalink() ?>" class="four-lines"><?php the_title() ?></a>
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
                                        <a href="<?php echo get_permalink() ?>" class="four-lines"><?php the_title() ?></a>
                                    </h2>
                                </div>
                                <?php
                            } $stt++;
                            endwhile ?>

                        <?php endif ?>
                        </div>

                        <div class="block_xemthem text-center">
                            <a href="<?php echo get_site_url() ?>/category/bai-viet-moi-nhat" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
                        </div>
                    </div>
                </div>

                <?php global $post;
                $args = array('posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => TINXEMNHIEU);
                $category = get_term(TINXEMNHIEU, 'category');
                $category_link = get_category_link(TINXEMNHIEU); $postslist = get_posts($args);
                $stt = 0; ?>
                <div id="box_tinxemnhieu" class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-tn-12 space_bottom_10">
                    <?php if(count($postslist)>0){  ?> <div class="title_box"><h3><a
                                    href="<?php echo esc_url($category_link); ?>"><?php echo $category->name ?></a>
                        </h3></div> <?php } ?>
                    <div class="content_box">
                        <div class="block_news width_common">

                            <?php foreach ($postslist as $post) :
                            setup_postdata($post);
                            if ($stt == 0){ ?>
                            <div class="block_thumb_news">
                                <a class="thunb_image thumb_5x3" href="<?php echo get_permalink() ?>"><img
                                            alt="no image"
                                            src="<?php the_post_thumbnail() ?>"></a>
                            </div>
                            <h2 class="title_box_news">
                                <a href="<?php echo get_permalink() ?>" class="four-lines"><?php the_title() ?></a>
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
                        $args = array('posts_per_page' => 4, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => SLIDERIGHT); ?>
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
                    $args = array('posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => KIENTHUCHANLAM);
                    $category = get_term(KIENTHUCHANLAM, 'category');
                    $category_link = get_category_link(KIENTHUCHANLAM); $postslist = get_posts($args);
                    $stt = 0; ?>
                    <div id="box_kienthuc_hanlam" class="box_common_site">
                        <?php if(count($postslist)>0){ ?>
                        <div class="title_box_common">
                            <h3 class="wap_title_box relative">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_non.png"
                                     class="icon_title">
                                <a class="text_title_box"
                                   href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a>
                            </h3>
                        </div>
                        <?php } ?>
                        <div class="content_box_common width_common">
                            <div class="block_news width_common">

                            <?php foreach ($postslist as $post) :
                            setup_postdata($post);
                            if ($stt == 0){ ?>
                                <div class="block_thumb_news">
                                    <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                </div>
                                <h2 class="title_box_news">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
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
                    $args = array('posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => KIENTHUCBENHHOC);
                    $category = get_term(KIENTHUCBENHHOC, 'category');
                    $link_cate = get_category_parents_custom( KIENTHUCBENHHOC, true, '' ); ?>
                    <div id="box_kienthuc_benhhoc" class="box_common_site">
                        <div class="title_box_common">
                            <?php if(isset($category)){ ?>
                            <h3 class="wap_title_box relative">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_sach.png"
                                     class="icon_title">
                                <a class="text_title_box"
                                   href="<?php echo $link_cate; ?>"><?php echo $category->name; ?></a>
                            </h3>
                            <?php } ?>
                        </div>

                        <?php $list_cate = getChildCate(KIENTHUCBENHHOC); if(isset($list_cate)){ foreach($list_cate as $item=>$value){  ?>
                        <?php global $post;
                        $args = array('posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => $value);
                        $category = get_term($value, 'category');
                        $stt = 0;  $link_cate = get_category_parents_custom( $value, true, '' ); ?>
                        <div class="item_box_kienthuc">
                            <?php if(count($postslist)>0){ ?>
                            <h2 class="block_text_info_box">
                                <a href="<?php echo $link_cate; ?>"><?php echo $category->name; ?></a>
                            </h2>
                            <?php }  ?>
                            <div class="content_box_common width_common">
                                <div class="block_news width_common">
                                    <div class="block_news width_common">
                                    <?php foreach ($postslist as $post) :
                                    setup_postdata($post);
                                    if ($stt == 0){ ?>
                                        <div class="block_thumb_news">
                                            <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                        </div>
                                        <h2 class="title_box_news">
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
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

                       <?php }} ?>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-tn-12">
                    <?php global $post;
                    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => SUCKHOELAMDEP);
                    $category = get_term(SUCKHOELAMDEP, 'category');
                    $category_link = get_category_link(SUCKHOELAMDEP); $postslist = get_posts($args);
                    $stt = 0;  ?>
                    <div id="box_dieutri" class="box_common_site">
                        <?php if(count($postslist)>0){ ?>
                        <div class="title_box_common">
                            <h3 class="wap_title_box relative">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_dieutri.png"
                                     class="icon_title">
                                <a class="text_title_box"
                                   href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a>
                            </h3>
                        </div>
                        <?php } ?>
                        <div class="content_box_common width_common">
                            <div class="block_news width_common">
                                <div class="block_news width_common">
                                <?php foreach ($postslist as $post) :
                                setup_postdata($post);
                                if ($stt == 0){ ?>
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

                        <div id="box_tuvan" class="box_common_site">
                            <div class="title_box_common">
                                <h3 class="wap_title_box relative">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_tuvan.png"
                                         class="icon_title">
                                    <a class="text_title_box" href="<?php echo esc_url(home_url('/tu-van-chia-se')) ?>">tư vấn - chia sẻ</a>
                                </h3>
                            </div>
                            <div class="content_box_common width_common">
                                <div class="list_tuvan width_common">
                                    <div class="item_tuvan width_common">
                                        <?php echo do_shortcode('[dwqa-list-questions]'); ?>
                                    </div>
                                    <div class="block_txt_datcauhoi text-center"><a href="<?php echo esc_url(home_url('/tu-van-chia-se')) ?>" class="text-uppercase txt_16 txt_site"><b>đặt câu hỏi</b></a></div>
                                </div>
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
                            $category_link = get_category_link(KHOVIDEO); $postslist = get_posts($args);  if(count($postslist)>0){ ?>
                            <div class="title_box_video width_common">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/ico_video.png"
                                     class="icon_title">
                                <a class="text_title_box" href="<?php echo esc_url($category_link) ?>"><?php echo $category->name; ?></a>
                            </div>
                            <?php } ?>
                            <div class="content_box_video width_common">
                                <div class="flexslider">
                                    <ul class="slides">
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
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
            </div>
        </div>
    <!-- /page -->

<?php get_footer();
