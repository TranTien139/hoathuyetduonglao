<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php CONST CATE_SIDEBAR1 = 3;
CONST CATE_SIDEBAR2 = 9;
CONST CATE_SIDEBAR3 = 4;
CONST CATE_SIDEBAR4 = 2;
CONST CATE_SIDEBAR4 = 2; ?>

<div class="item_box_col_right space_bottom_10">
    <?php global $post;
    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => CATE_SIDEBAR1);
    $category = get_term(CATE_SIDEBAR1, 'category');
    $category_link = get_category_link(CATE_SIDEBAR1); $postslist = get_posts($args); ?>
    <?php if(count($postslist)>0){ ?>
    <div class="title_box"><h3><a href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a></h3></div>
    <?php } ?>
    <div class="content_box">
        <div class="list_news_box_right width_common">
            <div class="item_box_right width_common">
                <?php foreach ($postslist as $post) :
                setup_postdata($post); ?>
                <div class="block_news width_common">
                    <div class="block_thumb_news">
                        <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                    </div>
                    <h2 class="title_box_news title_normal">
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h2>

                </div>
                <?php
                endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <?php if(count($postslist)>0){ ?>
        <div class="block_xemthem text-right">
            <a href="<?php echo esc_url($category_link); ?>" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
        </div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</div>


<div class="item_box_col_right space_bottom_10">
    <?php global $post;
    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => CATE_SIDEBAR2);
    $category = get_term(CATE_SIDEBAR2, 'category');
    $category_link = get_category_link(CATE_SIDEBAR2); $postslist = get_posts($args); ?>
    <?php if(count($postslist)>0){ ?>
        <div class="title_box"><h3><a href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a></h3></div>
    <?php } ?>
    <div class="content_box">
        <div class="list_news_box_right width_common">
            <div class="item_box_right width_common">
                <?php foreach ($postslist as $post) :
                    setup_postdata($post); ?>
                    <div class="block_news width_common">
                        <div class="block_thumb_news">
                            <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                        </div>
                        <h2 class="title_box_news title_normal">
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h2>

                    </div>
                    <?php
                endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <?php if(count($postslist)>0){ ?>
            <div class="block_xemthem text-right">
                <a href="<?php echo esc_url($category_link); ?>" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
            </div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</div>

<div class="item_box_col_right space_bottom_10">
    <?php global $post;
    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => CATE_SIDEBAR3);
    $category = get_term(CATE_SIDEBAR3, 'category');
    $category_link = get_category_link(CATE_SIDEBAR3); $postslist = get_posts($args); ?>
    <?php if(count($postslist)>0){ ?>
        <div class="title_box"><h3><a href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a></h3></div>
    <?php } ?>
    <div class="content_box">
        <div class="list_news_box_right width_common">
            <div class="item_box_right width_common">
                <?php foreach ($postslist as $post) :
                    setup_postdata($post); ?>
                    <div class="block_news width_common">
                        <div class="block_thumb_news">
                            <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                        </div>
                        <h2 class="title_box_news title_normal">
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h2>
                    </div>
                    <?php
                endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <?php if(count($postslist)>0){ ?>
            <div class="block_xemthem text-right">
                <a href="<?php echo esc_url($category_link); ?>" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
            </div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</div>


<div class="item_box_col_right space_bottom_10">
    <?php global $post;
    $args = array('posts_per_page' => 3, 'order' => 'ASC', 'orderby' => 'title', 'category' => CATE_SIDEBAR4);
    $category = get_term(CATE_SIDEBAR4, 'category');
    $category_link = get_category_link(CATE_SIDEBAR4); $postslist = get_posts($args); ?>
    <?php if(count($postslist)>0){ ?>
        <div class="title_box"><h3><a href="<?php echo esc_url($category_link); ?>"><?php echo $category->name; ?></a></h3></div>
    <?php } ?>
    <div class="content_box">
        <div class="list_news_box_right width_common">
            <div class="item_box_right width_common">
                <?php foreach ($postslist as $post) :
                    setup_postdata($post); ?>
                    <div class="block_news width_common">
                        <div class="block_thumb_news">
                            <a class="thunb_image thumb_5x3" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                        </div>
                        <h2 class="title_box_news title_normal">
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                        </h2>

                    </div>
                    <?php
                endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
        <?php if(count($postslist)>0){ ?>
            <div class="block_xemthem text-right">
                <a href="<?php echo esc_url($category_link); ?>" class="txt_666"><i class="fa fa-caret-down"></i> Xem thêm</a>
            </div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
</div>

