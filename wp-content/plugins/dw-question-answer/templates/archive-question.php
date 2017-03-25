<?php
/**
 * The template for displaying question archive pages
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.3
 */
?>
    <?php if (dwqa_has_question()) : ?>
        <?php while (dwqa_has_question()) : dwqa_the_question(); ?>
            <?php if (get_post_status() == 'publish' || (get_post_status() == 'private' && dwqa_current_user_can('edit_question', get_the_ID()))) : ?>
                <?php dwqa_load_template('content', 'question') ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php dwqa_load_template('content', 'none') ?>
    <?php endif; ?>

    <div class="block_txt_datcauhoi text-center">
        <?php dwqa_question_paginate_link() ?>
        <?php if (dwqa_current_user_can('post_question')) : ?>
            <div class="dwqa-ask-question"><a
                        href="<?php echo dwqa_get_ask_link(); ?>"
                        class="text-uppercase txt_16 txt_site"><?php _e('đặt câu hỏi', 'dwqa'); ?></a></div>
        <?php endif; ?>
    </div>
</div>
