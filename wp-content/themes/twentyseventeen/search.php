<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div id="wrapper_container">
    <div class="container">
<?php
echo get_search_query();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content', 'excerpt' );

    endwhile;

    the_posts_pagination( array(
        'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
        'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
    ) );
else : ?>

    <p><?php _e( 'đéo có kết quả nào được tìm thấy', 'twentyseventeen' ); ?></p>
    <?php
endif;
?>
    </div>
    </div>
<?php get_footer();
