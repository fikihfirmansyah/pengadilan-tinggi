<div class="cleared"></div>
<div id="comments" class="blog-comments">

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
	<div class="respond">
		<?php
		if (comments_open() || pings_open()) {

			if ($comments) {
				echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
			}

			comment_form(
				array(
					'class_form'         => 'section-inner thin max-percentage',
					'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
					'title_reply_after'  => '</h3>',
				)
			);
		} elseif (is_single()) {

			if ($comments) {
				echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
			}
		}

		?>
	</div>
	<div class="cleared"></div>

</div>