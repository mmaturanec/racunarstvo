<?php
get_header();
?>
<main>
    <div class="container">
        <h5>category.php</h5>
<?php

if ( have_posts() )
{
while ( have_posts() )
{
    the_post();
    echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>';
the_content();

}
}
?>
    </div>
</main>
<?php
get_footer();
?>