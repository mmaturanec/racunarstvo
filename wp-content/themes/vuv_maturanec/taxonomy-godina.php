<?php
// Define your term and taxonomy
$term_slug = '1godina';
$taxonomy = 'your-custom-taxonomy';

// Query posts associated with the term
$args = array(
    'post_type' => 'your-custom-post-type',
    'tax_query' => array(
        array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $term_slug,
        ),
    ),
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Display post content here
        the_title();
        the_content();
    endwhile;
else :
    echo 'No posts found';
endif;

wp_reset_postdata(); // Restore the global post data
?>
