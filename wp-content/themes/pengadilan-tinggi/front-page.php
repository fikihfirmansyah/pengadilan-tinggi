<?php

get_header()

?>


<div class="postcontent">
    <?php add_revslider('Slider-Banner'); ?>
    <?php add_revslider('Slider-Aplikasi-Eksternal'); ?>
    <?php add_revslider('Slider-Aplikasi-Internal'); ?>

    <div class="cleared"></div>

    <?php

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'berita',
        'posts_per_page' => 4,
    );
    $arr_posts = new WP_Query($args);

    if ($arr_posts->have_posts()) :

        while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
    ?>
            <div class="block-divide" style="float: right; width: 45%; margin-right: 20px; margin-bottom: 20px; padding-right: 20px;">
                <h3><?php the_title(); ?></h3>
                <p><img width="48" height="48" alt="" src="<?php if (has_post_thumbnail()) :
                                                                the_post_thumbnail_url();
                                                            endif; ?>" style="float:left;"><?php the_excerpt(); ?></p>
                <a class="csbutton slider-action" href="<?php the_permalink(); ?>">Lebih lanjut</a>
            </div>

    <?php
        endwhile;
    endif;
    ?>
</div>
<div class="cleared"></div>

<style>
    a {
        color: #872021;
    }

    a:hover {
        color: black;

    }
</style>
<div>
    <div><?php dynamic_sidebar('sidebar-front-page-1'); ?></div>
    <div><?php dynamic_sidebar('sidebar-front-page-2'); ?></div>
</div>
<?php

get_sidebar()

?>

<?php

get_footer()

?>