<?php


get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php if (is_singular()) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php else : ?>
    <h1>No posts to display</h1>
<?php endif; ?>

<?php get_footer(); ?>