<?php

function register_my_menus()
{
    register_nav_menus(
        [
            'header' => esc_html__('Header Menu', 'pcc'),
            'footer' => esc_html__('Footer Menu', 'pcc'),
        ]
    );
}
add_action('after_setup_theme', 'register_my_menus');

function enqueue_custom_styles_and_scripts()
{
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    wp_enqueue_script('alpine-js', get_template_directory_uri(). '/assets/js/alpine.js', array(), '1.0', 'all');

    if (!is_admin()) {
        /**
        * Get the heck outta here.
        * No, seriously. Leave.
        **/
        wp_dequeue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

function custom_breadcrumbs()
{
    $breadcrumbs = [
        'who-we-are' => [
            'Singapore' => '/sg',
            'About Us' => '/sg/about-us'
        ]
    ];

    // Get the current page slug
    $current_page = get_post(get_the_ID());
    // Check if the current page slug is 'who-we-are'
    if ($current_page->post_type = 'page') {
        echo '<div class="breadcrumbs">';
        
        // Loop through the 'who we are' array
        if(isset($breadcrumbs[$current_page->post_name])) {
            foreach ($breadcrumbs[$current_page->post_name] as $label => $url) {
                echo "<span>";
                echo "<a href='{$url}'>{$label}</a>";
                echo "</span>";
            }
        }

        // Remove the last delimiter from the output
        echo '</div>';
    }
}
// function filter_polylang_languages($args) {
//     // Get the current post or page ID
//     $post_id = get_the_ID();

//     // Get the list of languages
//     $languages = $args['languages'];

//     // Get the list of languages available for the current post or page
//     $post_translations = pll_get_post_translations($post_id);

//     // Remove languages for which the translation doesn't exist for the current post or page
//     foreach ($languages as $slug => $info) {
//         if (!isset($post_translations[$slug])) {
//             unset($args['languages'][$slug]);
//         }
//     }

//     return $args;
// }

// add_filter('pll_the_languages', 'filter_polylang_languages');

// wp_enqueue_style( 'testing', get_stylesheet_uri() );
// wp_enqueue_script();
