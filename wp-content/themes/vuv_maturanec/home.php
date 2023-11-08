<?php
get_header();
?>
<main>
    <div class="container">
    <h5>home.php</h5>

<?php

if ( have_posts() )
{
    $sIstaknutaSLika = "";
while ( have_posts() )
{
    the_post();
    echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>';
if(get_the_post_thumbnail_url($post->ID))
{
    $sIstaknutaSLika = get_the_post_thumbnail_url($post->ID);
}
else{
    $sIstaknutaSLika = get_template_directory_uri(). "/assets/img/about-bg.jpg";
}
echo '<div class="container">
<div class="row">
  <div class="col-6">
  <img style="width: 400px;" class=img-fluid" src="'.$sIstaknutaSLika.'">
  </div>
  <div class="col-6">
   '.$post->post_content.'
  </div>

</div>
</div>';


}
}
?>
<?php
$next_link = get_next_posts_link('Slijedeća stranica', $max_pages);
$prev_link = get_previous_posts_link('Prethodna stranica');
?>

<?php if ($prev_link) : ?>
    <div class="nav-previous "><?php echo $prev_link; ?></div>
<?php endif; ?>

<?php if ($next_link) : ?>
    <div class="nav-next "><?php echo $next_link; ?></div>
<?php endif; ?>
    </div>
    

</main>
<?php
get_footer();
?>