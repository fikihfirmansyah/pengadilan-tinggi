<div class="post-inner article">
    <h2 class="postheader"><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h2>
    <div class="blogheadericons">

        <div class="postheadericons">
            <span class="date" style="font-weight: bold;"><?php echo (get_the_date('d M Y', '', '', TRUE)) ?></br>
            </span><br>
            <?php the_tags() ?><br><br>
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
        <div class="author">Written by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author() ?></a></div>
        <a href="<?php the_permalink() ?>"><img class="pic3d" alt="" src="<?php the_post_thumbnail_url('medium') ?>" /></a>
        <p><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>" class="csbutton-color" style="float: right">Continue Reading</a>
    </div>

    <div class="cleared"></div>
    <br>
</div>