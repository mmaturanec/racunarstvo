<?php 
/*
Plugin Name: Dodatak - kabinet nastavnika
Plugin URI: https://vuv.hr
Description: Dodatak za dodavanje mogućnosti odabira kabineta nastavnika
Version: 1.0
Author: Matej Maturanec
Author URI: https://vuv.hr
Text Domain: vuv
*/
function obrisi_post_meta_kabinet()
{
delete_post_meta_by_key('kabinet');
}
register_deactivation_hook( __FILE__, 'obrisi_post_meta_kabinet' );
function add_meta_box_kabinet()
{
add_meta_box( 'vuv_kabinet', 'Status predmeta', 'html_meta_box_kabinet',
'nastavnik');
}
function html_meta_box_kabinet($post)
{
wp_nonce_field('spremi_kabinet', 'kabinet_nonce');
//dohvaćanje meta vrijednosti
$kabinet = get_post_meta($post->ID, 'kabinet', true);
echo '
<div>
<label for="kabinet">Unesite kabinet profesora</label>
<input type="text" id="kabinet"
name="kabinet" value="'.$kabinet.'" />

</div>';
}
function spremi_kabinet($post_id)
{
$is_autosave = wp_is_post_autosave( $post_id );
 $is_revision = wp_is_post_revision( $post_id );
 $is_valid_nonce_kabinet = ( isset( $_POST[ 'kabinet_nonce' ] ) &&
wp_verify_nonce( $_POST[ 'kabinet_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 if ( $is_autosave || $is_revision || !$is_valid_nonce_kabinet) {
 return;
 }
if(!empty($_POST['kabinet']))
{
update_post_meta($post_id, 'kabinet', $_POST['kabinet']);
}
else
{
delete_post_meta($post_id, 'kabinet');
}
}
add_action( 'add_meta_boxes', 'add_meta_box_kabinet' );
add_action( 'save_post', 'spremi_kabinet' );
?>