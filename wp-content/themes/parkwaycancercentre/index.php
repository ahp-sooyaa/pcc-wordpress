<?php get_header() ?>
 from index file <br>
 <div x-data="{ count: 0 }">
    <button x-on:click="count++">Increment</button>
 
    <span x-text="count"></span>
</div>
<pre>
<?php
// The Query.
$the_query = new WP_Query( [
    'post_type' => 'article'
] );

// The Loop.
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . esc_html( get_the_title() ) . '</li>';
	}
	echo '</ul>';
} else {
	esc_html_e( 'Sorry, no posts matched your criteria.' );
}
// Restore original Post Data.
wp_reset_postdata();
?>
</pre>
<?php get_footer() ?>
