<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
    <div class="nav-container">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(). '/assets/images/logo.webp' ?>" alt="logo" width="100">
        </a>
        <div class="nav">
            <div class="nav-top-header">
                <?php get_template_part('partials/header/language-switcher'); ?>
                <input type="text" placeholder="Search this site">
            </div>            
            <div class="header-menu-container">
                <!-- <?php wp_nav_menu([
                    'theme_location' => 'header_menu',
                    'menu_id' => 'header-menu',
                    'menu_class' => 'header-menu-class'
                ]);

                // Output the Polylang language switcher
                if (function_exists('pll_the_languages')) {
                    pll_the_languages(array(
                        'dropdown' => 1,
                        'show_flags' => 1, // Display flags for languages
                        'show_names' => 0, // Do not display language names
                        'hide_if_empty' => 0, // Show the switcher even if some languages are missing translations
                        'display_names_as' => 'name' // Display language names as 'name' or 'slug'
                    ));
                }
                ?> -->
                <?php 
                    // Get the current language slug of polylang 
                    $current_language = pll_current_language('slug');

                    // Define menu names for each language
                    $menu_names = [
                        'my' => 'Header Menu Burmese', // Menu name for Burmese
                        'zh' => 'Header Menu Chinese', // Menu name for Chinese
                        // Add more languages and menu names as needed
                    ];

                    // Get the menu name based on the current language
                    // Default to English if language not found
                    $menu_name = isset($menu_names[$current_language]) ? $menu_names[$current_language] : 'Header Menu English'; 
                    $menu = wp_get_nav_menu_object($menu_name);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $current_post = get_post(get_the_ID());
                
                    foreach($menu_items as $menu_item): 
                        // if($menu_item->type_label != 'Language switcher'):
                ?>
                    <a href="<?php echo $menu_item->url; ?>" class="<?php echo ($current_post->post_title == $menu_item->title) ? 'active' : '' ?>">
                        <!-- current language url of polylang is '#pll_switcher' -->
                        <p><?php echo $menu_item->title; ?></p>
                    </a>
                <?php
                        // endif; 
                    endforeach; 
                ?>
            </div>        
        </div>
    </div>