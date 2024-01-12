<?php 

//Reuseable Function

function pageBanner($args = NULL) {
    if (!isset($args['title'])) {
        $args['title'] = get_the_title();
      }
     
      if (!isset($args['subtitle'])) {
        $args['subtitle'] = get_field('page_banner_subtitle');
      }
     
      if (!isset($args['photo'])) {
        if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
          $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
          $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
        }
      }
    ?>

<div class="page-banner">
        <!-- Background image -->
        <div class="page-banner__bg-image" style="background-image: 
        url(<?php echo $args ['photo'];  ?>);"></div>
        <!-- Page banner content -->
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
            <div class="page-banner__intro">
                <p><?php echo $args['subtitle']; ?></p>
            </div>
        </div>
    </div>

<?php }



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
function university_features()
{
    /*  Register header navigation menu
    register_nav_menu('headerMenuLocation', 'Header Menu Location');

     Register footer navigation menus
   register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two'); */

    // Add support for title tags
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
}

// Hook into after_setup_theme action
add_action('after_setup_theme', 'university_features');



function university_adjust_queries($query) {

    if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query() ) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('post_per_page', -1);
    
    }

 if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query() ) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set( 'meta_query', array(
        array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
    )
));

 }
}
add_action('pre_get_posts', 'university_adjust_queries');






?> 


