<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1809357332636523";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-tn-12">
                <div class="breadcrumb">

                    <?php  $cate = get_the_category(get_the_ID()); if(isset($cate)){$cate = $cate[0]->term_id; }else{$cate = 1; } ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a> <i class="fa fa-caret-right"></i> <?php echo get_category_parents( $cate, true, ' ' ); ?>
                </div>
                <div id="detail_page">
                    <div id="box_detail">
                        <h1 class="title_detail_page"><?php the_title() ?></h1>
                        <div class="author_detail_page"><b><?php the_author(); ?></b>  | <?php the_date('l ,d/m/Y H:i:s','',''); ?>
                        </div>
                        <div class="block_social_page">

                        <?php $curr_url =  get_permalink(); ?>
                            <div class="pull-left social_left"><div class="fb-like" data-href="<?php echo $curr_url; ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div></div>
                            <div class="pull-right social_right"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/img_chat_fb.jpg" /></span>
                                <a href="javascript:void(0)" class="btn_send_email_deatail"><i class="fa fa-envelope"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <h3 class="lead_detail_page"><?php the_excerpt() ?></h3>
                        <div class="relative_news_detail">
                            <div class="item_relative_news">Đã đến ngày công an nhận định nạn nhân Cát Tường nổi</div>
                            <div class="item_relative_news">Đã đến ngày công an nhận định nạn nhân Cát Tường nổi</div>
                        </div>
                        <div class="fck_detail">
                            <?php the_content() ?>
                        </div>
                        <div class="block_social_page social_bottom_detail">
                            <div class="pull-left social_left"><div class="fb-like" data-href="<?php echo $curr_url; ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div></div>
                            <div class="pull-right social_right"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/img_chat_fb.jpg" /></span>
                                <a href="javascript:void(0)" class="btn_send_email_deatail"><i class="fa fa-envelope"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="block_tag_page_detail">
                            <?php $tags = wp_get_post_tags(get_the_ID());
                           ?>
                            <span>Tag</span> <?php if ($tags) {
                                foreach($tags as $tag) { $tag_link = get_tag_link( $tag->term_id ); ?>
                                    <a href="<?php echo $tag_link; ?>"><?php echo $tag->name ?></a>
                            <?php     }
                            } ?>
                        </div>

                        <div id="box_tin_lienquan_detail" class="item_box_col_right space_bottom_10">
                            <div class="title_box"><h3><a href="#">tin liên quan</a></h3>
                                <div class="block_xemthem text-right">
                                    <a href="#" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
                                </div>
                            </div>
                            <div class="content_box">

                                <?php
                                //for use in the loop, list 5 post titles related to first tag on current post
                                $tags = wp_get_post_tags(get_the_ID());
                                if ($tags) {
                                    $first_tag = $tags[0]->term_id;
                                    $args=array(
                                        'tag__in' => array($first_tag),
                                        'post__not_in' => array($post->ID),
                                        'posts_per_page'=>5,
                                        'caller_get_posts'=>1
                                    );
                                    $my_query = new WP_Query($args);
                                    if( $my_query->have_posts() ) {
                                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                            <h5 class="item_tinlienquan_detail"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <span class="txt_666">(<?php  the_date('d-m-Y', '', '');  ?>)</span></h5>
                                            <?php
                                        endwhile;
                                    }
                                    wp_reset_query();
                                }
                                ?>

                            </div>
                        </div>

                        <div id="box_comment" class="space_bottom_20">
                            <div class="fb-comments" data-href="<?php echo $curr_url; ?>" data-numposts="5" data-width ="100%"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-tn-12 space_bottom_10">
               <?php get_sidebar() ?>
            </div>
        </div>

        <div class="block_banner_960x90 width_common text-center space_bottom_20">
            <?php dynamic_sidebar('sidebar-2'); ?>
        </div>
    </div>
</div>
