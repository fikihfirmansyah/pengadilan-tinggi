<?php
//Adds dynamic title tag supports

use function PHPSTORM_META\map;

function pt_theme_suppport()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'pt_theme_suppport');

////////////////
////////////////
////////////////

function pt_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}
add_action('init', 'pt_menus');

////////////////
////////////////
////////////////

function pt_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('pt-crimson', get_template_directory_uri() . "/assets/css/crimson/style.css", array('pt-light'), $version, 'all');
    wp_enqueue_style('pt-light', get_template_directory_uri() . "/assets/css/light/general.css", array(), $version, 'all');
    wp_enqueue_style('pt-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
    wp_enqueue_style('pt-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css", array(), '6.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'pt_register_styles');

////////////////
////////////////
////////////////

function pt_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('pt_jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1', true);
    wp_enqueue_script('pt_script', get_template_directory_uri() . "/assets/js/mylibs/script.js", array(), $version, true);
    wp_enqueue_script('pt_modernizr', get_template_directory_uri() . "/assets/js/libs/modernizr-2.0.6.min.js", array(), '2.0.6', true);
}
add_action('wp_enqueue_scripts', 'pt_register_scripts');

add_filter('plugins_auto_update_enabled', '__return_false');
add_filter('themes_auto_update_enabled', '__return_false');

function pt_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Utama Kanan',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        ),
    );

    register_sidebar(
        array(
            'before_title' => '<p style="color:"white";>',
            'after_title' => '</p>',
            'before_widget' => '<p style="color:"white";>',
            'after_widget' => '</p>',
            'name' => 'Footer Utama Kanan',
            'id' => 'sidebar-footer-1',
            'description' => 'Footer Widget Area'
        ),
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="special-1"><li>',
            'after_widget' => '</li></ul>',
            'name' => 'Widget Front Page 1',
            'id' => 'sidebar-front-page-1',
            'description' => 'Widget Front Page 1'
        ),
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Widget Front Page 2',
            'id' => 'sidebar-front-page-2',
            'description' => 'Widget Front Page 2'
        ),
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Front Page 2',
            'id' => 'sidebar-front-page-2',
            'description' => 'Footer Front Page 2'
        ),
    );
}

add_action('widgets_init', 'pt_widget_areas');


function the_breadcrumb()
{

    $sep = ' > ';

    if (!is_front_page()) {

        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;

        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single()) {
            the_category('title_li=');
        } elseif (is_archive() || is_single()) {
            if (is_day()) {
                printf(__('%s', 'text_domain'), get_the_date());
            } elseif (is_month()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
            } elseif (is_year()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
            } else {
                _e('Blog Archives', 'text_domain');
            }
        }

        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }

        // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }

        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()) {
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ($page_for_posts_id) {
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}

function pp_pagination_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stops execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Adds current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class=""><ul class="pagination">' . "\n";

    /** Previous Post Link Function */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link());

    /** Links to the first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Links to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Links to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link function */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link());

    echo '</ul></div>' . "\n";
}

// older post class added
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="btn btn-default"';
}
