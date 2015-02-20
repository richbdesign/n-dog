<?php
/**
 * @package WordPress
 */
 

// Shortcodes

//half column
function fullcolumn() {
    return '<div class="col-1-1">';
}
add_shortcode('fullcol', 'fullcolumn');

//half column
function halfcolumn() {
    return '<div class="col-1-2">';
}
add_shortcode('halfcol', 'halfcolumn');

//third column
function thirdcolumn() {
    return '<div class="col-1-3">';
}
add_shortcode('thirdcol', 'thirdcolumn');

//third column
function fourthcolumn() {
    return '<div class="col-1-4">';
}
add_shortcode('fourthcol', 'fourthcolumn');

//faq
function faqdiv() {
    return '<div class="faq">';
}
add_shortcode('faq', 'faqdiv');

//bio
function biodiv() {
    return '<div class="col-1-3 bio">';
}
add_shortcode('bio', 'biodiv');

//closediv
function closediv() {
    return '</div>';
}
add_shortcode('close', 'closediv');

//cleardiv
function cleardiv() {
    return '<div class="clear"></div>';
}
add_shortcode('clear', 'cleardiv');

//event
function thin_text( $atts, $content = null ) {
   return '<div class="thin_text">'.do_shortcode($content).'</div>';
}
add_shortcode('shortcolumn', 'thin_text');

?>