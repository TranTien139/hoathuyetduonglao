<?php
/**
 * The template for displaying single answers
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.3
 */
?>
<?php if ( dwqa_current_user_can( 'post_question' ) ) : ?>
	<?php do_action( 'dwqa_before_question_submit_form' ); ?>
	<form method="post" class="dwqa-content-edit-form">
		<div class="form-group">

			<?php $title = isset( $_POST['question-title'] ) ? sanitize_title( $_POST['question-title'] ) : ''; ?>
            <input type="text" data-nonce="<?php echo wp_create_nonce( '_dwqa_filter_nonce' ) ?>" id="question-title" name="question-title" class="form-control" placeholder="Tiêu đề *">
		</div>
		<?php $content = isset( $_POST['question-content'] ) ? sanitize_text_field( $_POST['question-content'] ) : ''; ?>
		<div class="form-group"> <textarea  class="form-control input_noidung" name = 'question-content'  id ='question-content'   placeholder="Nội dung"></textarea></div>
		<?php global $dwqa_general_settings; ?>
		<?php if ( isset( $dwqa_general_settings['enable-private-question'] ) && $dwqa_general_settings['enable-private-question'] ) : ?>
		<?php endif; ?>
		<div class="form-group">
			<?php $tags = isset( $_POST['question-tag'] ) ? sanitize_text_field( $_POST['question-tag'] ) : ''; ?>
			<input type="text" class="form-control" name="question-tag" placeholder="Thẻ tag" value="<?php echo $tags ?>" >
		</div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Số điện thoại">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Địa chỉ">
            </div>

		<?php if ( dwqa_current_user_can( 'post_question' ) && !is_user_logged_in() ) : ?>
		<div class="form-group">

			<?php $email = isset( $_POST['_dwqa_anonymous_email'] ) ? sanitize_email( $_POST['_dwqa_anonymous_email'] ) : ''; ?>
			<input type="email" class="form-control" name="_dwqa_anonymous_email" placeholder="Địa chỉ email" value="<?php echo $email ?>" >
		</div>
		<div class="form-group">

			<?php $name = isset( $_POST['_dwqa_anonymous_name'] ) ? sanitize_text_field( $_POST['_dwqa_anonymous_name'] ) : ''; ?>
			<input type="text" class="form-control" name="_dwqa_anonymous_name"  placeholder="Số điện thoại"  value="<?php echo $name ?>" >
		</div>
		<?php endif; ?>
		<?php wp_nonce_field( '_dwqa_submit_question' ) ?>
		<?php dwqa_load_template( 'captcha', 'form' ); ?>
		<?php do_action('dwqa_before_question_submit_button'); ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-tn-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Mã bảo mật">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-tn-6">
                <div class="form-group">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graphics/img_capcha.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-tn-12">
                <div class="form-group">
                    <input type="submit" name="dwqa-question-submit" class="btn btn_site" value="<?php _e( 'Submit', 'dwqa' ) ?>" >
                </div>
            </div>
        </div>
	</form>
	<?php do_action( 'dwqa_after_question_submit_form' ); ?>
<?php else : ?>
	<div class="alert"><?php _e( 'You do not have permission to submit a question','dwqa' ) ?></div>
<?php endif; ?>