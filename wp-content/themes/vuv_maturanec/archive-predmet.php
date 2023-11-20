<?php
get_header();
?>
 <header class="masthead">
 <div class="overlay"></div>
 <div class="container">
 <div class="row">
 <div class="col-lg-8 col-md-10 mx-auto">
 <div class="site-heading">
 <h1>Predmeti smjera Programskog inženjerstva</h1>
 </div>
 </div>
 </div>
 </div>
 </header>
 <main>
<?php
echo '<div class="container">';
?>
<h5>archive-predmet.php</h5>
<?php
echo '<h2>1. godina</h2>';
echo '<h5>I. semestar</h5>';
echo '
<table class="table">
  <thead>
    <tr>
      <th scope="col" width="50%">Naziv predmeta</th>
      <th scope="col">ECTS bodova</th>
      <th scope="col">P</th>
      <th scope="col">LV</th>
      <th scope="col">KV</th>
    </tr>
  </thead>
  <tbody>';
    echo daj_predmete( 'isemestar' ); 
    echo '
  </tbody>
</table>
';

echo '<h5>II. semestar</h5>';

echo '
<table class="table">
  <thead>
    <tr>
      <th scope="col" width="50%">Naziv predmeta</th>
      <th scope="col">ECTS bodova</th>
      <th scope="col">P</th>
      <th scope="col">LV</th>
      <th scope="col">KV</th>
    </tr>
  </thead>
  <tbody>';
  echo daj_predmete( 'iisemestar' );
    echo '
  </tbody>
</table>
';

echo '<h2>2. godina</h2>';
echo '<h5>III. semestar</h5>';

echo '
<table class="table">
  <thead>
    <tr>
      <th scope="col" width="50%">Naziv predmeta</th>
      <th scope="col">ECTS bodova</th>
      <th scope="col">P</th>
      <th scope="col">LV</th>
      <th scope="col">KV</th>
    </tr>
  </thead>
  <tbody>';
  echo daj_predmete( 'iiisemestar' );
    echo '
  </tbody>
</table>
';
echo '<h5>IV. semestar</h5>';
echo '
<table class="table">
  <thead>
    <tr>
      <th scope="col" width="50%">Naziv predmeta</th>
      <th scope="col">ECTS bodova</th>
      <th scope="col">P</th>
      <th scope="col">LV</th>
      <th scope="col">KV</th>
    </tr>
  </thead>
  <tbody>';
  echo daj_predmete( 'ivsemestar' );
    echo '
  </tbody>
</table>
';
echo '<h2>3.godina</h2>';
echo '<h5>V. semestar</h5>';
echo '
<table class="table">
  <thead>
    <tr>
      <th scope="col" width="50%">Naziv predmeta</th>
      <th scope="col">ECTS bodova</th>
      <th scope="col">P</th>
      <th scope="col">LV</th>
      <th scope="col">KV</th>
    </tr>
  </thead>
  <tbody>';
  echo daj_predmete( 'vsemestar' );
    echo '
  </tbody>
</table>
';
echo '<h5>VI. semestar</h5>';
echo '
<table class="table">
  <thead>
    <tr>
      <th scope="col" width="50%">Naziv predmeta</th>
      <th scope="col">ECTS bodova</th>
      <th scope="col">P</th>
      <th scope="col">LV</th>
      <th scope="col">KV</th>
    </tr>
  </thead>
  <tbody>';
echo daj_predmete( 'visemestar' );

    echo '
  </tbody>
</table>
';
echo '</div>';
?>
 </main>
<?php
get_footer();
?>
