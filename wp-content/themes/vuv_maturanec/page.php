<?php
get_header();
?>
<main>
    <div class="container">
        <h5>page.php</h5>
<?php

if ( have_posts() )
{
while ( have_posts() )
{
the_post();
the_title();
the_content();
}
}
?>
    </div>
</main>
<?php
get_footer();
?>