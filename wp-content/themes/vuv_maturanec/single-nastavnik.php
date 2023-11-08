<?php
get_header();
?>
<main>
    <div class="container">
    <h5>single-nastavnik.php</h5>

<?php

if ( have_posts() )
{
    $oNaslovnaZvanja = wp_get_post_terms( $post->ID, 'naslovno_zvanje' );
$sNaslovnoZvanje = "-";
if(sizeof($oNaslovnaZvanja)>0)
{
$sNaslovnoZvanje = $oNaslovnaZvanja[0]->name;
}
    $sIstaknutaSLika = "";
while ( have_posts() )
{
    echo '<div class="container">
<div class="row">
  <div class="col-6">
  Uloga: '.$sNaslovnoZvanje.'
  </div>


</div>
</div>';

    the_post();
the_title();
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
    </div>
</main>
<?php
get_footer();
?>
