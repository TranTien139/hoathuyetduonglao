<?php
/**
 * The template for displaying question content
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.3
 */

?>

<div class="item_tuvan width_common">
    <div class="user_tuvan"><i class="fa fa-question-circle-o" aria-hidden="true"></i> <strong class="txt_666"><?php echo get_the_author(); ?></strong> - <?php echo get_the_term_list( get_the_ID(), 'dwqa-question_category',__( '', 'dwqa' ), ', ', '' ); ?></div>
    <div class="block_question">
        <?php the_title(); ?>
        <?php
        global $post;
        $user_id = get_post_field( 'post_author', get_the_ID() ) ? get_post_field( 'post_author', get_the_ID() ) : false;
        $args = array(
            'number' => '1',
            'post_id' => get_the_ID()
        );
        $comments = get_comments($args);
        ?>
    </div>
    <?php if($comments[0]->comment_content != ''){ ?>
    <div class="block_answear">
        <i class="fa fa-caret-up"></i>
        <i><?php echo $comments[0]->comment_content; ?></i> <a href="#" class="txt_999">Xem đầy đủ</a>
        <div class="author_answear" style="text-transform: uppercase;"><?php echo $comments[0]->comment_author; ?></div>
    </div>
    <?php } ?>
</div>


