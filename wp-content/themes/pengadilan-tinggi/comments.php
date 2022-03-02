<div class="cleared"></div>
<div id="comments" class="blog-comments">
	<span class="t">
		<?php
		if (!have_comments()) {
			echo "Leave a Comment";
		} else {
			echo get_comment_count(get_the_id())['total_comments'] . " Comments";
		}
		?>
	</span>
	<div class="cleared"></div>

	<div class="comments">
		<?php
		wp_list_comments(
			array(
				'avatar_size' => 50,
				'style' => 'div',
			)
		)
		?>
	</div>

	<div class="cleared"></div>

	<div class="respond">
		<?php
		if (comments_open(){
			comment_form(
				array(
					'class_form' => '',
					'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
					'title_reply_after' => '</h2>'
				)
			)})
		?>
	</div>
	<div class="cleared"></div>

</div>