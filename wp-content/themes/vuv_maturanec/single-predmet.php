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
$ectspredmet = get_post_meta($post->ID, 'ects_predmet', true);
$satipredavanjapredmet = get_post_meta($post->ID, 'satipredavanja_predmet', true);
$satilabosapredmet = get_post_meta($post->ID, 'satilabosa_predmet', true);
$satikonstrpredmet = get_post_meta($post->ID, 'satikonstr_predmet', true);
$profesori = get_post_meta($post->ID, 'rudr_select2_tags', true);
    $sIstaknutaSLika = "";
while ( have_posts() )
{
    echo '<div class="container">
<div class="row">
  <div class="col-6">
 '.$sGodina.'/'.$sSemestar.' </br> ECTS: '.$ectspredmet.' </br> Sati predavanja: '.$satipredavanjapredmet.'+'.$satilabosapredmet.'+'.$satikonstrpredmet.'
  </div>
<div class="col-6">
Profesori: </br>
';
foreach ($profesori as $prof)
{
    $post_title = get_the_title($prof);
    $post_permalink = get_permalink($prof);
    echo '<a href="'.$post_permalink.'">'.$post_title.'</a>' ;
    echo '</br>';
}
echo '
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

<div class="container mt-5">
  <div class="row">
    
    <div class="col-10">
    </div>
    <div class="col-2">
    <button class="btn btn-danger"><a href="/racunarstvo/predmet/"
 title="Povratak na sve predmete" class="yellowButton">
Povratak
</a> 
</button>
    </div>
  </div>
</div>

    </div>
</main>
<?php
get_footer();
?>

<!-- klikom na godinu predmeta otvara se godina s predmetima -->
<!-- klikom na semestar otvara se semestar predmeta -->
<!-- cjelokupni dizajn stranice -->


