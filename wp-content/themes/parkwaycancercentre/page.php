<?php 
get_header(); 

get_template_part('partials/header/banner');
?>

<div class="container font-arial page-content">
    <?= the_content(); ?>
</div>

<?php get_footer(); ?>