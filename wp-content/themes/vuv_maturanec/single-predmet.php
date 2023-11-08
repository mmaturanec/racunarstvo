<?php
get_header();
?>
<main>
    <div class="container">
    <h5>single-predmet.php</h5>

<?php

if ( have_posts() )
{
    $oGodina = wp_get_post_terms( $post->ID, 'godina' );
$sGodina = "-";
if(sizeof($oGodina)>0)
{
$sGodina = $oGodina[0]->name;
}


$oSemestar = wp_get_post_terms( $post->ID, 'semestar' );
$sSemestar = "-";
if(sizeof($oSemestar)>0)
{
$sSemestar = $oSemestar[0]->name;
}
    $sIstaknutaSLika = "";
while ( have_posts() )
{
    echo '<div class="container">
<div class="row">
  <div class="col-6">
 '.$sGodina.'/'.$sSemestar.'
  </div>


</div>
</div>';

    the_post();
    echo "<h2>".$post->post_title."</h2>";
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
<a href="/racunarstvo/predmet/"
 title="Povratak na sve predmete" class="yellowButton">
Povratak na sve predmete
</a> 
    </div>
</main>
<?php
get_footer();
?>

<!-- klikom na godinu predmeta otvara se godina s predmetima -->
<!-- klikom na semestar otvara se semestar predmeta -->
<!-- cjelokupni dizajn stranice -->


