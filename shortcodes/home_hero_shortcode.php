<?php
/**
 * Home Hero shortcode
 *
 * @package Kwixlee_Cient_Focused_2026
 */


function home_hero_shortcode ( $atts, $content = null ) {

    //add whatever 'props' you'd like to add here. 
    //Note: I usually have the option for the content creator to include an ID, title, and classes. At least title and classes
    extract(shortcode_atts(array(
        'id'                 => '',
        'classes'            => '',
        'heading'              => '',
        'subheading'        => '',
        'background_image'   => '',
        'cta_copy'                => '',
        'cta_link'                => ''
    ), $atts));

    (strlen($id) > 0) ? $id = 'id="'.$id.'"' : '';
    (strlen($classes) > 0) ? $classes = 'class="'.$classes.'"' : '';
    (strlen($heading) > 0) ? $heading = '<h2 class="hero-home-heading h2-basic">'.$heading.'</h2>' : '';
    (strlen($subheading) > 0) ? $subheading = '<p class="hero-home-subheading">'.$subheading.'</p>' : '';
    (strlen($background_image) > 0) ? $background_markup = 'style="background-image: url('.$background_image.');"' : '';
    (strlen($cta_copy) > 0) ? $cta_markup = '<a href="'.$cta_link.'" class="btn btn-primary cta-home-hero">'.$cta_copy.'</a>' : '';


    $markup = '';

    $markup .= '<div id="'.$id.'" class="hero-home '.$classes.'"'. $background_markup.'>';
    $markup .= '<div class="hero-home-content content-container">';
    $markup .= '<div class="hero-home-titles">';
    $markup .= $heading;
    $markup .= $subheading;
    $markup .= $cta_markup;
    $markup .= '</div>';
    $markup .= '<div class="hero-home-images">';
    $markup .= '<img src="/wp-content/uploads/2025/07/aeric-urban.png" alt="Home Hero Image" class="hero-home-image-one">';
    $markup .= '<img src="/wp-content/uploads/2025/07/aeric-urban.png" alt="Home Hero Image" class="hero-home-image-two">';
    $markup .= '<img src="/wp-content/uploads/2025/07/aeric-urban.png" alt="Home Hero Image" class="hero-home-image-three">';
    $markup .= '</div>';
    $markup .= '</div></div>';

    return $markup;

}
?>