<?php

get_header()

?>


<div class="postcontent">

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'search');
        }
    } else {
        echo ('<h1>Not Found    </h1>');
    }

    ?>

    <div class="cleared"></div>

</div>

<!-- Page Navigation -->
<div class="page-navigate">
    <?php

    the_posts_pagination() ?>

</div>
<?php

get_sidebar()

?>

<?php

get_footer()

?>