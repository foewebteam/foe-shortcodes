<?php
/*
Plugin Name: FOE Shortcodes for Bootstrap
Description: Bootstrap Shortcodes for FOE Research Websites.
Author: Tom Wells
Version: 0.1
Author URI: http://www.environment.leeds.ac.uk
License: GPL2
*/

// Spacer Shortcode
function spacer( $atts ) {
  $spacer_atts = shortcode_atts(array (
    'size' => '20'
  ), $atts );
  return '<div class="spacer" style="height: ' . $spacer_atts['size'] . 'px;"></div>';
}
add_shortcode( 'spacer' , 'spacer' );

// Container Shortcode
function bs_container( $atts, $content = null ) {
  return '<div class="container">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'container' , 'bs_container' );

// Row Shortcode
function bs_row( $atts, $content = null ) {
  return '<div class="row">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'row' , 'bs_row' );

// col-1 Shortcode
function bs_col_1( $atts, $content = null ) {
  $col_1_atts = shortcode_atts( array(
    'sm' => '6',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-1 col-sm-' . wp_kses_post( $col_1_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_1_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-1' , 'bs_col_1' );

// col-2 Shortcode
function bs_col_2( $atts, $content = null ) {
  $col_2_atts = shortcode_atts( array(
    'sm' => '6',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-2 col-sm-' . wp_kses_post( $col_2_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_2_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-2' , 'bs_col_2' );

// col-3 Shortcode
function bs_col_3( $atts, $content = null ) {
  $col_3_atts = shortcode_atts( array(
    'sm' => '6',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-3 col-sm-' . wp_kses_post( $col_3_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_3_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-3' , 'bs_col_3' );

// col-4 Shortcode
function bs_col_4( $atts, $content = null ) {
  $col_4_atts = shortcode_atts( array(
    'sm' => '6',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-4 col-sm-' . wp_kses_post( $col_4_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_4_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-4' , 'bs_col_4' );

// col-5 Shortcode
function bs_col_5( $atts, $content = null ) {
  $col_5_atts = shortcode_atts( array(
    'sm' => '6',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-5 col-sm-' . wp_kses_post( $col_5_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_5_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-5' , 'bs_col_5' );

// col-6 Shortcode
function bs_col_6( $atts, $content = null ) {
  $col_6_atts = shortcode_atts( array(
    'sm' => '12',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-6 col-sm-' . wp_kses_post( $col_6_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_6_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-6' , 'bs_col_6' );

// col-7 Shortcode
function bs_col_7( $atts, $content = null ) {
  $col_7_atts = shortcode_atts( array(
    'sm' => '12',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-7 col-sm-' . wp_kses_post( $col_7_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_7_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-7' , 'bs_col_7' );

// col-8 Shortcode
function bs_col_8( $atts, $content = null ) {
  $col_8_atts = shortcode_atts( array(
    'sm' => '12',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-8 col-sm-' . wp_kses_post( $col_8_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_8_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-8' , 'bs_col_8' );

// col-9 Shortcode
function bs_col_9( $atts, $content = null ) {
  $col_9_atts = shortcode_atts( array(
    'sm' => '12',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-9 col-sm-' . wp_kses_post( $col_9_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_9_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-9' , 'bs_col_9' );

// col-10 Shortcode
function bs_col_10( $atts, $content = null ) {
  $col_10_atts = shortcode_atts( array(
    'sm' => '12',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-10 col-sm-' . wp_kses_post( $col_10_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_10_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-10' , 'bs_col_10' );

// col-11 Shortcode
function bs_col_11( $atts, $content = null ) {
  $col_11_atts = shortcode_atts( array(
    'sm' => '12',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-11 col-sm-' . wp_kses_post( $col_11_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_11_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-11' , 'bs_col_11' );

// col-12 Shortcode
function bs_col_12( $atts, $content = null ) {
  $col_12_atts = shortcode_atts( array(
    'sm' => '12',
    'xs' => '12'
  ), $atts );
  return '<div class="col-md-12 col-sm-' . wp_kses_post( $col_12_atts['sm'] ) . ' col-xs-' . wp_kses_post( $col_12_atts['xs'] ) . '">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col-12' , 'bs_col_12' );

// Empty p tag fix
add_filter( 'the_content', 'remove_empty_p', 20, 1 );
function remove_empty_p( $content ){
	// clean up p tags around block elements
	$content = preg_replace( array(
		'#<p>\s*<(div|aside|section|article|header|footer)#',
		'#</(div|aside|section|article|header|footer)>\s*</p>#',
		'#</(div|aside|section|article|header|footer)>\s*<br ?/?>#',
		'#<(div|aside|section|article|header|footer)(.*?)>\s*</p>#',
		'#<p>\s*</(div|aside|section|article|header|footer)#',
	), array(
		'<$1',
		'</$1>',
		'</$1>',
		'<$1$2>',
		'</$1',
	), $content );
	return preg_replace('#<p>(\s|&nbsp;)*+(<br\s*/*>)*(\s|&nbsp;)*</p>#i', '', $content);
}

// Enqueue the script
function foe_shortcodes_script() {
  wp_enqueue_script( 'foe-js', '/wp-content/plugins/foe-shortcodes/foe-shortcodes.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'foe_shortcodes_script' );
?>
