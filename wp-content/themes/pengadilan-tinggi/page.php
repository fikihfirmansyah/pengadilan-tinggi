<?php

get_header()

?>


<div class="postcontent">
    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'page');
        }
    }

    ?>

    <div class="cleared"></div>
</div>
<?php

get_sidebar()

?>

<?php

get_footer()

?>