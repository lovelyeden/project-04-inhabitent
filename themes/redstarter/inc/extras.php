<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

/* Remove "Editor" links from sub-menus */
function inhabitent_remove_submenus()
{
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('plugins.php', 'plugin-editor.php');
}
add_action('admin_menu', 'inhabitent_remove_submenus', 110);

function redstarter_login_logo()
{
    echo '<style type="text/css">
         h1 a { background-image:url(' . get_stylesheet_directory_uri() . '/assets/images/logos/inhabitent-logo-text-dark.svg) !important;
       !important;background-size: contain !important; height: 53px !important; width: 300px !important;}
     </style>';
}
add_action('login_head', 'redstarter_login_logo');

function the_url($url)
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'the_url');

function inhabitent_body_class_for_pages($classes)
{
    if (is_singular('page')) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'inhabitent_body_class_for_pages');

function inhabitent_pre_get_posts($query)
{
    if (is_post_type_archive('product') &&
        !is_admin() && $query->is_main_query()
    ) {
        $query->set('posts_per_page', 16);
    }
}

add_action('pre_get_posts', 'inhabitent_pre_get_posts');

function shop_archive_title($title)
{
    if (is_post_type_archive('product')) {
        $title = 'Shop Stuff';
    }
    return $title;
}
add_filter('get_the_archive_title', 'shop_archive_title');


// /* get rid of archive label */
// function my_theme_archive_title($title)
// {
//     if (is_category()) {
//         $title = single_cat_title('', false);
//     } elseif (is_tag()) {
//         $title = single_tag_title('', false);
//     } elseif (is_post_type_archive()) {
//         $title = post_type_archive_title('', false);
//     } elseif (is_tax()) {
//         $title = single_term_title('', false);
//     }
//     return $title;
// }
// add_filter('get_the_archive_title', 'my_theme_archive_title');


