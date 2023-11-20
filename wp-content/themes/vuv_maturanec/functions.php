<?php
if ( ! function_exists( 'inicijaliziraj_temu' ) )
{
    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );
function inicijaliziraj_temu()
{
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
add_theme_support( 'custom-background', apply_filters(
'test_custom_background_args', array(
'default-color' => 'ffffff',
'default-image' => '',
) ) );
add_theme_support( 'customize-selective-refresh-widgets' );
}
}
add_action( 'after_setup_theme', 'inicijaliziraj_temu' );
//učitavanje CSS datoteke
function ucitaj_glavni_css()
{
 wp_enqueue_style( 'glavni-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ucitaj_glavni_css' );
//učitavanje javascript datoteke
function ucitaj_glavni_js()
{
/*
=== VAŽNO ===
Prije upisivanja linije ispod potrebno je kreirati direktorij js i u njemu
kreirati datoteku skripta.js.
*/
 wp_enqueue_script('glavni-js', get_template_directory_uri().'/js/skripta.js' ,
array('jquery'), true);
}

function ucitaj_bootstrap_css()
{
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/styles.css');
}
add_action( 'wp_enqueue_scripts', 'ucitaj_bootstrap_css' );
function ucitaj_boostrap_min_js()
{
 wp_enqueue_script('glavni-bootstrap-min-js', get_template_directory_uri().'/js/bootstrap.min.js' ,
array('jquery'), true);
}
add_action( 'wp_enqueue_scripts', 'ucitaj_boostrap_min_js', 1 );
function ucitaj_script_js()
{
 wp_enqueue_script('scripts-js', get_template_directory_uri().'/js/scripts.js' ,
array('jquery'), true);
}
add_action( 'wp_enqueue_scripts', 'ucitaj_script_js', 1 );
function register_sidebar1()
{
 register_sidebar(
 array (
 'name' => "Footer sidebar 1",
 'id' => 'footer-sidebar-1',
 'description' => "Footer sidebar 1",
 'before_widget' => '<div class="widget-content">',
 'after_widget' => "</div>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 )
 );
}
function register_sidebar2()
{
 register_sidebar(
 array (
 'name' => "Footer sidebar 2",
 'id' => 'footer-sidebar-2',
 'description' => "Footer sidebar 2",
 'before_widget' => '<div class="widget-content">',
 'after_widget' => "</div>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 )
 );
}function register_sidebar3()
{
 register_sidebar(
 array (
 'name' => "Footer sidebar 3",
 'id' => 'footer-sidebar-3',
 'description' => "Footer sidebar 3",
 'before_widget' => '<div class="widget-content">',
 'after_widget' => "</div>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 )
 );
}function register_sidebar4()
{
 register_sidebar(
 array (
 'name' => "Footer sidebar 4",
 'id' => 'footer-sidebar-4',
 'description' => "Footer sidebar 4",
 'before_widget' => '<div class="widget-content">',
 'after_widget' => "</div>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 )
 );
}
add_action( 'widgets_init', 'register_sidebar1' );
add_action( 'widgets_init', 'register_sidebar2' );
add_action( 'widgets_init', 'register_sidebar3' );
add_action( 'widgets_init', 'register_sidebar4' );
function aktiviraj_sidebar()
{
 register_sidebar(
 array (
 'name' => "Glavni sidebar",
 'id' => 'glavni-sidebar',
 'description' => "Glavni sidebar",
 'before_widget' => '<div class="widget-content">',
 'after_widget' => "</div>",
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 )
 );
}
add_action( 'widgets_init', 'aktiviraj_sidebar' );
function ucitaj_jquery()
{
 wp_enqueue_script('ucitaj_jquery_1', get_template_directory_uri().'/js/jquery.js' ,
array('jquery'), true);
}
add_action( 'wp_enqueue_scripts', 'ucitaj_jquery', 1 );
add_action( 'wp_enqueue_scripts', 'ucitaj_glavni_js', 1 );
// priprema lv3
function registriraj_nastavnik_cpt() {
    $labels = array(
    'name' => _x( 'Nastavnici', 'Post Type General Name', 'vuv' ),
    'singular_name' => _x( 'Nastavnik', 'Post Type Singular Name', 'vuv' ),
    'menu_name' => __( 'Nastavnici', 'vuv' ),
    'name_admin_bar' => __( 'Nastavnici', 'vuv' ),
    'archives' => __( 'Nastavnici arhiva', 'vuv' ),
    'attributes' => __( 'Atributi', 'vuv' ),
    'parent_item_colon' => __( 'Roditeljski element', 'vuv' ),
    'all_items' => __( 'Svi nastavnici', 'vuv' ),
    'add_new_item' => __( 'Dodaj novoga nastavnika', 'vuv' ),
    'add_new' => __( 'Dodaj novi', 'vuv' ),
    'new_item' => __( 'Novi nastavnik', 'vuv' ),
    'edit_item' => __( 'Uredi nastavnika', 'vuv' ),
    'update_item' => __( 'Ažuriraj nastavnika', 'vuv' ),
    'view_item' => __( 'Pogledaj nastavnika', 'vuv' ),
    'view_items' => __( 'Pogledaj nastavnike', 'vuv' ),
    'search_items' => __( 'Pretraži nastavnike', 'vuv' ),
    'not_found' => __( 'Nije pronađeno', 'vuv' ),
    'not_found_in_trash' => __( 'Nije pronađeno u smeću', 'vuv' ),
    'featured_image' => __( 'Glavna slika', 'vuv' ),
    'set_featured_image' => __( 'Postavi glavnu sliku', 'vuv' ),
    'remove_featured_image' => __( 'Ukloni glavnu sliku', 'vuv' ),
    'use_featured_image' => __( 'Postavi za glavnu sliku', 'vuv' ),
    'insert_into_item' => __( 'Umentni', 'vuv' ),
    'uploaded_to_this_item' => __( 'Preneseno', 'vuv' ),
    'items_list' => __( 'Lista', 'vuv' ),
    'items_list_navigation' => __( 'Navigacija među nastanvicima', 'vuv' ),
    'filter_items_list' => __( 'Filtriranje nastavnika', 'vuv' ),
    );
    $args = array(
    'label' => __( 'Nastavnik', 'vuv' ),
    'description' => __( 'Nastavnik post type', 'vuv' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-groups',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => false,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page',
    );
    register_post_type( 'nastavnik', $args );
    }
    add_action( 'init', 'registriraj_nastavnik_cpt', 0 );
    function registriraj_taksonomiju_naslovno_zvanje() {
        $labels = array(
        'name' => _x( 'Naslovna zvanja', 'Taxonomy General Name',
        'vuv' ),
        'singular_name' => _x( 'Naslovno zvanje', 'Taxonomy Singular Name',
        'vuv' ),
        'menu_name' => __( 'Naslovna zvanja', 'vuv' ),
        'all_items' => __( 'Sva naslovna zvanja', 'vuv' ),
        'parent_item' => __( 'Roditeljsko zvanje', 'vuv' ),
        'parent_item_colon' => __( 'Roditeljsko zvanje', 'vuv' ),
        'new_item_name' => __( 'Novo naslovno zvanje', 'vuv' ),
        'add_new_item' => __( 'Dodaj novo naslovno zvanje', 'vuv' ),
        'edit_item' => __( 'Uredi naslovno zvanje', 'vuv' ),
        'update_item' => __( 'Ažuiriraj naslovno zvanje', 'vuv' ),
        'view_item' => __( 'Pogledaj naslovno zvanje', 'vuv' ),
        'separate_items_with_commas' => __( 'Odvojite zvanja sa zarezima', 'vuv' ),
        'add_or_remove_items' => __( 'Dodaj ili ukloni naslovno zvanje', 'vuv' ),
        'choose_from_most_used' => __( 'Odaberi među najčešće korištenima', 'vuv' ),
        'popular_items' => __( 'Popularna naslovna zvanja', 'vuv' ),
        'search_items' => __( 'Pretraga', 'vuv' ),
        'not_found' => __( 'Nema rezultata', 'vuv' ),
        'no_terms' => __( 'Nema naslovnih zvanja', 'vuv' ),
        'items_list' => __( 'Lista naslovnih zvanja', 'vuv' ),
        'items_list_navigation' => __( 'Navigacija', 'vuv' ),
        );
        $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        );
        register_taxonomy( 'naslovno_zvanje', array( 'nastavnik' ), $args );
        }
        add_action( 'init', 'registriraj_taksonomiju_naslovno_zvanje', 0 );
        function daj_nastavnike( $slug )
        {
        $args = array(
        'posts_per_page' => -1,
        'post_type' => 'nastavnik',
        'post_status' => 'publish',
        'tax_query' => array(
        array(
        'taxonomy' => 'naslovno_zvanje',
        'field' => 'slug',
        'terms' => $slug
        )
        ));
        $nastavnici = get_posts( $args );
        $sHtml = "<ul>";
        foreach ($nastavnici as $nastavnik)
        {
        $sNastavnikUrl = $nastavnik->guid;
        $sNastavnikNaziv = $nastavnik->post_title;
        $sHtml .= '<li><a href="'.$sNastavnikUrl.'">'.$sNastavnikNaziv.'</a></li>';
        }
        $sHtml .= "</ul>";
        return $sHtml;
        }        
// kraj pripreme lv3
//lv3
function registriraj_predmet_cpt() {
    $labels = array(
    'name' => _x( 'Predmeti', 'Post Type General Name', 'vuv' ),
    'singular_name' => _x( 'Predmet', 'Post Type Singular Name', 'vuv' ),
    'menu_name' => __( 'Predmeti', 'vuv' ),
    'name_admin_bar' => __( 'Predmeti', 'vuv' ),
    'archives' => __( 'Predmeti arhiva', 'vuv' ),
    'attributes' => __( 'Atributi', 'vuv' ),
    'parent_item_colon' => __( 'Roditeljski element', 'vuv' ),
    'all_items' => __( 'Svi Predmeti', 'vuv' ),
    'add_new_item' => __( 'Dodaj novi Predmet', 'vuv' ),
    'add_new' => __( 'Dodaj novi', 'vuv' ),
    'new_item' => __( 'Novi Predmet', 'vuv' ),
    'edit_item' => __( 'Uredi Predmet', 'vuv' ),
    'update_item' => __( 'Ažuriraj Predmet', 'vuv' ),
    'view_item' => __( 'Pogledaj Predmet', 'vuv' ),
    'view_items' => __( 'Pogledaj Predmet', 'vuv' ),
    'search_items' => __( 'Pretraži Predmet', 'vuv' ),
    'not_found' => __( 'Nije pronađeno', 'vuv' ),
    'not_found_in_trash' => __( 'Nije pronađeno u smeću', 'vuv' ),
    'featured_image' => __( 'Glavna slika', 'vuv' ),
    'set_featured_image' => __( 'Postavi glavnu sliku', 'vuv' ),
    'remove_featured_image' => __( 'Ukloni glavnu sliku', 'vuv' ),
    'use_featured_image' => __( 'Postavi za glavnu sliku', 'vuv' ),
    'insert_into_item' => __( 'Umentni', 'vuv' ),
    'uploaded_to_this_item' => __( 'Preneseno', 'vuv' ),
    'items_list' => __( 'Lista', 'vuv' ),
    'items_list_navigation' => __( 'Navigacija među predmetima', 'vuv' ),
    'filter_items_list' => __( 'Filtriranje predmeta', 'vuv' ),
    );
    $args = array(
    'label' => __( 'Predmet', 'vuv' ),
    'description' => __( 'Predmet post type', 'vuv' ),
    'labels' => $labels,
    'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-groups',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => false,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'page',
    );
    register_post_type( 'predmet', $args );
    }
    add_action( 'init', 'registriraj_predmet_cpt', 0 );
    function registriraj_taksonomiju_godina() {
        $labels = array(
        'name' => _x( 'Godina', 'Taxonomy General Name',
        'vuv' ),
        'singular_name' => _x( 'Godine', 'Taxonomy Singular Name',
        'vuv' ),
        'menu_name' => __( 'Godine', 'vuv' ),
        'all_items' => __( 'Sve Godine', 'vuv' ),
        'parent_item' => __( 'Roditeljska Godina', 'vuv' ),
        'parent_item_colon' => __( 'Roditeljska Godina', 'vuv' ),
        'new_item_name' => __( 'Nova Godina', 'vuv' ),
        'add_new_item' => __( 'Dodaj novu Godinu', 'vuv' ),
        'edit_item' => __( 'Uredi Godinu', 'vuv' ),
        'update_item' => __( 'Ažuiriraj Godinu', 'vuv' ),
        'view_item' => __( 'Pogledaj Godinu', 'vuv' ),
        'separate_items_with_commas' => __( 'Odvojite Godinu sa zarezima', 'vuv' ),
        'add_or_remove_items' => __( 'Dodaj ili ukloni Godinu', 'vuv' ),
        'choose_from_most_used' => __( 'Odaberi među najčešće korištenima', 'vuv' ),
        'popular_items' => __( 'Popularne Godine', 'vuv' ),
        'search_items' => __( 'Pretraga', 'vuv' ),
        'not_found' => __( 'Nema rezultata', 'vuv' ),
        'no_terms' => __( 'Nema predmeta', 'vuv' ),
        'items_list' => __( 'Lista Godina', 'vuv' ),
        'items_list_navigation' => __( 'Navigacija', 'vuv' ),
        );
        $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        );
        register_taxonomy( 'godina', array( 'predmet' ), $args );
        }
        add_action( 'init', 'registriraj_taksonomiju_godina', 0 );
        function registriraj_taksonomiju_semestar() {
            $labels = array(
            'name' => _x( 'Semestar', 'Taxonomy General Name',
            'vuv' ),
            'singular_name' => _x( 'Semestri', 'Taxonomy Singular Name',
            'vuv' ),
            'menu_name' => __( 'Semestari', 'vuv' ),
            'all_items' => __( 'Svi Semestar', 'vuv' ),
            'parent_item' => __( 'Roditeljski Semestar', 'vuv' ),
            'parent_item_colon' => __( 'Roditeljski Semestar', 'vuv' ),
            'new_item_name' => __( 'Novi Semestar', 'vuv' ),
            'add_new_item' => __( 'Dodaj novi Semestar', 'vuv' ),
            'edit_item' => __( 'Uredi Semestar', 'vuv' ),
            'update_item' => __( 'Ažuiriraj Semestar', 'vuv' ),
            'view_item' => __( 'Pogledaj Semestar', 'vuv' ),
            'separate_items_with_commas' => __( 'Odvojite Semestar sa zarezima', 'vuv' ),
            'add_or_remove_items' => __( 'Dodaj ili ukloni Semestar', 'vuv' ),
            'choose_from_most_used' => __( 'Odaberi među najčešće korištenima', 'vuv' ),
            'popular_items' => __( 'Popularni Semestar', 'vuv' ),
            'search_items' => __( 'Pretraga', 'vuv' ),
            'not_found' => __( 'Nema rezultata', 'vuv' ),
            'no_terms' => __( 'Nema predmeta', 'vuv' ),
            'items_list' => __( 'Lista Semestara', 'vuv' ),
            'items_list_navigation' => __( 'Navigacija', 'vuv' ),
            );
            $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            );
            register_taxonomy( 'semestar', array( 'predmet' ), $args );
            }
            add_action( 'init', 'registriraj_taksonomiju_semestar', 0 );

            function daj_predmete( $slug )
            {
            $args = array(
            'posts_per_page' => -1,
            'post_type' => 'predmet',
            'post_status' => 'publish',
            'tax_query' => array(
            array(
            'taxonomy' => 'semestar',
            'field' => 'slug',
            'terms' => $slug
            )
            ));
            $nastavnici = get_posts( $args );

 
       

            $sHtml = "";
            foreach ($nastavnici as $nastavnik)
            {
            $sNastavnikUrl = $nastavnik->guid;
            $sNastavnikNaziv = $nastavnik->post_title;

            $satipredavanja = $nastavnik->satipredavanja_predmet;
            $ects =  $nastavnik->ects_predmet;
            $satilabosa =  $nastavnik->satipredavanja_predmet;
            $satikonstr =  $nastavnik->satipredavanja_predmet;
        
            $sHtml .= '<tr><td><a href="'.$sNastavnikUrl.'">'.$sNastavnikNaziv.'</a></td><td>'.$ects.'</td><td>'.$satipredavanja.'</td><td>'.$satilabosa.'</td><td>'.$satikonstr.'</td></tr>';
            }
            $sHtml .= "";
            return $sHtml;
            }        
//kraj lv3
//priprema lv4
function add_meta_box_titula()
{
add_meta_box( 'vsmti_nastavnik_titula', 'Titula', 'html_meta_box_nastavnik', 'nastavnik');
}
function html_meta_box_nastavnik($post)
{
wp_nonce_field('spremi_titlu_nastavnika', 'titula_prefiks_nonce');
wp_nonce_field('spremi_titlu_nastavnika', 'titula_sufiks_nonce');
//dohvaćanje meta vrijednosti
$titula_prefiks = get_post_meta($post->ID, 'titula_prefiks_nastavnika', true);
$titula_sufiks = get_post_meta($post->ID, 'titula_sufiks_nastavnika', true);
echo '
<div>
<div>
<label for="titula_prefiks_nastavnika">Titula prefiks nastavnika: </label>
<input type="text" id="titula_prefiks_nastavnika"
name="titula_prefiks_nastavnika" value="'.$titula_prefiks.'" />
</div><br/>
<div>
<label for="titula_sufiks_nastavnika">Titula sufiks nastavnika: </label>
<input type="text" id="titula_sufiks_nastavnika"
name="titula_sufiks_nastavnika" value="'.$titula_sufiks.'" />
</div>
</div>';
}
function spremi_titlu_nastavnika($post_id)
{
$is_autosave = wp_is_post_autosave( $post_id );
 $is_revision = wp_is_post_revision( $post_id );
 $is_valid_nonce_titula_prefiks = ( isset( $_POST[ 'titula_prefiks_nonce' ] ) && wp_verify_nonce(
$_POST[ 'titula_prefiks_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 $is_valid_nonce_titula_sufiks = ( isset( $_POST[ 'titula_sufiks_nonce' ] ) && wp_verify_nonce(
$_POST[ 'titula_sufiks_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 if ( $is_autosave || $is_revision || !$is_valid_nonce_titula_prefiks ||
!$is_valid_nonce_titula_sufiks) {
 return;
 }
if(!empty($_POST['titula_prefiks_nastavnika']))
{
update_post_meta($post_id, 'titula_prefiks_nastavnika',
$_POST['titula_prefiks_nastavnika']);
}
else
{
delete_post_meta($post_id, 'titula_prefiks_nastavnika');
}
if(!empty($_POST['titula_sufiks_nastavnika']))
{
update_post_meta($post_id, 'titula_sufiks_nastavnika',
$_POST['titula_sufiks_nastavnika']);
}
else
{
delete_post_meta($post_id, 'titula_sufiks_nastavnika');
}
}
add_action( 'add_meta_boxes', 'add_meta_box_titula' );
add_action( 'save_post', 'spremi_titlu_nastavnika' );
//kraj priprema lv4
//lv4
function add_meta_box_predmet()
{
add_meta_box( 'vuv_predmet', 'Predmet', 'html_meta_box_predmet', 'predmet');
}
function html_meta_box_predmet($post)
{
wp_nonce_field('spremi_info_predmet', 'ects_nonce');
wp_nonce_field('spremi_info_predmet', 'satipredavanja_nonce');
wp_nonce_field('spremi_info_predmet', 'satilabosa_nonce');
wp_nonce_field('spremi_info_predmet', 'satikonstr_nonce');

wp_nonce_field('spremi_info_predmet', 'nastavnici_nonce');


//dohvaćanje meta vrijednosti
$ects = get_post_meta($post->ID, 'ects_predmet', true);
$satipredavanja = get_post_meta($post->ID, 'satipredavanja_predmet', true);
$satilabosa = get_post_meta($post->ID, 'satilabosa_predmet', true);
$satikonstr = get_post_meta($post->ID, 'satikonstr_predmet', true);

$nastavnici = get_post_meta($post->ID, 'nastavnici', true);

echo '
<div>
<div>
<label for="ects_predmet">ECTS bodova: </label>
<input type="number" id="ects_predmet"
name="ects_predmet" value="'.$ects.'" />
</div><br/>
<div>
<label for="satipredavanja_predmet">Sati predavanja: </label>
<input type="number" id="satipredavanja_predmet"
name="satipredavanja_predmet" value="'.$satipredavanja.'" />
</div><br/>
<div>
<label for="satilabosa_predmet">Sati laboratorijskih vježbi: </label>
<input type="number" id="satilabosa_predmet"
name="satilabosa_predmet" value="'.$satilabosa.'" />
</div><br/>
<div>
<label for="satikonstr_predmet">Sati konstrukcijskih vježbi: </label>
<input type="number" id="satikonstr_predmet"
name="satikonstr_predmet" value="'.$satikonstr.'" />
</div><br/>
<div>
</div>
</div>
';
}

function spremi_predmet($post_id)
{
$is_autosave = wp_is_post_autosave( $post_id );
 $is_revision = wp_is_post_revision( $post_id );
 $is_valid_ects_nonce = ( isset( $_POST[ 'ects_nonce' ] ) && wp_verify_nonce(
$_POST[ 'ects_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
$is_valid_satipredavanja_nonce = ( isset( $_POST[ 'satipredavanja_nonce' ] ) && wp_verify_nonce(
    $_POST[ 'satipredavanja_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    $is_valid_satilabosa_nonce = ( isset( $_POST[ 'satilabosa_nonce' ] ) && wp_verify_nonce(
        $_POST[ 'satilabosa_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
        $is_valid_satikonstr_nonce = ( isset( $_POST[ 'satikonstr_nonce' ] ) && wp_verify_nonce(
            $_POST[ 'satikonstr_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
    
 if ( $is_autosave || $is_revision || !$is_valid_ects_nonce || !$is_valid_satipredavanja_nonce || !$is_valid_satilabosa_nonce || !$is_valid_satikonstr_nonce) {
 return;
 }
if(!empty($_POST['ects_predmet']))
{
update_post_meta($post_id, 'ects_predmet',
$_POST['ects_predmet']);
}
else
{
delete_post_meta($post_id, 'ects_predmet');
}
if(!empty($_POST['satipredavanja_predmet']))
{
update_post_meta($post_id, 'satipredavanja_predmet',
$_POST['satipredavanja_predmet']);
}
else
{
delete_post_meta($post_id, 'satipredavanja_predmet');
}
if(!empty($_POST['satilabosa_predmet']))
{
update_post_meta($post_id, 'satilabosa_predmet',
$_POST['satilabosa_predmet']);
}
else
{
delete_post_meta($post_id, 'satilabosa_predmet');
}
if(!empty($_POST['satikonstr_predmet']))
{
update_post_meta($post_id, 'satikonstr_predmet',
$_POST['satikonstr_predmet']);
}
else
{
delete_post_meta($post_id, 'satikonstr_predmet');
}
}
add_action( 'add_meta_boxes', 'add_meta_box_predmet' );
add_action( 'save_post', 'spremi_predmet' );
// kraj







//SELECT BOX!!!!!
//KOPIRAJ SVE ISPOD DA RADI
add_action( 'admin_menu', 'rudr_metabox_for_select2' );
add_action( 'save_post', 'rudr_save_metaboxdata', 10, 2 );

/*
 * Add a metabox
 * I hope you're familiar with add_meta_box() function, so, nothing new for you here
 */
function rudr_metabox_for_select2() {
	add_meta_box( 'rudr_select2', 'Odabir nastavnika', 'rudr_display_select2_metabox', 'predmet', 'normal', 'default' );
}
 
/*
 * Display the fields inside it
 */
function rudr_display_select2_metabox( $post_object ) {
	
	// do not forget about WP Nonces for security purposes
	
	// I decided to write all the metabox html into a variable and then echo it at the end
	$html = '';
	
	// always array because we have added [] to our <select> name attribute
	$appended_tags = get_post_meta( $post_object->ID, 'rudr_select2_tags',true );
	$appended_posts = get_post_meta( $post_object->ID, 'rudr_select2_posts',true );
	
	/*
	 * It will be just a multiple select for tags without AJAX search
	 * If no tags found - do not display anything
	 * hide_empty=0 means to show tags not attached to any posts
	 */
    $argsS = array(
        'posts_per_page' => -1,
        'post_type' => 'nastavnik',
        'post_status' => 'publish');
        $nastavnici = get_posts( $argsS );
        $nastavnici = get_posts( $argsS );
        $nameNas = [];
        foreach($nastavnici as $nas)
        {
            array_push($nameNas, $nas->post_title);
        }
	if( $tags = $nastavnici ) {
		$html .= '<p><label for="rudr_select2_tags">Profesor:</label><br /><select id="rudr_select2_tags" name="rudr_select2_tags[]" multiple="multiple" style="width:99%;max-width:25em;">';
		foreach( $tags as $tag ) {
			$selected = ( is_array( $appended_tags ) && in_array( $tag->ID, $appended_tags ) ) ? ' selected="selected"' : '';
			$html .= '<option value="' . $tag->ID . '"' . $selected . '>' . $tag->post_title . '</option>';
		}
		$html .= '<select></p>';

	}
  
	echo $html;
    
}


function rudr_save_metaboxdata( $post_id, $post ) {
	
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
 
	// if post type is different from our selected one, do nothing

		if( isset( $_POST['rudr_select2_tags'] ) )
        update_post_meta($post_id, 'rudr_select2_tags', $_POST[ 'rudr_select2_tags' ]);
		else
			delete_post_meta($post_id, 'rudr_select2_tags', $nastavnici);
        
		if( isset( $_POST['rudr_select2_posts'] ) )
			update_post_meta( $post_id, 'rudr_select2_posts', $_POST['rudr_select2_posts'] );
		else
			delete_post_meta( $post_id, 'rudr_select2_posts' );
	return $post_id;
}
add_action( 'admin_enqueue_scripts', 'rudr_select2_enqueue' );
function rudr_select2_enqueue(){

	wp_enqueue_style('select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css' );
	wp_enqueue_script('select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js', array('jquery') );
	
	// please create also an empty JS file in your theme directory and include it too
	wp_enqueue_script('mycustom', get_stylesheet_directory_uri() . '/mycustom.js', array( 'jquery', 'select2' ) ); 
	
}
?>