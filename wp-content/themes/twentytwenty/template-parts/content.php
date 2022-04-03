<!--begin main content section -->
<div class="layout-cell content">
	<div class="box post">
		<div class="box-body post-body">
			<div class="post-inner article">
				<h2 class="postheader"><a href="#"><?php single_post_title() ?></a>
				</h2>
				<div class="blogheadericons">
					<div class="postheadericons">
						<div class="event">
							<p class="event-time"><span class="date"><?php echo (get_the_date('d')) ?></span><span class="month"><?php echo (get_the_date('M')) ?></span></p>
							<div class="comment"><a href="#comments"> <?php comments_number('0', '%', '%'); ?></a></div>
						</div>

						<!-- <?php comments_number(0) ?> -->
					</div>
				</div>
				<div class="blog postcontent">
					<div class="category">

						<?php
						$categorys = get_the_category();
						foreach ($categorys as $category) :
							echo "<a href= \"" . get_category_link($category->term_id) . "\">" . $category->cat_name . "</a>";
						endforeach;
						?>
					</div>


					<div class="author">Written by <a href="#"><?php echo get_the_author() ?></a></div>
					<div class="block">
						<div class="block-body">
							<!-- <div class="img-zoom"></div> -->
							<?php the_post_thumbnail('medium', array('class' => 'pic3d', 'alt' => 'gallery')); ?>
						</div>
					</div>


					<?php
					the_content();
					?>
					<?php
					comments_template();
					?>

				</div>
			</div>
		</div>
	</div>
</div>