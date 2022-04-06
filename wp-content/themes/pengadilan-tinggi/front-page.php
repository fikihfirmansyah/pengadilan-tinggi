<?php


get_header(); ?>


<!--begin main content section -->
<div class="layout-cell content">
    <?php add_revslider('Slider-Banner'); ?>
    <table border="0" cellpadding="0" cellspacing="0" style="width:100%; border-width:0px;">
        <tbody>
            <tr>
                <td style="width:50%;">
                    <div class="componentheading">Aplikasi Eksternal</div>
                    <?php add_revslider('Slider-Aplikasi-Eksternal'); ?>
                </td>
                <td style="width:50%;">
                    <div class="componentheading">Aplikasi Internal</div>
                    <?php add_revslider('Slider-Aplikasi-Internal'); ?>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="blockheader">
        <div class="t"></div>
    </div>
    <p>&nbsp;</p>

    <div class="box post">
        <div class="box-body post-body">
            <div class="post-inner article">
                <div class="postcontent">
                    <div id="primary" class="site-content">
                        <div id="content" role="main">
                            <div style=" display: grid; grid-template-columns: auto auto; ">
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

                                        <div style="padding-right:10px">
                                            <h3 style="line-height: 110%; font-size:18px; font-weight:bold"><a href="<?php the_permalink(); ?>" style="line-height: 110%; font-size:18px; font-weight:bold"><?php the_title(); ?></a></h3>
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium') ?>
                                            <p><?php the_excerpt(); ?></p>
                                            <a class=" csbutton-color" href="<?php the_permalink(); ?>">Lebih lanjut</a><br><br>
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div><!-- #content -->
                        </div>
                    </div><!-- #primary -->
                    <!-- end of the loop -->

                    <!-- Use reset postdata to restore orginal query -->
                    <?php wp_reset_postdata(); ?>
                    <div class="cleared"></div>
                </div>
                <div class="cleared"></div>
            </div>

            <div class="cleared"></div>
        </div>
    </div>
    <article class="postcontent reasons">


        <div class="widget-pos">
            <div style="display: grid; grid-template-columns: 50% 50% ;">
                <div class="block" style="margin:0 0 10px 10px">
                    <div class="block-body">

                        <div class="blockheader">
                            <div class="t">Berita & Kegiatan</div>
                        </div>

                        <div class="blockcontent">
                            <div class="blockcontent-body">
                                <!-- block-content -->
                                <ul class="bullet-1">
                                    <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'category_name' => 'berita',
                                        'posts_per_page' => 10,
                                    );
                                    $arr_posts = new WP_Query($args);
                                    if ($arr_posts->have_posts()) :
                                        while ($arr_posts->have_posts()) :
                                            $arr_posts->the_post();
                                    ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                                <div class="cleared"></div>
                            </div>
                        </div>
                        <div class="cleared"></div>
                    </div>
                </div>
                <div class="block" style="margin:0 0 10px 10px">
                    <div class="block-body">

                        <div class="blockheader">
                            <div class="t">Pengumuman</div>
                        </div>

                        <div class="blockcontent">
                            <div class="blockcontent-body">
                                <!-- block-content -->
                                <ul class="bullet-1">
                                    <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'category_name' => 'pengumuman',
                                        'posts_per_page' => 10,
                                    );
                                    $arr_posts = new WP_Query($args);
                                    if ($arr_posts->have_posts()) :
                                        while ($arr_posts->have_posts()) :
                                            $arr_posts->the_post();
                                    ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
                                <div class="cleared"></div>
                            </div>
                        </div>
                        <div class="cleared"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /article-content -->
    </article>
    <?php add_revslider('Galeri-Video'); ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>