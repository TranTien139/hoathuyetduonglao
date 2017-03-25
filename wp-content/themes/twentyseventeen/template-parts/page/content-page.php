<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
        <div id="wrapper_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-tn-12">
                        <div class="breadcrumb">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a> <i class="fa fa-caret-right"></i> <a class="active_breadcrumb"><?php the_title() ?></a>
                        </div>
                        <?php global $post;
                        $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => get_the_ID());
                        $category = get_term(get_the_ID(), 'category');
                        $category_link = get_category_link(get_the_ID()); $postslist_cate = get_posts($args); ?>

                        <div id="box_hot_folder" class="space_bottom_20">
                            <div class="content_box">
                                <div class="block_news width_common">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                            </div>
                        </div>

                        <?php global $post;
                        $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => TINXEMNHIEU);
                        $category = get_term(TINXEMNHIEU, 'category');
                        $category_link = get_category_link(TINXEMNHIEU); $postslist = get_posts($args); ?>
                        <div id="box_tinxemnhieu_folder" class="width_common space_bottom_20">
                            <?php if(count($postslist)>0){  ?>
                            <div class="title_box"><h3><a href="<?php echo esc_url($category_link); ?>"><?php echo $category->name ?></a></h3></div>
                            <?php } ?>
                            <div class="content_box">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <?php foreach ($postslist as $post) :
                                        setup_postdata($post); ?>
                                        <li>
                                            <div class="item_news_xemnhieu">
                                                <div class="thumb_news relative">
                                                    <div class="thunb_image thumb_5x3"><a href="<?php  the_permalink() ?>"><?php the_post_thumbnail() ?></a></div>

                                                </div>
                                                <h2 class="title_news_xemnhieu"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                            </div>
                                        </li>
                                        <?php
                                        endforeach;
                                        wp_reset_postdata(); ?>

                                    </ul>
                                </div>
                                <div class="clear-fixed"></div>
                            </div>
                        </div>

                        <div class="list_news_folder space_bottom_20 width_common">
                            <div class="list_sub_news width_common">
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                            </div>

                            <div class="width_common block_banner_640"><img src="images/graphics/img_640x90.jpg" alt=""/></div>

                            <div class="list_sub_news width_common">
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                                <div class="item_list_news_folder">
                                    <div class="block_thumb_news">
                                        <a class="thunb_image thumb_5x3" href="#"><img alt="" src="images/graphics/img_370x222.jpg"></a>
                                    </div>
                                    <h2 class="title_box_news">
                                        <a href="#">Nguy cơ bị viêm gan cấp do sử dụng quá nhiều rượu bia</a>
                                    </h2>
                                    <h4 class="lead_box_news">Mối nguy hiểm tiềm  tới đó chính là “nguy cơ bị viêm gan cấp do sử dụng mật động vật“. Không ít người có quan niệm rằng sử dụng mật động vật...</h4>
                                </div>
                            </div>
                            <div class="block_xemthem text-right">
                                <a href="#" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-tn-12 space_bottom_10">
                       <?php  get_sidebar() ?>

                    </div>
                </div>

                <div class="block_banner_960x90 width_common text-center space_bottom_20">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
            </div>
        </div>

