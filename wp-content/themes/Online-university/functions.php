<?php 
// Function to enqueue scripts and styles
function university_files() {
    // Enqueue main JS file
    wp_enqueue_script('university_main_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

    // Enqueue Google Fonts
    wp_enqueue_style('custome-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    // Enqueue Font Awesome icons
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    // Load main style CSS
    wp_enqueue_style('university_main_style', get_theme_file_uri('/build/style-index.css'));

    // Load extra style CSS
    wp_enqueue_style('university_extra_style', get_theme_file_uri('/build/index.css'));
}

// Hook into wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'university_files');

// Function to add title tag support for pages and register navigation menus
function university_features(){
    // Register header navigation menu
    //register_nav_menu('headerMenuLocation', 'Header Menu Location');

    // Register footer navigation menus
   // register_nav_menu('footerLocationOne', 'Footer Location One');
   // register_nav_menu('footerLocationTwo', 'Footer Location Two');

    // Add support for title tags
    add_theme_support('title-tag');
}

// Hook into after_setup_theme action
add_action('after_setup_theme', 'university_features');
?>
