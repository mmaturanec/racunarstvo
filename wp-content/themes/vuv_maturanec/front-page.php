<?php
get_header();
?>
<main>
    <div class="container">
        <h5>front-page.php</h5>
        <div class="container">
  <div class="row">
    <div class="col-9">
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
    <div class="col-3">
        <?php
    dynamic_sidebar( 'glavni-sidebar' );
?>
    </div>
    
  </div>
</div>

    </div>
</main>
<?php
get_footer();
?>