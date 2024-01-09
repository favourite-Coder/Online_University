<?php 

function university_files() {

    // JS
    wp_enqueue_script('university_main_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
   // Google fonts
    wp_enqueue_style('custome-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    //fontawesome icons
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"');

    //load css 
    wp_enqueue_style('university_main_style',
get_theme_file_uri('/build/style-index.css'));


wp_enqueue_style('university_extra_style',
get_theme_file_uri('/build/index.css'));

}
add_action('wp_enqueue_scripts', 
'university_files');