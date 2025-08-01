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
        'heading'            => '',
        'subheading'         => '',
        'description'        => '',
        'background_image'   => '',
        'cta_copy'           => '',
        'cta_link'           => ''
    ), $atts));

    (strlen($id) > 0) ? $id = 'id="'.$id.'"' : '';
    (strlen($classes) > 0) ? $classes = 'class="'.$classes.'"' : '';
    (strlen($heading) > 0) ? $heading = '<h2 class="hero-home-heading h2-basic">'.$heading.'</h2>' : '';
    (strlen($subheading) > 0) ? $subheading = '<h3 class="hero-home-subheading">'.$subheading.'</h3>' : '';
    (strlen($description) > 0) ? $description = '<p class="hero-home-description">'.$description.'</p>' : '';
    (strlen($background_image) > 0) ? $background_markup = 'style="background-image: url('.$background_image.');"' : '';
    (strlen($cta_copy) > 0) ? $cta_markup = '<a href="'.$cta_link.'" class="btn btn-primary cta-home-hero">'.$cta_copy.'</a>' : '';


    $markup = '';

    $markup .= '<div id="'.$id.'" class="hero-home '.$classes.'"'. $background_markup.'>';
    $markup .= '<div class="hero-home-content content-container">';
    $markup .= '<div class="hero-home-titles">';
    $markup .= $heading;
    $markup .= $subheading;
    $markup .= $description;
    $markup .= $cta_markup;
    $markup .= '</div>';
    $markup .= '<div class="hero-home-images">';
    $markup .= '<img src="/wp-content/uploads/2025/07/cameraman-on-set-rotated.jpg" alt="Home Hero Image" class="hero-home-image-one">';
    $markup .= '<img src="/wp-content/uploads/2025/07/arri-film-camera-on-dolly-rotated.jpg" alt="Home Hero Image" class="hero-home-image-two">';
    $markup .= '<img src="/wp-content/uploads/2025/07/clapboard-rotated.jpg" alt="Home Hero Image" class="hero-home-image-three">';
    $markup .= '</div>';
    $markup .= '</div></div>';

    return $markup;

}
?>