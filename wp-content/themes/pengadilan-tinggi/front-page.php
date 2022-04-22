<?php


get_header(); ?>


<!--begin main content section -->
<div class="layout-cell content">
    <?php echo do_shortcode('[ess_grid alias="banner"][/ess_grid]'); ?>
    <?php echo do_shortcode('[ess_grid alias="galeri-video"][/ess_grid]'); ?>

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
                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%; border-width:0px;">
                                <tbody>
                                    <tr>
                                        <td style="width:40%">
                                            <div class="blockheader">
                                                <div class="t" style="font-weight: bold; background: rgb(238,150,8); font-size:17px; background: linear-gradient(90deg, rgba(238,150,8,1) 0%, rgba(135,32,32,0) 100%);">Berita PT Medan</div>
                                            </div>
                                            <br>

                                            <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' => 'berita',
                                                'posts_per_page' => 1,
                                            );
                                            $arr_posts = new WP_Query($args);

                                            if ($arr_posts->have_posts()) :

                                                while ($arr_posts->have_posts()) :
                                                    $arr_posts->the_post();
                                            ?>

                                                    <div style="padding-right:10px">
                                                        <h3 style="line-height: 110%; font-size:14px; margin:5px 0 0px; font-weight:bold"><a href="<?php the_permalink(); ?>" style="line-height: 110%; font-size:14px; text-transform: uppercase; margin:5px 0 0px; font-weight:bold"><?php the_title(); ?></a></h3>
                                                        <b><?php echo get_the_date('d M Y'); ?></b>
                                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'medium') ?>
                                                        <p><?php the_excerpt(); ?></p>
                                                        <!-- <div class="event">
                                                            <p class="event-time"><span class="date"><?php echo (get_the_date('d')) ?></span><span class="month"><?php echo (get_the_date('M Y')) ?></span></p>
                                                        </div> -->

                                                        <!-- <?php echo (get_the_date('d M Y')) ?> -->
                                                        <a class=" csbutton-color" href="<?php the_permalink(); ?>">Lebih lanjut</a><br><br>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </td>
                                        <td style="width:40%;padding:0%; margin:0%">
                                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%; padding:0%; margin:0%; border-width:0px;">
                                                <tbody>
                                                    <div class="blockheader">
                                                        <div class="t" style="font-weight: bold; background: rgb(238,150,8); font-size:17px; background: linear-gradient(90deg, rgba(238,150,8,1) 0%, rgba(135,32,32,0) 100%);">Pengumuman</div>
                                                    </div>
                                                    <br>

                                                    <?php
                                                    $args = array(
                                                        'post_type' => 'post',
                                                        'post_status' => 'publish',
                                                        'category_name' => 'pengumuman',
                                                        'posts_per_page' => 4,
                                                    );
                                                    $arr_posts = new WP_Query($args);

                                                    if ($arr_posts->have_posts()) :

                                                        while ($arr_posts->have_posts()) :
                                                            $arr_posts->the_post();
                                                    ?>

                                                            <tr>
                                                                <td>
                                                                    <div style="padding-right:10px">
                                                                        <h3 style="line-height: 110%; font-size:14px; margin:5px 0 0px; font-weight:bold"><a href="<?php the_permalink(); ?>" style="line-height: 110%; font-size:14px; text-transform: uppercase; margin:5px 0 0px; font-weight:bold"><?php the_title(); ?></a></h3>
                                                                        <b><?php echo get_the_date('d M Y'); ?></b>
                                                                        <a class=" csbutton-color" href="<?php the_permalink(); ?>">Lebih lanjut</a><br><br>
                                                                    </div>


                                                                </td>
                                                            </tr>
                                                    <?php
                                                        endwhile;
                                                    endif;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width:20%">
                                            <div class="blockheader">
                                                <div class="t" style="font-weight: bold; background: rgb(238,150,8); font-size:17px; background: linear-gradient(90deg, rgba(238,150,8,1) 0%, rgba(135,32,32,0) 100%);">Kegiatan PT Medan</div>
                                            </div>
                                            <br>

                                            <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' => 'kegiatan',
                                                'posts_per_page' => 1,
                                            );
                                            $arr_posts = new WP_Query($args);

                                            if ($arr_posts->have_posts()) :

                                                while ($arr_posts->have_posts()) :
                                                    $arr_posts->the_post();
                                            ?>

                                                    <div style="padding-right:10px">
                                                        <h3 style="line-height: 110%; font-size:14px; margin:5px 0 0px; font-weight:bold"><a href="<?php the_permalink(); ?>" style="line-height: 110%; font-size:14px; text-transform: uppercase; margin:5px 0 0px; font-weight:bold"><?php the_title(); ?></a></h3>
                                                        <b><?php echo get_the_date('d M Y'); ?></b>
                                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'medium') ?>
                                                        <p><?php the_excerpt(); ?></p>
                                                        <a class=" csbutton-color" href="<?php the_permalink(); ?>">Lebih lanjut</a><br><br>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:40%;padding:0%; margin:0%">
                                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%; padding:0%; margin:0%; border-width:0px;">
                                                <tbody>
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

                                                            <tr>
                                                                <td>
                                                                    <div style="padding-right:10px">
                                                                        <h3 style="line-height: 110%; font-size:14px; margin:5px 0 0px; font-weight:bold"><a href="<?php the_permalink(); ?>" style="line-height: 110%; font-size:14px; text-transform: uppercase; margin:5px 0 0px; font-weight:bold"><?php the_title(); ?></a></h3>
                                                                        <b><?php echo get_the_date('d M Y'); ?></b>
                                                                        <a class=" csbutton-color" href="<?php the_permalink(); ?>">Lebih lanjut</a><br><br>
                                                                    </div>


                                                                </td>
                                                            </tr>
                                                    <?php
                                                        endwhile;
                                                    endif;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td style="width:40%">
                                            <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' => 'kegiatan',
                                                'posts_per_page' => 1,
                                            );
                                            $arr_posts = new WP_Query($args);

                                            if ($arr_posts->have_posts()) :

                                                while ($arr_posts->have_posts()) :
                                                    $arr_posts->the_post();
                                            ?>

                                                    <div style="padding-right:10px">
                                                        <h3 style="line-height: 110%; font-size:14px; margin:5px 0 0px; font-weight:bold"><a href="<?php the_permalink(); ?>" style="line-height: 110%; font-size:14px; text-transform: uppercase; margin:5px 0 0px; font-weight:bold"><?php the_title(); ?></a></h3>
                                                        <b><?php echo get_the_date('d M Y'); ?></b>
                                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'medium') ?>
                                                        <p><?php the_excerpt(); ?></p>
                                                        <a class=" csbutton-color" href="<?php the_permalink(); ?>">Lebih lanjut</a><br><br>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </td>
                                        <td style="width:20%">
                                            <div class="blockheader">
                                                <div class="t" style="font-weight: bold; background: rgb(238,150,8); font-size:17px; background: linear-gradient(90deg, rgba(238,150,8,1) 0%, rgba(135,32,32,0) 100%);">Artikel Hukum</div>
                                            </div>
                                            <br>

                                            <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' => 'artikelhukum',
                                                'posts_per_page' => 1,
                                            );
                                            $arr_posts = new WP_Query($args);

                                            if ($arr_posts->have_posts()) :

                                                while ($arr_posts->have_posts()) :
                                                    $arr_posts->the_post();
                                            ?>

                                                    <div style="padding-right:10px">
                                                        <h3 style="line-height: 110%; font-size:14px; margin:5px 0 0px; font-weight:bold"><a href="<?php the_permalink(); ?>" style="line-height: 110%; font-size:14px; text-transform: uppercase; margin:5px 0 0px; font-weight:bold"><?php the_title(); ?></a></h3>
                                                        <b><?php echo get_the_date('d M Y'); ?></b>
                                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'medium') ?>
                                                        <p><?php the_excerpt(); ?></p>
                                                        <a class=" csbutton-color" href="<?php the_permalink(); ?>">Lebih lanjut</a><br><br>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <p>&nbsp;</p>

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
    <table border="0" cellpadding="0" cellspacing="0" style="width:100%; border-width:0px;">
        <tbody>
            <tr>
                <td style="width:50%;">
                    <div class="componentheading" style="font-weight: bold; background: rgb(238,150,8); font-size:17px; background: linear-gradient(90deg, rgba(238,150,8,1) 0%, rgba(135,32,32,0) 100%);">Aplikasi Eksternal</div>
                    <?php add_revslider('Slider-Aplikasi-Eksternal'); ?>
                </td>
                <td style="width:50%;">
                    <div class="componentheading" style="font-weight: bold; background: rgb(238,150,8); font-size:17px; background: linear-gradient(90deg, rgba(238,150,8,1) 0%, rgba(135,32,32,0) 100%);">Aplikasi Internal</div>

                    <?php add_revslider('Slider-Aplikasi-Internal'); ?>
                </td>
            </tr>
        </tbody>
    </table>

</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>