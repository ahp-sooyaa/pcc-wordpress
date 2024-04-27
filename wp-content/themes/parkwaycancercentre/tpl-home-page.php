<?php 
/* 
Template Name: Home Page 
*/ 

get_header();

get_template_part('partials/header/banner');

// Custom Query
$args = array(
    'post_type'      => 'post',  // Change 'post' to the desired post type
    'posts_per_page' => 10,      // Adjust the number of posts per page
    // Add more query parameters as needed
);

$custom_query = new WP_Query($args);

// The Loop
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) :
        $custom_query->the_post();
        ?>

        <!-- Your HTML structure for displaying each post -->
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>

        <?php
    endwhile;
else :
    // If no posts are found
    ?>
    <p><?php esc_html_e('No posts found', 'your-theme-textdomain'); ?></p>
    <?php
endif;

// Restore original post data
wp_reset_postdata();

get_footer(); 
?>